<?php

namespace App\Http\Controllers;

use App\Models\Rice;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.products', ['data' => Rice::paginate(15), 'title' => 'Produk', 'no' => 1]);
    }
    public function updateScreen($id)
    {
        $data = Rice::findOrFail($id);
        return view('pages.update', ['data' => $data, 'title' => 'Update ' . $data->merek, 'id' => $id]);
    }
    public function addScreen()
    {
        return view('pages.add', ['title' => "Tambah Produk"]);
    }
    public function add(Request $request)
    {
        $request->validate([
            'merek' => 'required',
            'harga' => 'required|numeric|gt:0',
            'harga_grosir' => 'required|numeric|gt:0',
            'kilo' => 'required|numeric|gt:0',
            'stok' => 'required|numeric|gt:0',
        ]);
        if (
            Rice::create([
                'merek' => $request->merek,
                'harga' => $request->harga,
                'harga_grosir' => $request->harga_grosir,
                'kilo' => $request->kilo,
                'stok' => $request->stok
            ])
        ) {
            return redirect(route('products'));
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'merek' => 'required',
            'harga' => 'required|numeric|gt:0',
            'harga_grosir' => 'required|numeric|gt:0',
            'kilo' => 'required|numeric|gt:0',
            'stok' => 'required|numeric|gt:0',
        ]);

        if (
            Rice::find($id)->update([
                'merek' => $request->merek,
                'harga' => $request->harga,
                'harga_grosir' => $request->harga_grosir,
                'kilo' => $request->kilo,
                'stok' => $request->stok
            ])
        ) {
            return redirect(route('products'));
        }
    }
    public function delete(Request $request, $id)
    {
        Rice::find($id)->delete();
        return back();
    }
}
