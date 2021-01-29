<?php

namespace App\Http\Controllers;
use App\Http\Requests\Entite as EntiteRequest;
use App\Models\Entite;
use Illuminate\Http\Request;

class EntiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Generales.createEntite');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Generales.creatEntite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntiteRequest $entiteRequest)
    {
        Entite::create($entiteRequest->all());
        return redirect()->route('entite.edit', 1)->with('info', 'Les Informations ont été bien mise à jour');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entite  $entite
     * @return \Illuminate\Http\Response
     */
    public function show(Entite $entite)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entite  $entite
     * @return \Illuminate\Http\Response
     */
    public function edit(Entite $entite)
    {
      $resultat= $entite->find(1);

       if (is_null($resultat)){
        return view('admin.Generales.createEntite');
    }else{
        return view('admin.Generales.entite', compact('entite'));
    }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entite  $entite
     * @return \Illuminate\Http\Response
     */
    public function update(EntiteRequest $entiteRequest, Entite $entite)
    {
        $entite->update($entiteRequest->all());
            return redirect()->route('entite.edit',1)->with('info', 'Vos informations ont été mise à jour avec succès');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entite  $entite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entite $entite)
    {
        //
    }
}
