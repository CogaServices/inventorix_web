
    @extends('layouts.AdminTemplate')

    @section('title')
    Famille
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter un nouveau Etage</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('famille.update', $famille->ID_fam) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_famille">Nom famille:</label>
                                <input type="text" class="form-control @error('Nom_famille') is-danger @enderror" id="id_Nom_famille" name="Nom_famille" value="{{ $famille->Nom_famille  }}">
                                @error('Nom_famille')
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
