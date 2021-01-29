<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EntiteController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\EtageController;
use App\Http\Controllers\AppartementController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\PieceController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\VisiteController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\Historique_articleController;
use App\Http\Controllers\Historique_etatController;
use App\Http\Controllers\DeviseController;
use App\Http\Controllers\InventaireController;
use App\Http\Controllers\Log_appController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\CaracteristiqueController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ComposantController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\Etat_articleController;
use App\Http\Controllers\EtatController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\Sous_familleController;
use App\Http\Controllers\Valeur_caracteristiqueController;
use App\Http\Controllers\NiveauController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {return view('home');})->middleware('auth');
Route::get('/home', function () {return view('home');})->middleware('auth')->name('admin');
Route::resource('user',[UserController::class]);
Route::get('/profile','UserController@profile')->Name('user.profile');
//Route::post('/profil','')

Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {return view('home');});
    Route::get('/home',function () {return view('home');})->name('admin');

    Route::resource('user', UserController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('role', RoleController::class);
    Route::get('/profile', [UserController::class,'profile'])->name('user.profile');

    Route::post('/profile', [UserController::class,'profile'])->name('user.postProfile');

    Route::get('/password/change', [UserController::class,'getPassword'])->name('userGetPassword');

    Route::post('/password/change', [UserController::class,'postPassword'])->name('userPostPassword');


    //zone pour les traitement generaux
    //Route::group(['middleware'=>'general'], function(){
    Route::resource('entite', EntiteController::class);
    Route::resource('site', SiteController::class);
    Route::resource('appartement', AppartementController::class);
    Route::resource('direction', DirectionController::class);
    Route::resource('bureau', BureauController::class);
    Route::resource('etage', EtageController::class);
    Route::resource('piece', PieceController::class);
    Route::resource('document', DocumentController::class);
    Route::resource('contrat', ContratController::class);
    Route::resource('visite', VisiteController::class);
    Route::resource('realisation', RealisationController::class);
    Route::resource('etat', EtatController::class);
    Route::resource('marque', MarqueController::class);
    Route::resource('famille', FamilleController::class);
    Route::resource('sous-famille', Sous_familleController::class);
    Route::resource('fournisseur', FournisseurController::class);
    Route::resource('devise', DeviseController::class);
    Route::resource('valeur_caracteristique', Valeur_caracteristiqueController::class);
    Route::resource('caracteristique', CaracteristiqueController::class);
    //Route::resource('type_caracteristique', TypeCaracteristiqueController::class);
    Route::resource('historique', Historique_articleController::class);
    Route::resource('historique_etat', Historique_etatController::class);
    Route::resource('article', ArticlesController::class);
    Route::resource('niveau', NiveauController::class);

    Route::delete('sites/force/{site}', [SiteController::class, 'forceSuppression'])->name('sites.force.destroy');
    Route::put('sites/restore/{site}', [SiteController::class, 'restaurer'])->name('sites.restore');
    Route::get('site/{Nom_Site}/etages', [EtageController::class, 'index'])->name('etage.site');
    Route::get('etage/{Nom_Etage}/appartements', [AppartementController::class, 'index'])->name('appartement.etage');
    Route::get('appartement/{Nom_Appartement}/directions', [DirectionController::class, 'index'])->name('direction.appartement');
    Route::get('direction/{Nom_Direction}/bureaux', [BureauController::class, 'index'])->name('bureau.direction');
    Route::get('bureau/{Nom_Bureau}/pieces', [PieceController::class, 'index'])->name('piece.bureau');
    Route::get('piece/{Nom_piece}/articles', [ArticlesController::class, 'index'])->name('article.piece');
    Route::get('fournisseur/{Nom_fournisseur}/articles', [ArticlesController::class, 'index'])->name('article.fournisseur');
    Route::get('etat/{Nom_etat}/articles', [ArticlesController::class, 'index'])->name('article.etat');
    Route::get('marque/{Nom_marque}/articles', [ArticlesController::class, 'index'])->name('article.marque');
    Route::get('sous_famille/{Nom_sous_famille}/articles', [ArticlesController::class, 'index'])->name('article.sous_famille');
    Route::get('devise/{Nom_devise}/articles', [ArticlesController::class, 'index'])->name('article.devise');
    Route::get('inventaire/{Nom_inventaire}/articles', [ArticlesController::class, 'index'])->name('article.inventaire');
     Route::get('composant/{Nom_composant}/articles', [ArticleController::class, 'index'])->name('direction.composant');

   // Route::get('appartement/{Nom_Site}/directions', [DirectionController::class, 'index'])->name('direction.appartement');
   // Route::get('appartement/{Nom_Site}/directions', [DirectionController::class, 'index'])->name('direction.appartement');
   // Route::get('appartement/{Nom_Site}/directions', [DirectionController::class, 'index'])->name('direction.appartement');
   // Route::get('appartement/{Nom_Site}/directions', [DirectionController::class, 'index'])->name('direction.appartement');
   // Route::get('appartement/{Nom_Site}/directions', [DirectionController::class, 'index'])->name('direction.appartement');
  //  Route::get('appartement/{Nom_Site}/directions', [DirectionController::class, 'index'])->name('direction.appartement');
  //  Route::get('appartement/{Nom_Site}/directions', [DirectionController::class, 'index'])->name('direction.appartement');

   //  });


});

//Auth::routes();


//////////////////////////////// axios request

Route::get('/getAllPermission', [PermissionController::class , 'getAllPermissions']);
Route::post("/postRole", [RoleController::class , 'store']);
Route::get("/getAllUsers", [UserController::class , 'getAll']);
Route::get("/getAllRoles", [RoleController::class , 'getAll']);
Route::get("/getAllPermissions", [PermissionController::class , 'getAll']);

/////////////axios create user
Route::post('/compte/create', [UserController::class , 'store']);
Route::put('/compte/update/{id}', [UserController::class , 'update']);


