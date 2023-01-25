<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Providers\RouteServiceProvider;

class ProfileController extends Controller
{
    public function index(){
        return view('halaman.profile');
    }

    public function store(Request $request){
  
        $profile = new Profile;

        $profile->alamat = $request->input('alamat');
        $profile->nohp = $request->input('nohp');
        $profile->save();

        return redirect('/profile')->with('success', 'Successfully!');
    }
}
