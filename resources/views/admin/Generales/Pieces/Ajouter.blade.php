
    @extends('layouts.AdminTemplate')

    @section('title')
    Pieces
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter une nouvelle Piece</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('piece.store') }}" method="POST">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label>Slectionner un bureau: <label><br/>
                                <select class="form-control "  name="ID_bur">
                                    <option value="" selected>{{ __('Aucun Bureau') }}</option>
                                    @foreach($bureaux as $bureau)
                                        <option value="{{ $bureau->ID_bur }}">{{ $bureau->Nom_bureau }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label> Slectionner un Etage: <label><br/>
                                <select class=" form-control"  name="ID_etage">
                                    <option value="" selected>{{ __('Aucun') }}</option>
                                    @foreach($etages as $etage)
                                        <option value="{{ $etage->ID_etage }}" >{{ $etage->Nom_etage }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_piece">Nom Pièce:</label>
                                <input type="text" class="form-control @error('Nom_piece') is-danger @enderror " id="id_Nom_piece" name="Nom_piece" value="{{ old('Nom_piece')  }}">
                                @error('Nom_piece')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="id_Code_barre">Code barre piece:</label>
                                <input type="text" class="form-control @error('Code_barre') is-danger @enderror" id="id_Code_barre" name="Code_barre" value="{{ old('Code_barre')  }}">
                                @error('Code_barre')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="id_Nom_direction">Direction:</label>
                                <input type="text" class="form-control @error('Nom_direction') is-danger @enderror" id="id_Nom_direction" name="Nom_direction" value="{{ old('Nom_direction')  }}">
                                @error('Nom_direction')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Nom_bureau">Nom bureau: </label>
                                <input type="text" class="form-control @error('Nom_bureau') is-danger @enderror" id="id_Nom_bureau" name="Nom_bureau" value="{{ old('Nom_bureau')  }}">
                                @error('Nom_bureau')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_suface">Surface:</label>
                                <input type="number" class="form-control @error('suface') is-danger @enderror" id="id_suface" name="suface" value="{{ old('suface')  }}">
                                @error('suface')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Nbre_fenetre">Nombre fenêtre:</label>
                                <input type="number" class="form-control @error('Nbre_fenetre') is-danger @enderror" id="id_Nbre_fenetre" name="Nbre_fenetre" value="{{ old('Nbre_fenetre')  }}">
                                @error('Nbre_fenetre')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Numero_porte">Numero Porte:</label>
                                <input type="number" class="form-control @error('Numero_porte') is-danger @enderror" id="id_Numero_porte" name="Numero_porte" value="{{ old('Numero_porte')  }}">
                                @error('Numero_porte')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="idObservation">Observation:</label>
                                <textarea class="form-control @error('Observation') is-danger @enderror" id="idObservation" rows="3" name="Observation" value="{{ old('Observation')  }}"></textarea>
                                @error('Observation')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                                <input type="hidden"  name="Code_automatique" value="1" >

                            </div>
                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter un Piece') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
