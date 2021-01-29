<?php

namespace App\Http\Controllers;
use App\Http\Requests\Visite as VisiteRequest;
use App\Models\{Visite, Contrat};
use Illuminate\Http\Request;

class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Contrat=null)
    {
        $query = $Nom_Contrat ? Contrat::where('Nom_Contrat',$Nom_Contrat)->firstOrFail()->visites() : Visite::query();
        $visites = $query->paginate(2);
        $contrats = Contrat::all();
        return view('admin.Generales.Visites.Index', compact('visites', 'contrats', 'Nom_Contrat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contrats = Contrat::all();
        return view('admin.Generales.Visites.Ajouter', compact('contrats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VisiteRequest $visiteRequest, Visite $visite)
    {
        Visite::create($visiteRequest->all());
       // $visite->update($visiteRequest->all());
        return redirect()->route('visite.index')->with('info', 'L\'visite a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function show(Visite $visite)
    {
        $contrat = $visite->contrat->Nom_Contrat;
        return view('admin.Generales.Visites.Ajouter', compact('visite', 'contrat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function edit(Visite $visite)
    {
        $contrats = Contrat::all();
        return view('admin.Generales.Visites.Editer', compact('contrats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function update(VisiteRequest $visiteRequest, Visite $visite)
    {
        $visite->update($visiteRequest->all());
        return redirect()->route('visite.Index')->with('info', 'Le niveau ( visite ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visite  $visite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visite $visite)
    {
        $visite->delete();
        return back()->with('info', 'Le visite a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Visite::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le visite a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Visite::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le visite a bien été restauré.');
    }
}
