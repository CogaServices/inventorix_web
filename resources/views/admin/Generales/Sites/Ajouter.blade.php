
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
                        <form class="form-row" action="{{ route('site.store') }}" method="POST">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_Site">Nom :</label>
                                <input type="text" class="form-control @error('Nom_Site') is-danger @enderror " id="id_Nom_Site" name="Nom_Site" value="{{ old('Nom_Site')  }}">
                                @error('Nom_Site')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="id_Nature">Nature du site:</label>
                                <input type="text" class="form-control @error('Nature') is-danger @enderror" id="id_Nature" name="Nature" value="{{ old('Nature')  }}">
                                @error('Nature')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="id_Localisation_geographique">Adresse:</label>
                                <input type="text" class="form-control @error('Localisation_geographique') is-danger @enderror" id="id_Localisation_geographique" name="Localisation_geographique" value="{{ old('Localisation_geographique')  }}">
                                @error('Localisation_geographique')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Addresse_postale">Adresse Postal:</label>
                                <input type="text" class="form-control @error('Addresse_postale') is-danger @enderror" id="id_Addresse_postale" name="Addresse_postale" value="{{ old('Addresse_postale')  }}">
                                @error('Addresse_postale')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Code_postal">Code Postal:</label>
                                <input type="number" class="form-control @error('Code_postal') is-danger @enderror" id="id_Code_postal" name="Code_postal" value="{{ old('Code_postal')  }}">
                                @error('Code_postal')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Addresse_postale">Contact:</label>
                                <input type="number" class="form-control @error('Addresse_postale') is-danger @enderror" id="id_Addresse_postale" name="Contact" value="{{ old('Addresse_postale')  }}">
                                @error('Addresse_postale')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-6  form-group">
                                <label for="id_Fax">Fax:</label>
                                <input type="text" class="form-control @error('Fax') is-danger @enderror" id="id_Fax" name="Fax" value="{{ old('Fax')  }}">
                                <input type="hidden" name="Id_entite" value="1" >
                                <input type="hidden"  name="Code_automatique" value="1" >
                                @error('Fax')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="idCommentaire">Commentaire:</label>
                                <textarea class="form-control @error('Commentaire') is-danger @enderror" id="idCommentaire" rows="3" name="Commentaire" value="{{ old('Commentaire')  }}"></textarea>
                                @error('Commentaire')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter un Site') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
