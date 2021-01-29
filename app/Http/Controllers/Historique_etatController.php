<?php

namespace App\Http\Controllers;
use App\Http\Requests\Historique_etat as Historique_etatRequest;
use App\Models\Historique_etat;
use Illuminate\Http\Request;

class Historique_etatController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */


   public function index()
   {
       $historique_etats = Historique_etat::paginate(25);
       return view('admin.Generales.Historique_etats.index', compact('historique_etats'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.Generales.Historique_etats.Ajouter');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request, Historique_etatRequest $historique_etatRequest)
   {
       Historique_etat::create($historique_etatRequest->all());
       return redirect()->route('historique_etat.index')->with('info', 'Le Historique_etat a bien été créé');

   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show(Historique_etat $historique_etat )
   {
       return view('admin.Generales.Historique_etats.Afficher', compact('historique_etat'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Historique_etat $historique_etat)
   {
       return view('admin.Generales.Historique_etats.Editer', compact('historique_etat'));

   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Historique_etatRequest $historique_etatRequest, Historique_etat $historique_etat)
   {
       $historique_etat->update($historique_etatRequest->all());
       return redirect()->route('historique_etat.index')->with('info', 'Le historique_etat a bien été modifié');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(Historique_etat $historique_etat)
   {
       $historique_etat->delete();
       return back()->with('info', 'Le historique_etat a bien été supprimé.');
   }
   public function forceSuppression($id)
   {
       Historique_etat::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
       return back()->with('info', 'Le Historique_etat a bien été supprimé définitivement dans la base de données.');
   }
   public function restaurer($id)
   {
       Historique_etat::withTrashed()->whereId($id)->firstOrFail()->restore();
       return back()->with('info', 'Le historique_etat a bien été restauré.');
       //route($historique_etat->deleted_at? 'historique_etats.force.destroy' : 'historique_etats.destroy', $historique_etat->id) }}
   }

}
