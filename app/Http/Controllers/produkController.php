<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    public function guest()
    {
        $produks = Produk::all(); // Ambil semua produk dari database
    
        return view('produk', compact('produks')); // Pass variabel $produks ke view
    }
    

    public function index(Request $request)
    {
        $query = Produk::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('nama', 'like', '%' . $searchTerm . '%')
                ->orWhere('stock', 'like', '%' . $searchTerm . '%');
        }

        $produks = $query->get();

        return view('admin.produks.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produks.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|max:255',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
                'stock' => $request->stock
            ]);

            return redirect()->route('admin.produks.index')->with('success', 'Produk created successfully.');
        } catch (ValidationException $e) {
            return redirect()->route('admin.produks.create')->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return redirect()->route('admin.produks.create')->with('error', 'Failed to create Produk.')->withInput();
        }
    }

    public function edit(Produk $produk)
    {
        return view('admin.produks.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        try {
            $request->validate([
                'nama' => 'required|max:255',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'harga' => 'required|numeric',
                'stock' => 'required|numeric'
            ]);

            // get existing img
            $imageName = $produk->gambar;

            // if has upload new img
            if ($request->hasFile('gambar')) {
                $imageName = time().'.'.$request->gambar->extension();  
                $request->gambar->move(public_path('assets/image'), $imageName);

                // delete img if upload new one
                if ($produk->gambar && file_exists(public_path('assets/image/' . $produk->gambar))) {
                    unlink(public_path('assets/image/' . $produk->gambar));
                }
            }

            $produk->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'gambar' => $imageName, 
                'stock' => $request->stock,
            ]);

            return redirect()->route('admin.produks.index')->with('success', 'Produk updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->route('admin.produks.edit', $produk->id)->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return redirect()->route('admin.produks.edit', $produk->id)->with('error', 'Failed to update Produk.')->withInput();
        }
    }


    public function destroy(Produk $produk)
    {
        try {
            $produk->delete();

            return redirect()->route('admin.produks.index')->with('success', 'Produk deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.produks.index')->with('error', 'Failed to delete Produk.');
        }
    }
}
