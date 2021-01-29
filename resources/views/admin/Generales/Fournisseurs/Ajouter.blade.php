
    @extends('layouts.AdminTemplate')

    @section('title')
    Fournisseur
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter un Fournisseur</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('fournisseur.store') }}" method="POST">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_Fournisseur">Nom :</label>
                                <input type="text" class="form-control @error('Nom_Fournisseur') is-danger @enderror " id="id_Nom_Fournisseur" name="Nom_Fournisseur" value="{{ old('Nom_Fournisseur')  }}">
                                @error('Nom_Fournisseur')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Adresse_Fournisseur">Adresse :</label>
                                <input type="text" class="form-control @error('Adresse_Fournisseur') is-danger @enderror " id="id_Adresse_Fournisseur" name="Adresse_Fournisseur" value="{{ old('Adresse_Fournisseur')  }}">
                                @error('Adresse_Fournisseur')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Telephone_Fournisseur">Téléphone :</label>
                                <input type="number" class="form-control @error('Telephone_Fournisseur') is-danger @enderror " id="id_Telephone_Fournisseur" name="Telephone_Fournisseur" value="{{ old('Telephone_Fournisseur')  }}">
                                @error('Telephone_Fournisseur')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Localite_Fournisseur">Localité :</label>
                                <input type="text" class="form-control @error('Localite_Fournisseur') is-danger @enderror " id="id_Localite_Fournisseur" name="Localite_Fournisseur" value="{{ old('Localite_Fournisseur')  }}">
                                @error('Localite_Fournisseur')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="id_Email_Fournisseur">Email :</label>
                                <input type="email" class="form-control @error('Email_Fournisseur') is-danger @enderror " id="id_Email_Fournisseur" name="Email_Fournisseur" value="{{ old('Email_Fournisseur')  }}">
                                @error('Email_Fournisseur')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter un Fournisseur') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
