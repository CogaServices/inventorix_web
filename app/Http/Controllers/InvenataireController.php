<?php

namespace App\Http\Controllers;
use App\Http\Requests\Inventaire as InventaireRequest;
use App\Models\{Inventaire, Article};
use Illuminate\Http\Request;

class InvenataireController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Article=null)
    {
        $query = $Nom_Article ? Article::where('Nom_Article',$Nom_Article)->firstOrFail()->inventaires() : Inventaire::query();
        $inventaires = $query->paginate(2);
        $articles = Article::all();
        return view('admin.Generales.Inventaires.Index', compact('inventaires', 'articles', 'Nom_Article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        return view('admin.Generales.Inventaires.Ajouter', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InventaireRequest $inventaireRequest, Inventaire $inventaire)
    {
        Inventaire::create($inventaireRequest->all());
       // $inventaire->update($inventaireRequest->all());
        return redirect()->route('inventaire.index')->with('info', 'L\'inventaire a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaire  $inventaire
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaire $inventaire)
    {
        $article = $inventaire->article->Nom_Article;
        return view('admin.Generales.Inventaires.Ajouter', compact('inventaire', 'article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaire  $inventaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaire $inventaire)
    {
        $articles = Article::all();
        return view('admin.Generales.Inventaires.Editer', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventaire  $inventaire
     * @return \Illuminate\Http\Response
     */
    public function update(InventaireRequest $inventaireRequest, Inventaire $inventaire)
    {
        $inventaire->update($inventaireRequest->all());
        return redirect()->route('inventaire.Index')->with('info', 'Le niveau ( inventaire ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaire  $inventaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaire $inventaire)
    {
        $inventaire->delete();
        return back()->with('info', 'Le inventaire a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Inventaire::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le inventaire a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Inventaire::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le inventaire a bien été restauré.');
    }
}
