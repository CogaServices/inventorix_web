<?php

namespace App\Http\Controllers;
use App\Http\Requests\Valeur_Caracteristique as Valeur_caracteristiqueRequest;
use App\Models\{Valeur_caracteristique, Caracteristique};
use Illuminate\Http\Request;

class Valeur_caracteristiqueController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Caracteristique=null)
    {
        $query = $Nom_Caracteristique ? Caracteristique::where('Nom_Caracteristique',$Nom_Caracteristique)->firstOrFail()->valeur_caracteristiques() : Valeur_caracteristique::query();
        $valeur_caracteristiques = $query->paginate(2);
        $caracteristiques = Caracteristique::all();
        return view('admin.Generales.Valeur_caracteristique.Index', compact('valeur_caracteristiques', 'caracteristiques', 'Nom_Caracteristique'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caracteristiques = Caracteristique::all();
        return view('admin.Generales.Valeur_caracteristique.Ajouter', compact('caracteristiques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Valeur_caracteristiqueRequest $valeur_caracteristiqueRequest, Valeur_caracteristique $valeur_caracteristique)
    {
        Valeur_caracteristique::create($valeur_caracteristiqueRequest->all());
       // $valeur_caracteristique->update($valeur_caracteristiqueRequest->all());
        return redirect()->route('valeur_caracteristique.index')->with('info', 'L\'valeur_caracteristique a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Valeur_caracteristique  $valeur_caracteristique
     * @return \Illuminate\Http\Response
     */
    public function show(Valeur_caracteristique $valeur_caracteristique)
    {
        $caracteristique = $valeur_caracteristique->caracteristique->Nom_Caracteristique;
        return view('admin.Generales.Valeur_caracteristique.Ajouter', compact('valeur_caracteristique', 'caracteristique'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Valeur_caracteristique  $valeur_caracteristique
     * @return \Illuminate\Http\Response
     */
    public function edit(Valeur_caracteristique $valeur_caracteristique)
    {
        $caracteristiques = Caracteristique::all();
        return view('admin.Generales.Valeur_caracteristique.Editer', compact('caracteristiques'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Valeur_caracteristique  $valeur_caracteristique
     * @return \Illuminate\Http\Response
     */
    public function update(Valeur_caracteristiqueRequest $valeur_caracteristiqueRequest, Valeur_caracteristique $valeur_caracteristique)
    {
        $valeur_caracteristique->update($valeur_caracteristiqueRequest->all());
        return redirect()->route('valeur_caracteristique.Index')->with('info', 'Le niveau ( valeur_caracteristique ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Valeur_caracteristique  $valeur_caracteristique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Valeur_caracteristique $valeur_caracteristique)
    {
        $valeur_caracteristique->delete();
        return back()->with('info', 'Le valeur_caracteristique a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Valeur_caracteristique::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le valeur_caracteristique a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Valeur_caracteristique::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le valeur_caracteristique a bien été restauré.');
    }
}
