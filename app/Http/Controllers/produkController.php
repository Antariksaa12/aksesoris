<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $query = Produk::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('nama', 'like', '%' . $searchTerm . '%')
                ->orWhere('stock', 'like', '%' . $searchTerm . '%');
        }

        $produks = $query->get();

        return view('produks.index', compact('produks'));
    }

    public function indexProduk(Request $request)
    {
        $query = Produk::query();
        $produks = $query->get();
        return view('produk', compact('produks'));
    }

    public function create()
    {
        return view('produks.create');
    }

    public function store(Request $request)
    {
        try {
            // dd($request->all());
            $request->validate([
                'nama' => 'required|max:255',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // validasi file gambar
                'harga' => 'required|numeric',
                'stock' => 'required|numeric'
            ]);

            if ($request->hasFile('gambar')) {
                $imageName = time().'.'.$request->gambar->extension();  
                $request->gambar->move(public_path('assets/image'), $imageName);
            }
    
            Produk::create([
                        'nama' => $request->nama,
                        'gambar' => $imageName,
                        'harga' => $request->harga,
                    ]);
        return redirect()->route('produks.index')->with('success', 'Produk created successfully.');
        } catch (ValidationException $e) {
            dd($e);
            return redirect()->route('produks.create')->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('produks.create')->with('error', 'Failed to create Produk.')->withInput();
        }
    }

    public function edit(Produk $produk)
    {
        return view('produks.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        try {
            $request->validate([
                'nama' => 'required|max:255',
                'gambar' => 'required|max:255',
                'harga' => 'required|numeric',

            ]);


            $produk->update($request->all());

            return redirect()->route('produks.index')->with('success', 'Produk updated successfully.');
        } catch (ValidationException $e) {
            dd($e);
            return redirect()->route('produks.edit', $produk->id)->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('produks.edit', $produk->id)->with('error', 'Failed to update Produk.')->withInput();
        }
    }

    public function destroy(Produk $produk)
    {
        try {
            $produk->delete();

            return redirect()->route('produks.index')->with('success', 'Produk deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('produks.index')->with('error', 'Failed to delete Produk.');
        }
    }
}