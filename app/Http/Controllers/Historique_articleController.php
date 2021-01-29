<?php

namespace App\Http\Controllers;
use App\Http\Requests\Historique_article as Historique_articleRequest;
use App\Models\Historique_article;
use Illuminate\Http\Request;

class Historique_articleController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */


   public function index()
   {
       $historique_articles = Historique_article::paginate(25);
       return view('admin.Generales.Historique_articles.index', compact('historique_articles'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.Generales.Historique_articles.Ajouter');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request, Historique_articleRequest $historique_articleRequest)
   {
       Historique_article::create($historique_articleRequest->all());
       return redirect()->route('historique_article.index')->with('info', 'Le Historique_article a bien été créé');

   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show(Historique_article $historique_article )
   {
       return view('admin.Generales.Historique_articles.Afficher', compact('historique_article'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Historique_article $historique_article)
   {
       return view('admin.Generales.Historique_articles.Editer', compact('historique_article'));

   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Historique_articleRequest $historique_articleRequest, Historique_article $historique_article)
   {
       $historique_article->update($historique_articleRequest->all());
       return redirect()->route('historique_article.index')->with('info', 'Le historique_article a bien été modifié');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(Historique_article $historique_article)
   {
       $historique_article->delete();
       return back()->with('info', 'Le historique_article a bien été supprimé.');
   }
   public function forceSuppression($id)
   {
       Historique_article::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
       return back()->with('info', 'Le Historique_article a bien été supprimé définitivement dans la base de données.');
   }
   public function restaurer($id)
   {
       Historique_article::withTrashed()->whereId($id)->firstOrFail()->restore();
       return back()->with('info', 'Le historique_article a bien été restauré.');
       //route($historique_article->deleted_at? 'historique_articles.force.destroy' : 'historique_articles.destroy', $historique_article->id) }}
   }

}
