<?php

namespace App\Http\Controllers;

use App\Models\{Appartement, Etage};
use Illuminate\Http\Request;

Use App\Http\Requests\Appartement as AppartementRequest;

class AppartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Etage=null)
    {
        $query = $Nom_Etage ? Etage::where('Nom_Etage',$Nom_Etage)->firstOrFail()->appartements() : Appartement::query();
        $appartements = $query->paginate(2);
        $etages = Etage::all();
        return view('admin.Generales.Appartements.Index', compact('appartements', 'etages', 'Nom_Etage'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etages = Etage::all();
        return view('admin.Generales.Appartements.Ajouter', compact('etages'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AppartementRequest  $appartementRequest
     * @return \Illuminate\Http\Response
     */
    public function store(AppartementRequest $appartementRequest, Appartement $appartement)
    {
        Appartement::create($appartementRequest->all());
       // $appartement->update($appartementRequest->all());
        return redirect()->route('appartement.index')->with('info', 'L\'appartement a bien été Créer');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function show(Appartement $appartement)
    {
        $etage = $appartement->etage->Nom_Etage;
        return view('admin.Generales.Appartements.Ajouter', compact('appartement', 'etage'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function edit(Appartement $appartement)
    {
        $etages = Etage::all();
        return view('admin.Generales.Appartements.Editer', compact('etages', 'appartement'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AppartementRequest  $appartementRequest
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    
    public function update(AppartementRequest $appartementRequest, Appartement $appartement)
    {
        $appartement->update($appartementRequest->all());
        return redirect()->route('appartement.Index')->with('info', 'Le niveau ( appartement ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appartement $appartement)
    {
        $appartement->delete();
        return back()->with('info', 'Le appartement a bien été mis dans la corbeille.');

    }
    public function forceDestroy($id)
    {
        Appartement::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le appartement a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Appartement::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le appartement a bien été restauré.');
    }

}
