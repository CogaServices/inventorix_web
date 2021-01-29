
    @extends('layouts.AdminTemplate')

    @section('title')
    Entité
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Modifier une Devise</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('devise.update', $devise->ID_devise) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_devise">Nom devise:</label>
                                <input type="text" class="form-control @error('Nom_devise') is-danger @enderror" id="id_Nom_devise" name="Nom_devise" value="{{ $devise->Nom_devise  }}">
                                @error('Nom_devise')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Taux_conversion">Taux Conversion:</label>
                                <input type="text" class="form-control @error('Taux_conversion') is-danger @enderror" id="id_Taux_conversion" name="Taux_conversion" value="{{ $devise->Taux_conversion  }}">
                                @error('Taux_conversion')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Defaut">Defaut:</label>
                                <input type="text" class="form-control @error('Defaut') is-danger @enderror" id="id_Defaut" name="Defaut" value="{{ $devise->Defaut  }}">
                                @error('Defaut')
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
