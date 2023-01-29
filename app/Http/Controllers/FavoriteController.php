<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index(){
        return view('fav.index');
    }
    public function fav(){
        return redirect('/shop')->with('success', 'Successfully!');
    }
}
