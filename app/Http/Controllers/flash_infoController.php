<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class flash_infoController extends Controller
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
            "contenu"=>"required",
            
        ]);

      

        DB::table("flash_infos")->insert([
            "contenu"=>$request->contenu,
            "statut"=>1,
           
        ]);

        return redirect("admin/show_flash_info");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $deleted = DB::table('flash_infos')->where('id', $id)->delete();
        return redirect("admin/show_flash_info");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flash_info = DB::table('flash_infos')->select('id','contenu','statut')->where('id', $id)->first();
        return view('admin/edite_flash_info', compact('flash_info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "contenu"=>"required",
            
        ]);

        DB::table("flash_infos")->where('id', $id)->update([
            "contenu"=>$request->contenu,
            "statut"=>1,
           
        ]);

        return redirect("admin/show_flash_info");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }

    public function add_flash_info()
    {
        return view("admin.add_flash_info");
    }

    public function show_flash_info()
    {
        $flash_infos=DB::table("flash_infos")->get();
        return view("admin.show_flash_info",compact("flash_infos"));
    }
}
