<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Produk;
use Illuminate\Validation\ValidationException;

class PembelianController extends Controller
{
    public function index(Request $request)
    {
        $query = Pembelian::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('nama', 'like', '%' . $searchTerm . '%')
                ->orWhere('stock', 'like', '%' . $searchTerm . '%');
        }

        $pembelians = $query->get();

        return view('pembelians.index', compact('pembelians'));
    }

    public function create()
    {
        $produks = Produk::all();
        return view('pembelians.create', compact('produks'));
    }

    public function store(Request $request)
    {
        try {
            // dd($request->all());
            $request->validate([
                'nama' => 'required|max:255',
                'satuan' => 'required|max:255',
            ]);

            Pembelian::create($request->all());

            return redirect()->route('pembelians.index')->with('success', 'Pembelian created successfully.');
        } catch (ValidationException $e) {
            dd($e);
            return redirect()->route('pembelians.create')->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('pembelians.create')->with('error', 'Failed to create Pembelian.')->withInput();
        }
    }

    public function edit(Pembelian $pembelian)
    {
        $suppliers = Produk::all();
        return view('pembelians.edit', compact('pembelian', 'produks'));
    }

    public function update(Request $request, Pembelian $pembelian)
    {
        try {
            $request->validate([
                'nama' => 'required|max:255',
                'satuan' => 'required|max:255',
            ]);


            $pembelian->update($request->all());

            return redirect()->route('pembelians.index')->with('success', 'Pembelian updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->route('pembelians.edit', $pembelian->id)->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return redirect()->route('pembelians.edit', $pembelian->id)->with('error', 'Failed to update Pembelian.')->withInput();
        }
    }

    public function destroy(Pembelian $pembelian)
    {
        try {
            $pembelian->delete();

            return redirect()->route('pembelians.index')->with('success', 'Pembelian deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('pembelians.index')->with('error', 'Failed to delete Pembelian.');
        }
    }
}