<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
Use App\Http\Requests\fournisseur as FournisseurRequest;
class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $fournisseurs = Fournisseur::paginate(25);
        return view('admin.Generales.Fournisseurs.index', compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Generales.Fournisseurs.Ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FournisseurRequest $fournisseurRequest)
    {
        Fournisseur::create($fournisseurRequest->all());
        return redirect()->route('fournisseur.index')->with('info', 'Le Fournisseur a bien été créé');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fournisseur $fournisseur )
    {
        return view('admin.Generales.Fournisseurs.Afficher', compact('fournisseur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fournisseur $fournisseur)
    {
        return view('admin.Generales.Fournisseurs.Editer', compact('fournisseur'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FournisseurRequest $fournisseurRequest, Fournisseur $fournisseur)
    {
        $fournisseur->update($fournisseurRequest->all());
        return redirect()->route('fournisseur.index')->with('info', 'Le fournisseur a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fournisseur $fournisseur)
    {
        $fournisseur->delete();
        return back()->with('info', 'Le fournisseur a bien été supprimé.');
    }
    public function forceSuppression($id)
    {
        Fournisseur::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le Fournisseur a bien été supprimé définitivement dans la base de données.');
    }
    public function restaurer($id)
    {
        Fournisseur::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le fournisseur a bien été restauré.');
        //route($fournisseur->deleted_at? 'fournisseurs.force.destroy' : 'fournisseurs.destroy', $fournisseur->id) }}
    }


}
