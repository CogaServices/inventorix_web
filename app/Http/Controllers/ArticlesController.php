<?php

namespace App\Http\Controllers;
use App\Http\Requests\Article as ArticleRequest;
use App\Models\{Article, Piece, Fournisseur, Sous_famille, Marque, Inventaire, Composant, Etat_article, Devise};
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_piece=null, $Nom_marque=null, $Nom_sous_famille=null, $Nom_etat=null, $Nom_devise=null, $Nom_inventaire=null,  $Nom_composant=null, $Nom_fournisseur=null)
    {
        $query = $Nom_piece ? Piece::where('Nom_piece',$Nom_piece)->firstOrFail()->articlex() : Article::query();
        $articles = $query->paginate(2);
        $pieces = Piece::all();
        $fournisseurs = Fournisseur::all();
        $marques = Marque::all();
        $sous_familles = Sous_famille::all();
        $etats = Etat_article::all();
        $devises = Devise::all();
        $inventaires = Inventaire::all();
        $composants = Composant::all();
        return view('admin.Articles.Index', compact(
            'articles',
            'pieces',
            'Nom_piece',
            'Nom_marque',
            'Nom_sous_famille',
            'Nom_etat',
            'Nom_devise',
            'Nom_inventaire',
            'Nom_composant',
            'Nom_fournisseur',
            'fournisseurs',
            'marques',
            'sous_familles',
            'etats',
            'devises',
            'inventaires',
            'composants',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $pieces = Piece::all();
        $fournisseurs = Fournisseur::all();
        $marques = Marque::all();
        $sous_familles = Sous_famille::all();
        $etats = Etat_article::all();
        $devises = Devise::all();
        $inventaires = Inventaire::all();
        $composants = Composant::all();
        return view('admin.Articles.Ajouter', compact(
            'pieces',
            'fournisseurs',
            'marques',
            'sous_familles',
            'etats',
            'devises',
            'inventaires',
            'composants',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $articleRequest, Article $article)
    {
        Article::create($articleRequest->all());
        // $article->update($articleRequest->all());
         return redirect()->route('article.index')->with('info', 'L\'article a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $direction = $article->direction->Nom_Piece;
        return view('admin.Articles.Ajouter', compact('article', 'direction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $directions = Piece::all();
        return view('admin.Articles.Editer', compact('directions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest  $articleRequest, Article $article)
    {
         $article->update($articleRequest->all());
        return redirect()->route('article.Index')->with('info', 'Le niveau ( article ) a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return back()->with('info', 'Le article a bien été mis dans la corbeille.');
    }
    public function forceDestroy($id)
    {
        Article::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le article a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Article::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le article a bien été restauré.');
    }
}
