<?php

namespace App\Http\Controllers;

use App\Models\{Etage, Site};
use Illuminate\Http\Request;
Use App\Http\Requests\Etage as EtageRequest;

class EtageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Site=null)
    {
        $query = $Nom_Site ? Site::where('Nom_Site',$Nom_Site)->firstOrFail()->etages() : Etage::query();
        $etages = $query->paginate(2);
        $sites = Site::all();
        return view('admin.Generales.Etages.Index', compact('etages', 'sites', 'Nom_Site'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = Site::all();
        return view('admin.Generales.Etages.Ajouter', compact('sites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtageRequest $etageRequest, Etage $etage)
    {
        Etage::create($etageRequest->all());
       // $etage->update($etageRequest->all());
        return redirect()->route('etage.index')->with('info', 'L\'etage a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etage  $etage
     * @return \Illuminate\Http\Response
     */
    public function show(Etage $etage)
    {
        $site = $etage->site->Nom_Site;
        return view('admin.Generales.Etages.Ajouter', compact('etage', 'site'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etage  $etage
     * @return \Illuminate\Http\Response
     */
    public function edit(Etage $etage)
    {
        $sites = Site::all();
        return view('admin.Generales.Etages.Editer', compact('sites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etage  $etage
     * @return \Illuminate\Http\Response
     */
    public function update(EtageRequest $etageRequest, Etage $etage)
    {
        $etage->update($etageRequest->all());
        return redirect()->route('etage.Index')->with('info', 'Le niveau ( etage ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etage  $etage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etage $etage)
    {
        $etage->delete();
        return back()->with('info', 'Le etage a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Etage::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le etage a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Etage::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le etage a bien été restauré.');
    }
}
