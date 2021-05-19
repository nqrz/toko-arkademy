<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::orderBy('id', 'asc')->paginate(50);
        return view('welcome', compact('produks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $data = request()->validate([
            'nama_produk' => '',
            'keterangan' => '',
            'harga' => '',
            'jumlah' => ''
        ]);
        
        Produk::create($data);
        
        return redirect('');
    }

    public function edit(Produk $produk)
    {
        return view('edit', compact('produk'));
    }

    public function update(Produk $produk)
    {
        $data = request()->validate([
            'nama_produk' => '',
            'keterangan' => '',
            'harga' => '',
            'jumlah' => ''
        ]);
        
        $produk->update($data);

        return redirect('');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect('');
    }
}
