
    @extends('layouts.AdminTemplate')

    @section('title')
    Etage
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter un nouvel Etage</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('etage.store') }}" method="POST">
                            @csrf

                            <select class=" col-sm-12"  name="Id_site">
                                @foreach($sites as $site)
                                    <option value="{{ $site->ID_site }}" >{{ $site->Nom_Site }}</option>
                                @endforeach
                            </select>
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_etage">Nom :</label>
                                <input type="text" class="form-control @error('Nom_etage') is-danger @enderror " id="id_Nom_etage" name="Nom_etage" value="{{ old('Nom_etage')  }}">
                                @error('Nom_etage')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter un Etage') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
