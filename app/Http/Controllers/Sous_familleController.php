<?php

namespace App\Http\Controllers;
use App\Http\Requests\Sous_Famille as Sous_familleRequest;
use App\Models\{Sous_famille, Famille};
use Illuminate\Http\Request;

class Sous_familleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Famille=null)
    {
        $query = $Nom_Famille ? Famille::where('Nom_Famille',$Nom_Famille)->firstOrFail()->sous_familles() : Sous_famille::query();
        $sous_familles = $query->paginate(2);
        $familles = Famille::all();
        return view('admin.Generales.Sous_Familles.Index', compact('sous_familles', 'familles', 'Nom_Famille'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familles = Famille::all();
        return view('admin.Generales.Sous_Familles.Ajouter', compact('familles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Sous_familleRequest $sous_familleRequest, Sous_famille $sous_famille)
    {
        Sous_famille::create($sous_familleRequest->all());
       // $sous_famille->update($sous_familleRequest->all());
        return redirect()->route('sous_famille.index')->with('info', 'L\'sous_famille a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sous_famille  $sous_famille
     * @return \Illuminate\Http\Response
     */
    public function show(Sous_famille $sous_famille)
    {
        $famille = $sous_famille->famille->Nom_Famille;
        return view('admin.Generales.Sous_Familles.Ajouter', compact('sous_famille', 'famille'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sous_famille  $sous_famille
     * @return \Illuminate\Http\Response
     */
    public function edit(Sous_famille $sous_famille)
    {
        $familles = Famille::all();
        return view('admin.Generales.Sous_Familles.Editer', compact('familles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sous_famille  $sous_famille
     * @return \Illuminate\Http\Response
     */
    public function update(Sous_familleRequest $sous_familleRequest, Sous_famille $sous_famille)
    {
        $sous_famille->update($sous_familleRequest->all());
        return redirect()->route('sous_famille.Index')->with('info', 'Le niveau ( sous_famille ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sous_famille  $sous_famille
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sous_famille $sous_famille)
    {
        $sous_famille->delete();
        return back()->with('info', 'Le sous_famille a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Sous_famille::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le sous_famille a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Sous_famille::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le sous_famille a bien été restauré.');
    }
}
