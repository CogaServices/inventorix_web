
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
                            <select class=" col-sm-12"  name="Id_etage">
                                @foreach($etages as $etage)
                                    <option value="{{ $etage->ID_etage }}" >{{ $etage->Nom_etage }}</option>
                                @endforeach
                            </select>
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_appartement">Nom :</label>
                                <input type="text" class="form-control @error('Nom_appartement') is-danger @enderror " id="id_Nom_appartement" name="Nom_appartement" value="{{ old('Nom_appartement')  }}">
                                @error('Nom_appartement')
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
