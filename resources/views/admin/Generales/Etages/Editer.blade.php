
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
                        <form class="form-row" action="{{ route('etage.update', $etage->ID_etage) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_Site">Nom :</label>
                                <input type="text" class="form-control @error('Nom_Site') is-danger @enderror " id="id_Nom_Site" name="Nom_Site" value="{{ $etage->Nom_Site  }}">
                                @error('Nom_Site')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="id_Nom_etage">Nom Etage:</label>
                                <input type="text" class="form-control @error('Nom_etage') is-danger @enderror" id="id_Nom_etage" name="Nom_etage" value="{{ $etage->Nom_etage  }}">
                                @error('Nom_etage')
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
