<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;
Use App\Http\Requests\marque as MarqueRequest;
class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $marques = Marque::paginate(25);
        return view('admin.Generales.Marques.index', compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Generales.Marques.Ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MarqueRequest $marqueRequest)
    {
        Marque::create($marqueRequest->all());
        return redirect()->route('marque.index')->with('info', 'Le Marque a bien été créé');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Marque $marque )
    {
        return view('admin.Generales.Marques.Afficher', compact('marque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Marque $marque)
    {
        return view('admin.Generales.Marques.Editer', compact('marque'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarqueRequest $marqueRequest, Marque $marque)
    {
        $marque->update($marqueRequest->all());
        return redirect()->route('marque.index')->with('info', 'Le marque a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marque $marque)
    {
        $marque->delete();
        return back()->with('info', 'Le marque a bien été supprimé.');
    }
    public function forceSuppression($id)
    {
        Marque::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le Marque a bien été supprimé définitivement dans la base de données.');
    }
    public function restaurer($id)
    {
        Marque::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le marque a bien été restauré.');
        //route($marque->deleted_at? 'marques.force.destroy' : 'marques.destroy', $marque->id) }}
    }


}
