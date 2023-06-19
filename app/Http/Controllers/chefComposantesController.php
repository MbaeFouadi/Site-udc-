<?php

namespace App\Http\Controllers;

use App\Models\ChefComposante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chefComposantesController extends Controller
{
    public  function show (string $id)
    {
        $chef_departements = ChefComposante::find($id);
        $chef_departements->delete();
        return redirect("admin/add_chef_composante");
    }

    public function edit(string $id)
    {
        $chef_departements = ChefComposante::find($id);

        return view('admin/edite-chef-comp', compact('chef_departements'));
    }

    public function update (Request $request, string $id)
    {
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "id_comp"=>"required"
        ]);

        DB::table("chef_composantes")->where('id_chef_comp', $id)->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "adress"=>$request->adress,
            "telephone"=>$request->telephone,
            "id_comp"=>$request->id_comp,
            "created_at"=>now(),
        ]);

        return redirect("admin/add_chef_composante");
        // dd($request);
    }

    public function destroy (string $id)
    {

    }

}
