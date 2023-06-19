<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class partenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $partenaires=DB::table("projets")->get();
        return view("partenariats.partener",compact("partenaires"));
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
            "design_partner"=>"required",
            "img"=>'required|image|mimes:jpeg,png,jpg|max:1048',
        ]);

        $imageName = $request->design_partner.'.'.$request->img->extension();
        $request->img->move(public_path('images/partner'), $imageName);

        DB::table("partenaires")->insert([
            "design_partner"=>$request->design_partner,
            "statut"=>1,
            "img"=>$imageName
        ]);

        return redirect("admin/show_partner");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partenaire = Partenaire::find($id);
        $partenaire->delete();
        return redirect('admin/show_partner');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partenaires = Partenaire::find($id);
        return view('admin.edite_partner', compact('partenaires'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "design_partner"=>"required",
            "img"=>'image|mimes:jpeg,png,jpg|max:1048',
        ]);

        $imageName = $request->design_partner.'.'.$request->img->extension();
        $request->img->move(public_path('images/partner'), $imageName);

        DB::table("partenaires")->where('id_parte', $id)->update([
            "design_partner"=>$request->design_partner,
            "statut"=>1,
            "img"=>$imageName
        ]);

        return redirect("admin/show_partner");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function add_event()
    {
        return view("admin.add_event");
    }

    public function add_partner()
    {
        return view("admin.add_partner");
    }

    public function show_partner()
    {

        $partenaires=DB::table("partenaires")->get();
        return view("admin.show_partner",compact("partenaires"));
    }
}
