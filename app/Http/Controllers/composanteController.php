<?php

namespace App\Http\Controllers;

use App\Models\Composante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Str;


class composanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $composantes=DB::table("composantes")->get();
        return view("composantes.index",compact(['composantes']));
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
            "code_comp"=>"required",
            "design_comp"=>"required",
            "description"=>"required",
            "img_comp"=>'required|image|mimes:jpeg,png,jpg|max:1048',
            "ile"=>"required",
            "lieu"=>"required",
        ]);

        $imageName = $request->code_comp.'.'.$request->img_comp->extension();
        $request->img_comp->move(public_path('images/composantes/'), $imageName);

        DB::table("composantes")->insert([
            "code_comp"=>$request->code_comp,
            "design_comp"=>$request->design_comp,
            'slug' => Str::slug($request->design_comp),
            "description"=>$request->description,
            "img_comp"=>$imageName,
            "ile"=>$request->ile,
            "lieu"=>$request->lieu,
            "created_at"=>now(),
        ]);

        return redirect("admin/show_composante");
    }

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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $composantes = Composante::find($id);

        return view('admin/edite-composante', compact('composantes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "code_comp"=>"required",
            "design_comp"=>"required",
            "description"=>"required",
            "img_comp"=>'image|mimes:jpeg,png,jpg|max:1048',
            "ile"=>"required",
            "lieu"=>"required",
        ]);

        // $imageName = $request->code_comp.'.'.$request->img_comp->extension();
        // $request->img_comp->move(public_path('images/composantes/'), $imageName);

        DB::table("composantes")->where('id_comp', $id)->update([
            "code_comp"=>$request->code_comp,
            "design_comp"=>$request->design_comp,
            'slug' => Str::slug($request->design_comp),
            "description"=>$request->description,
            "img_comp"=> '',
            "ile"=>$request->ile,
            "lieu"=>$request->lieu,
            "created_at"=>now(),
        ]);

        return redirect("admin/show_composante");
        // dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function add_composante()
    {
        return view('admin.add_composante');
    }

    public function show_composante()
    {
        $composantes=DB::table("composantes")->get();
        return view('admin.show_composante',compact("composantes"));
    }

    public function add_chef_composante()
    {
        
        $chefComps=DB::table("chef_composantes")->get();
        $composantes=DB::table("composantes")->get();
        return view("admin.add_chef_composante",compact("composantes","chefComps"));
    }

    public function store_chef_composante(Request $request)
    {
        $request->validate([
            'nom'=>"required",
            'prenom'=>"required",
           
            'id_comp'=>"required",

        ]);

        DB::table("chef_composantes")
        ->insert([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'adress'=>$request->adress,
            'telephone'=>$request->telephone,
            'id_comp'=>$request->id_comp,
        ]);

        return redirect("admin/add_chef_composante");
    }

    public function detail_comp ($id)
    {
        $composante=DB::table("composantes")->where("id_comp",$id)->first();
        $departements=DB::table("departements")
        ->join("diplomes","departements.diplome_id","diplomes.id")
        ->where("id_comp",$id)
        ->select("departements.*","diplomes.*")
        ->get();
        
        return view("admin.detail-departements",compact("departements","composante"));
    }

}
