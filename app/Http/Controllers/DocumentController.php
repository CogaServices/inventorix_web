<?php

namespace App\Http\Controllers;
use App\Http\Requests\Document as DocumentRequest;
use App\Models\{Document, Article, Contrat, Piece, Site };
use Illuminate\Http\Request;

class DocumentController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Nom_Article=null)
    {
        $query = $Nom_Article ? Article::where('Nom_Article',$Nom_Article)->firstOrFail()->documents() : Document::query();
        $documents = $query->paginate(2);
        $articles = Article::all();
        return view('admin.Generales.Documents.Index', compact('documents', 'articles', 'Nom_Article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        return view('admin.Generales.Documents.Ajouter', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentRequest $documentRequest, Document $document)
    {
        Document::create($documentRequest->all());
       // $document->update($documentRequest->all());
        return redirect()->route('document.index')->with('info', 'L\'document a bien été Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        $article = $document->article->Nom_Article;
        return view('admin.Generales.Documents.Ajouter', compact('document', 'article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        $articles = Article::all();
        return view('admin.Generales.Documents.Editer', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentRequest $documentRequest, Document $document)
    {
        $document->update($documentRequest->all());
        return redirect()->route('document.Index')->with('info', 'Le niveau ( document ) a bien été modifié');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return back()->with('info', 'Le document a bien été mis dans la corbeille.');
    }

    public function forceDestroy($id)
    {
        Document::withTrashed()->whereId($id)->firstOrFail()->forceDelete();
        return back()->with('info', 'Le document a bien été supprimé définitivement dans la base de données.');
    }
    public function restore($id)
    {
        Document::withTrashed()->whereId($id)->firstOrFail()->restore();
        return back()->with('info', 'Le document a bien été restauré.');
    }
}
