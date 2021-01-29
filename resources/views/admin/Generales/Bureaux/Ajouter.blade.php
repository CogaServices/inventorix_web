
    @extends('layouts.AdminTemplate')

    @section('title')
    Bureaux
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter une nouveau Bureau</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('bureau.store') }}" method="POST">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label for="idid_direction">Direction:</label>
                                <select class=" col-sm-12"  name="Id_direction" for="idid_direction">
                                    @foreach($directions as $direction)
                                        <option value="{{ $direction->ID_dir }}">{{ $direction->Nom_de_la_direction }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_bureau">Nom Bureau:</label>
                                <input type="text" class="form-control @error('Nom_bureau') is-danger @enderror " id="id_Nom_bureau" name="Nom_bureau" value="{{ old('Nom_bureau')  }}">
                                @error('N_porte_bureau')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_N_porte_bureau">Nombre Porte:</label>
                                <input type="number" class="form-control @error('N_porte_bureau') is-danger @enderror" id="id_N_porte_bureau" name="N_porte_bureau" value="{{ old('N_porte_bureau')  }}">
                                @error('N_porte_bureau')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Nb_occupant">Nombre Occupant:</label>
                                <input type="number" class="form-control @error('Nb_occupant') is-danger @enderror" id="id_Nb_occupant" name="Nb_occupant" value="{{ old('Nb_occupant')  }}">
                                @error('Nb_occupant')
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
                            <input type="hidden" name='Code_automatique' value="1">
                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter un Bureau') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
