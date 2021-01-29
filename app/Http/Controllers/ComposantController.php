<?php

namespace App\Http\Controllers;

use App\Models\{Composant,Article};
use App\Http\Requests\Composant as ComposantRequest;
use Illuminate\Http\Request;

class ComposantController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Article=null)
    {
        $query = $Nom_Article ? Article::where('Nom_Article',$Nom_Article)->firstOrFail()->composants() : Composant::query();
        $composants = $query->paginate(2);
        $articles = Article::all();
        return view('admin.Generales.Composants.Index', compact('composants', 'articles', 'Nom_Article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        return view('admin.Generales.Composants.Ajouter', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComposantRequest $composantRequest, Composant $composant)
    {
        Composant::create($composantRequest->all());
       // $composant->update($composantRequest->all());
        return redirect()->route('composant.index')->with('info', 'L\'composant a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Composant  $composant
     * @return \Illuminate\Http\Response
     */
    public function show(Composant $composant)
    {
        $article = $composant->article->Nom_Article;
        return view('admin.Generales.Composants.Ajouter', compact('composant', 'article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Composant  $composant
     * @return \Illuminate\Http\Response
     */
    public function edit(Composant $composant)
    {
        $articles = Article::all();
        return view('admin.Generales.Composants.Editer', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Composant  $composant
     * @return \Illuminate\Http\Response
     */
    public function update(ComposantRequest $composantRequest, Composant $composant)
    {
        $composant->update($composantRequest->all());
        return redirect()->route('composant.Index')->with('info', 'Le niveau ( composant ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Composant  $composant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Composant $composant)
    {
        $composant->delete();
        return back()->with('info', 'Le composant a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Composant::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le composant a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Composant::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le composant a bien été restauré.');
    }
}
