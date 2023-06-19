<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class homeController extends Controller
{
    //

    public function index()
    {
        // $composantes=DB::table("departements")->get();
        $composantes=DB::table("composantes")->get();
        $actualites=DB::table("actualites")->limit(6)->orderByDesc("id_actualite")->get();
        
        return view("index",compact('composantes','actualites'));
    }

    public function accueil()
    {
        return view("admin.index");
    }

    public function add_user()
    {
        return view("admin.add_user");
    }

    public function show_user()
    {
        return view("admin.show_user");
    }


  
}
