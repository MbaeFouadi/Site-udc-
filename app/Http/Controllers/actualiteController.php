<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class actualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $actualites=DB::table("actualites")->orderByDesc("id_actualite")->get();
        return view("actualite.index",compact(['actualites']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "titre"=>"required",
            "contenu"=>"required",
            "lieu"=>"required",
            "img_actualites"=>'required|image|mimes:jpeg,png,jpg|max:1048',
        ]);

        $imageName = $request->titre.'.'.$request->img_actualites->extension();
        $request->img_actualites->move(public_path('images/actualites'), $imageName);

        DB::table("actualites")->insert([
            "titre"=>$request->titre,
            'slug' => Str::slug($request->titre),
            "contenu"=>$request->contenu,
            "lieu"=>$request->lieu,
            "date"=>now(),
            "img_actualites"=>$imageName
        ]);

        return redirect("admin/show_actualite");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $actualites=DB::table("actualites")->limit(3)->orderByDesc("id_actualite")->get();

        $actualite=DB::table("actualites")
        ->where("slug",$id)
        ->first();
        return view("actualite.actualite",compact(['actualite','actualites']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $actualites= DB::table('actualites')->where('id_actualite', $id)->first();
        // dd($actualite);
        return view('admin/edite_actualite', compact('actualites'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "titre"=>"required",
            "contenu"=>"required",
            "lieu"=>"required",
            "img_actualites"=>'image|mimes:jpeg,png,jpg|max:1048',
        ]);

        
        $imageName = $request->titre.'.'.$request->img_actualites->extension();
        $request->img_actualites->move(public_path('images/actualites'), $imageName);

        DB::table("actualites")->where('id_actualite', $id)->update([
            "titre"=>$request->titre,
            'slug' => Str::slug($request->titre),
            "contenu"=>$request->contenu,
            "lieu"=>$request->lieu,
            "date"=>now(),
            "img_actualites"=>$imageName
        ]);

        return redirect("admin/show_actualite");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function add_actualite()
    {
        return view("admin.add_actualite");
    }

    public function show_actualite()
    {
        $actualites=DB::table("actualites")->orderByDesc("id_actualite")->get();
        return view("admin.show_actualite",compact("actualites"));
    }

    public function delete_actualite ($id)
    {
        $deleted = DB::table('actualites')->where('id_actualite', $id)->delete();
        return redirect("admin/show_actualite");
    }
}
