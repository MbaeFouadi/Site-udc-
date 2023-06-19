<?php

namespace App\Http\Controllers;

use App\Models\chef_departs;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chefDepartementsController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $composante=DB::table("composantes")
        ->where("slug",$id)
        ->first();
        $departements=DB::table("departements")
        ->join("diplomes","departements.diplome_id","diplomes.id")
        ->leftJoin("chef_departs","departements.id_depart","chef_departs.id_depart")
        ->select("departements.*","diplomes.*","chef_departs.*")
        ->where("statut",1)
        ->where("departements.id_comp",$composante->id_comp)
        ->get();

        $chefComp=DB::table("chef_composantes")
        ->where("id_comp",$composante->id_comp)
        ->first();

        return view("composantes.composantes",compact("composante","departements","chefComp"));
        
    }

    public function edit (string $id)
    {
        $diplomes = DB::table("diplomes")->get();
        $composantes = DB::table("composantes")->get();
        // $departs = Departement::find($id);
        // use Illuminate\Support\Facades\DB;
 
        // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();
        // dd($departs);

        $departs = DB::table('departements')
                    ->join('diplomes', 'departements.diplome_id', 'diplomes.id')
                    ->select('departements.*','diplomes.*')
                    ->where('id_depart', $id)
                    ->first();

        return view('admin/edite-departement', compact('departs','diplomes','composantes'));
    }

    public function update (Request $request, string $id)
    {
        
        // echo "CETTE PARTIE N'EST PAS ENCORE FINI DE DEVELOPPER";
        $request->validate([
            "code_depart"=>"required",
            "designa_depart"=>"required",
            "id_comp"=> 'required',
            "diplome_id"=> 'required',
        ]);
        // echo($request);
        DB::table("departements")->where('id_depart', $id)->update([
            "code_depart"=>$request->code_depart,
            "designa_depart"=>$request->designa_depart,
            "statut"=> 1,
            "id_comp"=>$request->id_comp,
            "diplome_id"=>$request->diplome_id  
        ]);

        return redirect("admin/show_departement");
    }

    // public function delete_chef_departement ($id)
    // {
    //     return 'OK';
    // }
}
