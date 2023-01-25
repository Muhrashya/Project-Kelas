<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function index()
    {
        return view('halaman.checkout');
    }
    public function bayar(){
        return redirect('/home')->with('success', 'Successfully!');
    }
}
