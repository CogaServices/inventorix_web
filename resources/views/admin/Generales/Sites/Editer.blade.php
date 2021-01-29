
    @extends('layouts.AdminTemplate')

    @section('title')
    Entité
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter un nouveau Site</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('site.update', $site->ID_site) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_Site">Nom :</label>
                                <input type="text" class="form-control @error('Nom_Site') is-danger @enderror " id="id_Nom_Site" name="Nom_Site" value="{{ $site->Nom_Site  }}">
                                @error('Nom_Site')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="id_Nature">Nature du site:</label>
                                <input type="text" class="form-control @error('Nature') is-danger @enderror" id="id_Nature" name="Nature" value="{{ $site->Nature  }}">
                                @error('Nature')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="id_Localisation_geographique">Adresse:</label>
                                <input type="text" class="form-control @error('Localisation_geographique') is-danger @enderror" id="id_Localisation_geographique" name="Localisation_geographique" value="{{ $site->Localisation_geographique  }}">
                                @error('Localisation_geographique')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Addresse_postale">Adresse Postal:</label>
                                <input type="text" class="form-control @error('Addresse_postale') is-danger @enderror" id="id_Addresse_postale" name="Addresse_postale" value="{{ $site->Addresse_postale  }}">
                                @error('Addresse_postale')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Code_postal">Code Postal:</label>
                                <input type="number" class="form-control @error('Code_postal') is-danger @enderror" id="id_Code_postal" name="Code_postal" value="{{ $site->Code_postal  }}">
                                @error('Code_postal')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Contact">Contact:</label>
                                <input type="number" class="form-control @error('Contact') is-danger @enderror" id="id_Contact" name="Contact" value="{{ $site->Contact  }}">
                                @error('Contact')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-6  form-group">
                                <label for="id_Fax">Fax:</label>
                                <input type="text" class="form-control @error('Fax') is-danger @enderror" id="id_Fax" name="Fax" value="{{ $site->Fax  }}">
                                <input type="hidden" name="Id_entite" value="1" >
                                <input type="hidden"  name="Code_automatique" value="1" >
                                @error('Fax')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="idCommentaire">Commentaire:</label>
                                <textarea class="form-control @error('Commentaire') is-danger @enderror" id="idCommentaire" rows="3" name="Commentaire" >{{ $site->Commentaire  }}</textarea>
                                @error('Commentaire')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary ">{{ __('Enregistrer les modifications') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
