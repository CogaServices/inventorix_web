<?php

namespace App\Http\Controllers;
use App\Http\Requests\Realisation as RealisationRequest;
use App\Models\{Realisation, Visite};
use Illuminate\Http\Request;

class RealisationController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Visite=null)
    {
        $query = $Nom_Visite ? Visite::where('Nom_Visite',$Nom_Visite)->firstOrFail()->realisations() : Realisation::query();
        $realisations = $query->paginate(2);
        $visites = Visite::all();
        return view('admin.Generales.Realisations.Index', compact('realisations', 'visites', 'Nom_Visite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $visites = Visite::all();
        return view('admin.Generales.Realisations.Ajouter', compact('visites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RealisationRequest $realisationRequest, Realisation $realisation)
    {
        Realisation::create($realisationRequest->all());
       // $realisation->update($realisationRequest->all());
        return redirect()->route('realisation.index')->with('info', 'L\'realisation a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function show(Realisation $realisation)
    {
        $visite = $realisation->visite->Nom_Visite;
        return view('admin.Generales.Realisations.Ajouter', compact('realisation', 'visite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Realisation $realisation)
    {
        $visites = Visite::all();
        return view('admin.Generales.Realisations.Editer', compact('visites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function update(RealisationRequest $realisationRequest, Realisation $realisation)
    {
        $realisation->update($realisationRequest->all());
        return redirect()->route('realisation.Index')->with('info', 'Le niveau ( realisation ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realisation $realisation)
    {
        $realisation->delete();
        return back()->with('info', 'Le realisation a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Realisation::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le realisation a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Realisation::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le realisation a bien été restauré.');
    }
}
