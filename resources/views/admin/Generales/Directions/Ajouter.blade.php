
    @extends('layouts.AdminTemplate')

    @section('title')
    Direction
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter une nouvelle Direction</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('direction.store') }}" method="POST">
                            @csrf
                            <select class=" col-sm-12"  name="ID_app">
                                @foreach($appartements as $appartement)
                                    <option value="{{ $appartement->ID_appartement }}" >{{ $appartement->Nom_appartement }}</option>
                                @endforeach
                            </select>
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_de_la_direction">Nom Direction:</label>
                                <input type="text" class="form-control @error('Nom_de_la_direction') is-danger @enderror " id="id_Nom_de_la_direction" name="Nom_de_la_direction" value="{{ old('Nom_de_la_direction')  }}">
                                @error('Nom_de_la_direction')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="id_Code_direction">Code Direction:</label>
                                <input type="text" class="form-control @error('Code_direction') is-danger @enderror" id="id_Code_direction" name="Code_direction" value="{{ old('Code_direction')  }}">
                                @error('Code_direction')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="id_Contact">Contact:</label>
                                <input type="number" class="form-control @error('Contact') is-danger @enderror" id="id_Contact" name="Contact" value="{{ old('Contact')  }}">
                                @error('Contact')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_du_directeur">Nom Directeur: </label>
                                <input type="text" class="form-control @error('Nom_du_directeur') is-danger @enderror" id="id_Nom_du_directeur" name="Nom_du_directeur" value="{{ old('Nom_du_directeur')  }}">
                                @error('Nom_du_directeur')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_Description_activité">Description Activité:</label>
                                <textarea class="form-control @error('Description_activité') is-danger @enderror" id="idDescription_activité" rows="3" name="Description_activité" value="{{ old('Description_activité')  }}"></textarea>
                                @error('Description_activité')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="idCommentaire">Commentaire:</label>
                                <textarea class="form-control @error('Commentaire') is-danger @enderror" id="idCommentaire" rows="3" name="Commentaire" value="{{ old('Commentaire')  }}"></textarea>
                                @error('Commentaire')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                                <input type="hidden" name="Code_automatique" value="1">
                            </div>
                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter une Direction') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
