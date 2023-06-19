<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class evenementsController extends Controller
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
            "titre"=>"required",
            "description"=>"required",
           
            "img"=>'required|image|mimes:jpeg,png,jpg|max:1048',
        ]);

        $imageName = $request->titre.'.'.$request->img->extension();
        $request->img->move(public_path('images/events'), $imageName);

        DB::table("evenements")->insert([
            "titre"=>$request->titre,
            'slug' => Str::slug($request->titre),
            "description"=>$request->description,
            "date"=>now(),
            "img"=>$imageName
        ]);

        return redirect("admin/show_event");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evenement = Evenement::find($id);
        $evenement->delete();
        // $event= $evenement->id;
        // echo $evenement;
        // $event->delete();
        // $evenement->delete();
        return redirect('admin/show_event');    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $events = Evenement::find($id);
        return view('admin/edite-event', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "titre"=>"required",
            "description"=>"required",
            "slug"=>"",
            "slug"=>"",
            "img"=>'image|mimes:jpeg,png,jpg|max:1048',

        ]);

        // $imageName = $request->titre.'.'.$request->img->extension();
        // $request->img->move(public_path('images/events'), $imageName);

        DB::table("evenements")->where('id', $id)->update([
            "titre"=>$request->titre,
            'slug' => Str::slug($request->titre),
            "description"=>$request->description,
            "img"=>"",
            "date"=>now(),
        ]);

        return redirect("admin/show_event");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
        // $evenement = Evenement::find($id);
        // echo $evenement;
    }

    public function add_event()
    {
        return view ('admin.add_event');
    }

    public function show_event()
    {
        $events=DB::table("evenements")->orderByDesc("id")->get();
        return view ('admin.show_event',compact("events"));
    }

    
}
