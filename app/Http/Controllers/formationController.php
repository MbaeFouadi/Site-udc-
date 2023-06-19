<?php

namespace App\Http\Controllers;

use App\Models\chef_departs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $formations = DB::table("composantes")
            // ->join("departements","composantes.id_comp","departements.id_comp")
            // ->select("composantes.*","departements.*")
            ->get();

        foreach ($formations as $formation) {
            $deps = DB::table("departements")->where("id_comp", $formation->id_comp)->get();
        }
        return view("formations.formation", compact("formations"));
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
            "code_depart" => "required",
            "designa_depart" => "required",
            "id_comp" => "required",
            "diplome_id" => "required",
        ]);


        DB::table("departements")->insert([
            "code_depart" => $request->code_depart,
            "designa_depart" => $request->designa_depart,
            "statut" => 1,
            "id_comp" => $request->id_comp,
            "diplome_id" => $request->diplome_id,
        ]);

        return redirect("admin/show_departement");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function add_departement()
    {
        $composantes = DB::table("composantes")->get();
        $diplomes = DB::table("diplomes")->get();
        return view('admin.add_departement', compact("composantes", "diplomes"));
    }

    public function show_departement()
    {
        $composantes = DB::table("composantes")
        ->get();
        return view('admin.show_departement',compact('composantes'));
    }

    public function add_chef_departement()
    {
        $chef_departs=DB::table("chef_departs")
        ->join("composantes","composantes.id_comp","chef_departs.id_comp")
        ->join("departements","departements.id_depart","chef_departs.id_depart")
        ->get();
        $composantes = DB::table("composantes")->get();
        $departements=DB::table("departements")->get();
        return view("admin.add_chef_departement",compact(["composantes","departements","chef_departs"]));
    }

    public function store_chef_departement(Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "id_comp"=>"required",
            "id_depart"=>"required",
        ]);

        DB::table("chef_departs")->insert([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "adress"=>$request->adress,
            "telephone"=>$request->telephone,
            "id_comp"=>$request->id_comp,
            "id_depart"=>$request->id_depart,
        ]);

        
        return redirect("admin/add_chef_departement");
    }

    public function delete_chef_departement($id)
    {
        $deleted = DB::table('departements')->where('id_depart', $id)->delete();
        // $delete = chef_departs::find($id);
        // echo $delete;
        // $delete->delete();
        return redirect("admin/show_departement");
    }
}
