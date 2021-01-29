@extends('layouts.AdminTemplate')

@section('title')
Entité
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Personnalisation des Données de l'entité.</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <form action="{{ route('entite.store') }}" method="POST">
                    @csrf
                <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="id_raison_social">Raison Sociale:</label>
                                <input type="text" class="form-control @error('Raison_sociale') is-danger @enderror" id="id_raison_social" name="Raison_sociale" >
                            </div>
                            @error('Raison_sociale')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror



                            <div class="form-group">
                                <label for="id_sigle">Sigle:</label>
                                <input type="text" class="form-control @error('Sigle') is-danger @enderror" id="id_sigle" name="Sigle" >
                            </div>
                            @error('Sigle')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror


                            <div class="form-group">
                                <label for="id_Adresse_Siege_Social">Siège Social:</label>
                                <input type="text" class="form-control @error('Adresse_Siege_Social') is-danger @enderror" id="id_Adresse_Siege_Social" name="Adresse_Siege_Social" >
                            </div>
                            @error('Adresse_Siege_Social')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror




                            <div class="form-group">
                                <label for="id_forme_de_societe">Forme Juridique:</label>
                                <input type="text" class="form-control @error('forme_de_societe') is-danger @enderror" id="id_forme_de_societe" name="forme_de_societe" >
                            </div>
                            @error('forme_de_societe')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror


                            <div class="form-group">
                                <label for="id_Objet_social">Objet Social:</label>
                                <input type="text" class="form-control @error('Objet_social') is-danger @enderror" id="id_Objet_social" name="Objet_social" >
                            </div>
                            @error('Objet_social')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror


                            <div class="form-group">
                                <label for="id_Type_particulier">Types Particuliers:</label>
                                <input type="text" class="form-control @error('Type_particulier') is-danger @enderror" id="id_Type_particulier" name="Type_particulier" >
                            </div>
                            @error('Type_particulier')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror


                            <div class="form-group">
                                <label for="id_NIdentification_fiscale">N°Identification fiscale:</label>
                                <input type="text" class="form-control error('NIdentification_fiscale') is-danger enderror" id="id_NIdentification_fiscale" name="NIdentification_fiscale" >
                            </div>
                            @error('NIdentification_fiscale')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror


                            <div class="form-group">
                                <label for="id_rccm">RCCM:</label>
                                <input type="text" class="form-control @error('RCCM') is-danger @enderror" id="id_rccm" name="RCCM" >
                            </div>
                            @error('RCCM')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="id_ncc">NCC:</label>
                            <input type="text" class="form-control @error('NCC') is-danger @enderror" id="id_ncc" name="NCC" >
                        </div>
                        @error('NCC')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="id_nombre_site">Nobres de Sites:</label>
                            <input type="number" class="form-control @error('Nb_site') is-danger @enderror" id="id_nombre_site" name="Nb_site" >
                        </div>
                        @error('Nb_site')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="id_code_postal">Code Postal:</label>
                            <input type="number" class="form-control @error('Code_postal') is-danger @enderror" id="id_code_postal" name="Code_postal" >
                        </div>
                        @error('Code_postal')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                            <div class="form-group">
                                <label for="id_nom_groupe">Nom du Groupe:</label>
                                <input type="text" class="form-control @error('Nom_du_groupe') is-danger @enderror" id="id_nom_groupe" name="Nom_du_groupe"  >
                            </div>
                            @error('Nom_du_groupe')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <label for="contact_organisation">Contact de l'organisation:</label>
                                <input type="number" class="form-control @error('Contact_organisation') is-danger @enderror" id="contact_organisation" name="Contact_organisation" >
                            </div>
                            @error('Contact_organisation')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <label for="id_nom_du_responsable">Nom du Responsable:</label>
                                <input type="text" class="form-control @error('Nom_responsable_projet') is-danger @enderror" id="id_nom_du_responsable" name="Nom_responsable_projet" >
                            </div>
                            @error('Nom_responsable_projet')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <label for="id_contact_responsable">Contact Responsable</label>
                                <input type="number" class="form-control @error('Contact_responsable_projet') is-danger @enderror" id="id_contact_responsable" name="Contact_responsable_projet" >
                            </div>
                            @error('Contact_responsable_projet')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                            <input type="hidden" class="form-control " id="id_Code_automatique" name="Code_automatique" value="Un code en plus">
                    </div>

                    <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>


                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
