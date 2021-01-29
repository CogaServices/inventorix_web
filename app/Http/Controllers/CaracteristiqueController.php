<?php

namespace App\Http\Controllers;

use App\Models\{Caracteristique, Article};
use App\Http\Requests\Caracteristique as CaracteristiqueRequest;
use Illuminate\Http\Request;

class CaracteristiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Article=null)
    {
        $query = $Nom_Article ? Article::where('Nom_Article',$Nom_Article)->firstOrFail()->caracteristiques() : Caracteristique::query();
        $caracteristiques = $query->paginate(2);
        $articles = Article::all();
        return view('admin.Generales.Caracteristiques.Index', compact('caracteristiques', 'articles', 'Nom_Article'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        return view('admin.Generales.Caracteristiques.Ajouter', compact('articles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CaracteristiqueRequest $caracteristiqueRequest, Caracteristique $caracteristique)
    {
        Caracteristique::create($caracteristiqueRequest->all());
        // $caracteristique->update($caracteristiqueRequest->all());
         return redirect()->route('caracteristique.index')->with('info', 'L\'caracteristique a bien été Créer');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function show(Caracteristique $caracteristique)
    {
        $article = $caracteristique->article->Nom_Article;
        return view('admin.Generales.Caracteristiques.Ajouter', compact('caracteristique', 'article'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function edit(Caracteristique $caracteristique)
    {
        $articles = Article::all();
        return view('admin.Generales.Caracteristiques.Editer', compact('articles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function update(CaracteristiqueRequest $caracteristiqueRequest, Caracteristique $caracteristique)
    {
        $caracteristique->update($caracteristiqueRequest->all());
        return redirect()->route('caracteristique.Index')->with('info', 'Le niveau ( caracteristique ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caracteristique $caracteristique)
    {
        $caracteristique->delete();
        return back()->with('info', 'Cette caracteristique a bien été mis dans la corbeille.');

    }
    public function forceDestroy($id)
    {
        Caracteristique::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'cette caracteristique a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Caracteristique::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Cette caracteristique a bien été restauré.');
    }
}
