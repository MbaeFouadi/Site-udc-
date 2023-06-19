<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class projetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            "titre" => "required",
            "contenu" => "required",

            "img_projet" => 'required|image|mimes:jpeg,png,jpg|max:1048',
        ]);

        $imageName = $request->titre . '.' . $request->img_projet->extension();
        $request->img_projet->move(public_path('images/projets'), $imageName);

        DB::table("projets")->insert([
            "titre" => $request->titre,
            'slug' => Str::slug($request->titre),
            "statut" => 1,
            "contenu" => $request->contenu,
            "date_publie" => now(),
            "img_projet" => $imageName
        ]);

        return redirect("admin/show_projet");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $projet = DB::table("projets")
            ->where("slug", $id)
            ->first();

        return view("partenariats.projet", compact("projet"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $projets = Projet::find($id);
        return view('admin.edite_projet', compact('projets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "titre" => "required",
            "contenu" => "required",

            "img_projet" => 'image|mimes:jpeg,png,jpg|max:1048',
        ]);

        $imageName = $request->titre . '.' . $request->img_projet->extension();
        $request->img_projet->move(public_path('images/projets'), $imageName);

        DB::table("projets")->insert([
            "titre" => $request->titre,
            'slug' => Str::slug($request->titre),
            "statut" => 1,
            "contenu" => $request->contenu,
            "date_publie" => now(),
            "img_projet" => $imageName
        ]);

        return redirect("admin/show_projet");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }

    public function add_projet()
    {

        return view("admin.add_projet", compact("projets"));
    }


    public function show_projet()
    {
        $projets = DB::table("projets")->orderByDesc("id_projet")->get();

        return view("admin.show_projet", compact("projets"));
    }

    public function delete_projet($id)
    {
        $delete = Projet::find($id);
        $delete->delete();
        return redirect("admin/show_projet");
    }
}
