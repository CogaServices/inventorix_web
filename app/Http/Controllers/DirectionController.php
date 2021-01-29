<?php

namespace App\Http\Controllers;

use App\Models\{Direction, Appartement};
use Illuminate\Http\Request;

Use App\Http\Requests\Direction as DirectionRequest;

class DirectionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Appartement=null)
    {
        $query = $Nom_Appartement ? Appartement::where('Nom_Appartement',$Nom_Appartement)->firstOrFail()->directions() : Direction::query();
        $directions = $query->paginate(2);
        $appartements = Appartement::all();
        return view('admin.Generales.Directions.Index', compact('directions', 'appartements', 'Nom_Appartement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appartements = Appartement::all();
        return view('admin.Generales.Directions.Ajouter', compact('appartements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DirectionRequest $directionRequest)
    {
        Direction::create($directionRequest->all());
       // $direction->update($directionRequest->all());
        return redirect()->route('direction.index')->with('info', 'L\'direction a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function show(Direction $direction)
    {
        $appartement = $direction->appartement->Nom_Appartement;
        return view('admin.Generales.Directions.Ajouter', compact('direction', 'appartement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function edit(Direction $direction)
    {
        $appartements = Appartement::all();
        return view('admin.Generales.Directions.Editer', compact('appartements', 'direction'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function update(DirectionRequest $directionRequest, Direction $direction)
    {
        $direction->update($directionRequest->all());
        return redirect()->route('direction.index')->with('info', 'Le niveau ( direction ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direction $direction)
    {
        $direction->delete();
        return back()->with('info', 'Le direction a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Direction::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le direction a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Direction::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le direction a bien été restauré.');
    }
}
