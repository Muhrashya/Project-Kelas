<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\detail;
class ShopController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('halaman.shop',['product' => $product]);
    }
    public function blog(){
        return view('halaman.blog');
    }
    public function crud(){
        $detail = detail::all();
        return view('halaman.crud', ['detail' => $detail]);
    }
    public function create(){
        return view('halaman.createD');
    }
    public function store(Request $request){
            $detail = new detail;
            // $detail->kode_produk = $request->kode_produk;
            $detail->berat_produk = $request->berat_produk;
            $detail->deskripsi_produk = $request->deskripsi_produk;
            $detail->ranting = $request->ranting;
            $detail->save();

            return redirect('/crud')->with('success', 'Successfully!');
    }
    public function destroy($id)
    {
        $detail = detail::find($id);
        $detail->delete();

        return redirect('/crud')->with('success', 'Successfully!');
    }
    public function edit($id){
        $detail = detail::find($id);
        return view('halaman.edit',['detail' => $detail]);
    }
    public function update(Request $request, $id){
        $detail = detail::find($id);
            $detail->berat_produk = $request->berat_produk;
            $detail->deskripsi_produk = $request->deskripsi_produk;
            $detail->ranting = $request->ranting;
            $detail->save();
            return redirect('/crud')->with('success', 'Successfully!');
    }
}
