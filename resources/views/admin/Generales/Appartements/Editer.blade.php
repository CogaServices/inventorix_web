
    @extends('layouts.AdminTemplate')

    @section('title')
    Entité
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter un nouveau Etage</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('appartement.update', $appartement->ID_app) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_Etage">Nom Etage :</label>
                                <select class=" col-sm-12"  name="Id_etage">
                                    @foreach($etages as $etage)
                                    <option value="{{ $etage->Id_etage }}" {{ $appartement->Id_etage == $etage->Id_etage ? 'selected' : '' }}>{{ $etage->Nom_etage }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_appartement">Nom appartement:</label>
                                <input type="text" class="form-control @error('Nom_appartement') is-danger @enderror" id="id_Nom_appartement" name="Nom_appartement" value="{{ $appartement->Nom_appartement  }}">
                                @error('Nom_appartement')
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
