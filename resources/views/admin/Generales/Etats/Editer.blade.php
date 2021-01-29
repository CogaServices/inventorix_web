
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
                        <form class="form-row" action="{{ route('etat.update', $etat->ID_etat) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="col-sm-12 form-group">
                                <label for="id_Type">Type: </label>
                                <input type="text" class="form-control @error('Type') is-danger @enderror" id="id_Type" name="Type" value="{{ $etat->Type  }}">
                                @error('Type')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Type">Sortie inventaire: </label>
                                <input type="text" class="form-control @error('Sortie_inventaire') is-danger @enderror" id="id_Sortie_inventaire" name="Sortie_inventaire" value="{{ $etat->Sortie_inventaire  }}">
                                @error('Sortie_inventaire')
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
