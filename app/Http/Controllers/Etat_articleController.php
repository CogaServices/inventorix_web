<?php

namespace App\Http\Controllers;

use App\Models\Etat_article;
use Illuminate\Http\Request;

Use App\Http\Requests\etat as EtatRequest;
class Etat_articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $etats = Etat_article::paginate(25);
        return view('admin.Generales.Etats.index', compact('etats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Generales.Etats.Ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, EtatRequest $etatRequest)
    {
        Etat_article::create($etatRequest->all());
        return redirect()->route('etat.index')->with('info', 'Le Etat a bien été créé');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Etat_article $etat )
    {
        return view('admin.Generales.Etats.Afficher', compact('etat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Etat_article $etat)
    {
        return view('admin.Generales.Etats.Editer', compact('etat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EtatRequest $etatRequest, Etat_article $etat)
    {
        $etat->update($etatRequest->all());
        return redirect()->route('etat.index')->with('info', 'Le etat a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etat_article $etat)
    {
        $etat->delete();
        return back()->with('info', 'Le etat a bien été supprimé.');
    }
    public function forceSuppression($id)
    {
        Etat_article::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le Etat a bien été supprimé définitivement dans la base de données.');
    }
    public function restaurer($id)
    {
        Etat_article::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le etat a bien été restauré.');
        //route($etat->deleted_at? 'etats.force.destroy' : 'etats.destroy', $etat->id) }}
    }


}
