<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
Use App\Http\Requests\site as SiteRequest;
class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $sites = Site::paginate(25);
        return view('admin.Generales.Sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Generales.Sites.Ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, SiteRequest $siteRequest)
    {
        Site::create($siteRequest->all());
        return redirect()->route('site.index')->with('info', 'Le Site a bien été créé');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site )
    {
        return view('admin.Generales.Sites.Afficher', compact('site'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        return view('admin.Generales.Sites.Editer', compact('site'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiteRequest $siteRequest, Site $site)
    {
        $site->update($siteRequest->all());
        return redirect()->route('site.index')->with('info', 'Le site a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        $site->delete();
        return back()->with('info', 'Le site a bien été supprimé.');
    }
    public function forceSuppression($id)
    {
        Site::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le Site a bien été supprimé définitivement dans la base de données.');
    }
    public function restaurer($id)
    {
        Site::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le site a bien été restauré.');
        //route($site->deleted_at? 'sites.force.destroy' : 'sites.destroy', $site->id) }}
    }


}
