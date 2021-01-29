
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
                        <form class="form-row" action="{{ route('piece.update', $piece->ID_piece) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_piece">Nom Pièce:</label>
                                <input type="text" class="form-control @error('Nom_piece') is-danger @enderror " id="id_Nom_piece" name="Nom_piece" value="{{ $piece->Nom_piece  }}">
                                @error('Nom_piece')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="id_Code_barre">Code barre :</label>
                                <input type="text" class="form-control @error('Code_barre') is-danger @enderror" id="id_Code_barre" name="Code_barre" value="{{ $piece->Code_barre  }}">
                                @error('Code_barre')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="id_Nom_direction">Direction :</label>
                                <input type="text" class="form-control @error('Nom_direction') is-danger @enderror" id="id_Nom_direction" name="Nom_direction" value="{{ $piece->Nom_direction  }}">
                                @error('Nom_direction')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Nom_bureau">Nom Bureau:</label>
                                <input type="text" class="form-control @error('Nom_bureau') is-danger @enderror" id="id_Nom_bureau" name="Nom_bureau" value="{{ $piece->Nom_bureau  }}">
                                @error('Nom_bureau')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_suface">Surface:</label>
                                <input type="number" class="form-control @error('suface') is-danger @enderror" id="id_suface" name="suface" value="{{ $piece->suface  }}">
                                @error('suface')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Nbre_fenetre">Nbre_fenetre:</label>
                                <input type="number" class="form-control @error('Nbre_fenetre') is-danger @enderror" id="id_Nbre_fenetre" name="Nbre_fenetre" value="{{ $piece->Nbre_fenetre  }}">
                                @error('Nbre_fenetre')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Numero_porte">Numero_porte:</label>
                                <input type="number" class="form-control @error('Numero_porte') is-danger @enderror" id="id_Numero_porte" name="Numero_porte" value="{{ $piece->Numero_porte  }}">
                                @error('Numero_porte')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="idObservation">Observation:</label>
                                <textarea class="form-control @error('Observation') is-danger @enderror" id="idObservation" rows="3" name="Observation" >{{ $piece->Observation  }}</textarea>
                                @error('Observation')
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
