<?php

namespace App\Http\Controllers;

use App\Models\{Piece, Bureau,Etage, Direction};
use Illuminate\Http\Request;
Use App\Http\Requests\Piece as PieceRequest;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Bureau=null, $Nom_etage=null)
    {
        $query = $Nom_Bureau ? Bureau::where('Nom_Bureau',$Nom_Bureau)->firstOrFail()->pieces() : Piece::query();
        $pieces = $query->paginate(2);
        $query1 = $Nom_Bureau ? Etage::where('Nom_etage',$Nom_etage)->firstOrFail()->pieces() : Piece::query();
        $pieces = $query1->paginate(2);
        $bureaux = Bureau::all();
        $etages = Etage::all();
        return view('admin.Generales.Pieces.Index', compact('pieces', 'bureaux', 'etages', 'Nom_Bureau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bureaux = Bureau::all();
        $etages = Etage::all();
        $directions=Direction::all();
        return view('admin.Generales.Pieces.Ajouter', compact('bureaux', 'etages', 'directions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PieceRequest $pieceRequest, Piece $piece)
    {
        Piece::create($pieceRequest->all());
       // $piece->update($pieceRequest->all());
        return redirect()->route('piece.index')->with('info', 'La piece a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function show(Piece $piece)
    {
        $bureau = $piece->bureau->Nom_Bureau;
        return view('admin.Generales.Pieces.Ajouter', compact('piece', 'bureau'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function edit(Piece $piece)
    {
        $bureaux = Bureau::all();
        return view('admin.Generales.Pieces.Editer', compact('bureaux', 'piece'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function update(PieceRequest $pieceRequest, Piece $piece)
    {
        $piece->update($pieceRequest->all());
        return redirect()->route('piece.index')->with('info', 'Le niveau ( piece ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piece $piece)
    {
        $piece->delete();
        return back()->with('info', 'Le piece a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Piece::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le piece a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Piece::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le piece a bien été restauré.');
    }
}
