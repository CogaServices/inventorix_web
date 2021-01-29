<?php

namespace App\Http\Controllers;
use App\Http\Requests\Devise as DeviseRequest;
use App\Models\Devise;
use Illuminate\Http\Request;

class DeviseController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */


   public function index()
   {
       $devises = Devise::paginate(25);
       return view('admin.Generales.Devises.index', compact('devises'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.Generales.Devises.Ajouter');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request, DeviseRequest $deviseRequest)
   {
       Devise::create($deviseRequest->all());
       return redirect()->route('devise.index')->with('info', 'Le Devise a bien été créé');

   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show(Devise $devise )
   {
       return view('admin.Generales.Devises.Afficher', compact('devise'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Devise $devise)
   {
       return view('admin.Generales.Devises.Editer', compact('devise'));

   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(DeviseRequest $deviseRequest, Devise $devise)
   {
       $devise->update($deviseRequest->all());
       return redirect()->route('devise.index')->with('info', 'Le devise a bien été modifié');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(Devise $devise)
   {
       $devise->delete();
       return back()->with('info', 'Le devise a bien été supprimé.');
   }
   public function forceSuppression($id)
   {
       Devise::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
       return back()->with('info', 'Le Devise a bien été supprimé définitivement dans la base de données.');
   }
   public function restaurer($id)
   {
       Devise::withTrashed()->whereId($id)->firstOrFail()->restore();
       return back()->with('info', 'Le devise a bien été restauré.');
       //route($devise->deleted_at? 'devises.force.destroy' : 'devises.destroy', $devise->id) }}
   }

}
