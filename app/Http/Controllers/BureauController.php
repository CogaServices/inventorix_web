<?php

namespace App\Http\Controllers;

use App\Models\{Bureau, Direction};
use Illuminate\Http\Request;
Use App\Http\Requests\Bureau as BureauRequest;

class BureauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Direction=null)
    {
        $query = $Nom_Direction ? Direction::where('Nom_de_la_direction',$Nom_Direction)->firstOrFail()->bureaux() : Bureau::query();
        $bureaux = $query->paginate(2);
        $directions = Direction::all();
        return view('admin.Generales.Bureaux.Index', compact('bureaux', 'directions', 'Nom_Direction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directions = Direction::all();
        return view('admin.Generales.Bureaux.Ajouter', compact('directions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BureauRequest $bureauRequest, Bureau $bureau)
    {
        Bureau::create($bureauRequest->all());
       // $bureau->update($bureauRequest->all());
        return redirect()->route('bureau.index')->with('info', 'L\'bureau a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function show(Bureau $bureau)
    {
        $direction = $bureau->direction->Nom_Direction;
        return view('admin.Generales.Bureaux.Ajouter', compact('bureau', 'direction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function edit(Bureau $bureau)
    {
        $directions = Direction::all();
        return view('admin.Generales.Bureaux.Editer', compact('directions', 'bureau'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function update(BureauRequest $bureauRequest, Bureau $bureau)
    {
        $bureau->update($bureauRequest->all());
        return redirect()->route('bureau.index')->with('info', 'Le niveau ( bureau ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bureau  $bureau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bureau $bureau)
    {
        $bureau->delete();
        return back()->with('info', 'Le bureau a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Bureau::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le bureau a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Bureau::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le bureau a bien été restauré.');
    }
}
