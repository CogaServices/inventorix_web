<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;
Use App\Http\Requests\Famille as FamilleRequest;
class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $familles = Famille::paginate(25);
        return view('admin.Generales.Familles.index', compact('familles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Generales.Familles.Ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamilleRequest $familleRequest)
    {
        Famille::create($familleRequest->all());
        return redirect()->route('famille.index')->with('info', 'Le Famille a bien été créé');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Famille $famille )
    {
        return view('admin.Generales.Familles.Afficher', compact('famille'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Famille $famille)
    {
        return view('admin.Generales.Familles.Editer', compact('famille'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FamilleRequest $familleRequest, Famille $famille)
    {
        $famille->update($familleRequest->all());
        return redirect()->route('famille.index')->with('info', 'Le famille a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famille $famille)
    {
        $famille->delete();
        return back()->with('info', 'Le famille a bien été supprimé.');
    }
    public function forceSuppression($id)
    {
        Famille::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le Famille a bien été supprimé définitivement dans la base de données.');
    }
    public function restaurer($id)
    {
        Famille::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le famille a bien été restauré.');
        //route($famille->deleted_at? 'familles.force.destroy' : 'familles.destroy', $famille->id) }}
    }


}
