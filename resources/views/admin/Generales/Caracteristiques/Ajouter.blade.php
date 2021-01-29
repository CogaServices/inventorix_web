
    @extends('layouts.AdminTemplate')

    @section('title')
    Appartement
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter un Appartement</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('appartement.store') }}" method="POST">
                            @csrf
                            <select class=" col-sm-12"  name="Id_article">
                                @foreach($articles as $article)
                                    <option value="{{ $article->ID_article }}" >{{ $article->Nom_article || $article->Nom_article }}</option>
                                @endforeach
                            </select>
                            <div class="col-sm-12 form-group">
                                <label for="id_Type">Type :</label>
                                <input type="text" class="form-control @error('Type') is-danger @enderror " id="id_Type" name="Type" value="{{ old('Type')  }}">
                                @error('Type')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Libelle">Libellé :</label>
                                <input type="text" class="form-control @error('Libelle') is-danger @enderror " id="id_Libelle" name="Libelle" value="{{ old('Libelle')  }}">
                                @error('Libelle')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Echeance">Echéance :</label>
                                <input type="text" class="form-control @error('Echeance') is-danger @enderror " id="id_Echeance" name="Echeance" value="{{ old('Echeance')  }}">
                                @error('Echeance')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Nbre_jour">Nbre Jour :</label>
                                <input type="text" class="form-control @error('Nbre_jour') is-danger @enderror " id="id_Nbre_jour" name="Nbre_jour" value="{{ old('Nbre_jour')  }}">
                                @error('Nbre_jour')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Date">Date :</label>
                                <input type="text" class="form-control @error('Date') is-danger @enderror " id="id_Date" name="Date" value="{{ old('Date')  }}">
                                @error('Date')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-sm-12 form-group">
                                <label for="id_Valeur">Valeur :</label>
                                <input type="text" class="form-control @error('Valeur') is-danger @enderror " id="id_Valeur" name="Valeur" value="{{ old('Valeur')  }}">
                                @error('Valeur')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-sm-12 form-group">
                                <label for="id_ValeurBool">Valeur Bool :</label>
                                <input type="checkbox" class="form-control @error('ValeurBool') is-danger @enderror " id="id_ValeurBool" name="ValeurBool" value="{{ old('ValeurBool')  }}">
                                @error('ValeurBool')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter un Appartement') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
