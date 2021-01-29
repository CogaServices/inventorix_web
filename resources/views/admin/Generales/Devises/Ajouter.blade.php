
    @extends('layouts.AdminTemplate')

    @section('title')
    Devise
    @endsection
    @section('content')
    <div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter une Devise</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('devise.store') }}" method="POST">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_devise">Nom :</label>
                                <input type="text" class="form-control @error('Nom_devise') is-danger @enderror " id="id_Nom_devise" name="Nom_devise" value="{{ old('Nom_devise')  }}">
                                @error('Nom_devise')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="id_Taux_conversion">Taux conversion :</label>
                                <input type="number" class="form-control @error('Taux_conversion') is-danger @enderror " id="id_Taux_conversion" name="Taux_conversion" value="{{ old('Taux_conversion')  }}">
                                @error('Taux_conversion')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="id_Defaut">Défaut:</label>
                                <input type="text" class="form-control @error('Defaut') is-danger @enderror " id="id_Defaut" name="Defaut" value="{{ old('Defaut')  }}">
                                @error('Defaut')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter une Devise') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
