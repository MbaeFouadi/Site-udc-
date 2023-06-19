<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosLiens extends Controller
{
    // COMPOSANTES
    public function composantes (){
        return view('composantes.composantes');
    }

    // FORMATION
    public function formations (){
        return view('formations.formation');
    }
    public function admission (){
        return view('formations.admission');
    }
    public function inscription (){
        return view('formations.inscription');
    }

    // ETUDIANTS 
    public function cooperative () {
        return view('etudiant.cooperative');
    }
    public function mutuelle () {
        return view('etudiant.mutuelle');
    }
    public function bibliotheque () {
        return view('etudiant.bibliotheque');
    }
    public function oeuvre () {
        return view('etudiant.oeuvre');
    }

    // PARTENARIATS 
    public function partenariat () {
        return view('partenariats.partener');
    }

    // PARTENARIATS 
    public function rechereche () {
        return view('rechereche.rechereche');
    }

    // PARTENARIATS 
    public function contact () {
        return view('contact.contact');
    }
}
