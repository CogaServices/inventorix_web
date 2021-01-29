<?php

namespace App\Http\Controllers;
use App\Http\Requests\Contrat as ContratRequest;
use App\Models\{Contrat, Visite};
use Illuminate\Http\Request;

class ContratController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Visite=null)
    {
        $query = $Nom_Visite ? Visite::where('Nom_Visite',$Nom_Visite)->firstOrFail()->contrats() : Contrat::query();
        $contrats = $query->paginate(2);
        $visites = Visite::all();
        return view('admin.Generales.Contrats.Index', compact('contrats', 'visites', 'Nom_Visite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $visites = Visite::all();
        return view('admin.Generales.Contrats.Ajouter', compact('visites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContratRequest $contratRequest, Contrat $contrat)
    {
        Contrat::create($contratRequest->all());
       // $contrat->update($contratRequest->all());
        return redirect()->route('contrat.index')->with('info', 'L\'contrat a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show(Contrat $contrat)
    {
        $visite = $contrat->visite->Nom_Visite;
        return view('admin.Generales.Contrats.Ajouter', compact('contrat', 'visite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrat $contrat)
    {
        $visites = Visite::all();
        return view('admin.Generales.Contrats.Editer', compact('visites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function update(ContratRequest $contratRequest, Contrat $contrat)
    {
        $contrat->update($contratRequest->all());
        return redirect()->route('contrat.Index')->with('info', 'Le niveau ( contrat ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrat $contrat)
    {
        $contrat->delete();
        return back()->with('info', 'Le contrat a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Contrat::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le contrat a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Contrat::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le contrat a bien été restauré.');
    }
}
