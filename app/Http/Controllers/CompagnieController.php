<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use Illuminate\Http\Request;

class CompagnieController extends Controller
{
    //Read  index & show
    public function index(){
        $comps = Compagnie::all();
        return view('admin.comp.indexComp', compact('comps'));
    }

    public function show(Compagnie $id){
        $comp = $id;
        return view('admin.comp.showComp', compact('comp'));
    }

    //Delete
    public function destroy(Compagnie $id){
        $id->delete();
        return redirect()->route('comp.index')->with('warning', 'Element bien supprimé');
    }

    // Create & store
    public function create(){
        return view('admin.comp.createComp');
    }
    public function store(Request $request){

        request()->validate([
            "nom" => ["required", "min:3", "max:15"],
            "adresse" => ["required"],
            "postal" => ["required", "numeric"],
            "numero" => ["required", "numeric"],
            "email" => ["required", "email"],
            "nomcontact" => ["required"],
            "prenomcontact" => ["required"],
            "img" => ["required"],
        ]);

        $comp = new Compagnie();
        $comp->nom = $request->nom;
        $comp->adresse = $request->adresse;
        $comp->postal = $request->postal;
        $comp->numero = $request->numero;
        $comp->email = $request->email;
        $comp->nomcontact = $request->nomcontact;
        $comp->prenomcontact = $request->prenomcontact;
        $comp->img = $request->img;
        $comp->save();
        return redirect()->route('comp.index')->with('success', 'Users bien ajouté');
    }

    // Edit & update
    public function edit(Compagnie $id){
        $comp = $id;
        return view('admin.comp.editComp', compact('comp'));
    }

    public function update(Compagnie $id, Request $request){
        request()->validate([
            "nom" => ["required", "min:3", "max:15"],
            "adresse" => ["required"],
            "postal" => ["required", "numeric"],
            "numero" => ["required", "numeric"],
            "email" => ["required", "email"],
            "nomcontact" => ["required"],
            "prenomcontact" => ["required"],
            "img" => ["required"],
        ]);
        $comp = $id;
        $comp->nom = $request->nom;
        $comp->adresse = $request->adresse;
        $comp->postal = $request->postal;
        $comp->numero = $request->numero;
        $comp->email = $request->email;
        $comp->nomcontact = $request->nomcontact;
        $comp->prenomcontact = $request->prenomcontact;
        $comp->img = $request->img;
        $comp->save();
        return redirect()->route('comp.show', $comp->id)->with('success', 'Users bien edité');
    }
}
