
    @extends('layouts.AdminTemplate')

    @section('title')
    Direction
    @endsection
    @section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">Site: {{ $direction->Nom_Site }}</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-12">
                        <form class="form-row">
                            <div class="col-sm-12 form-group">
                                <label for="id_code_devise">Site: {{ $site }}</label>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="id_code_devise">Nom Direction: {{ $direction->Nom_de_la_direction }}</label>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="id_libeller_devise">Nature du direction: {{ $direction->Code_direction }}</label>
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="id_taux_conversion">Locatisantion Géo: {{ $direction->Contact }}</label>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_taux_conversion">Adresse Postal:{{ $direction->Nom_du_directeur }}</label>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_taux_conversion">Contacts:{{ $direction->Description_activité }}</label>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_taux_conversion">Code Postal:{{ $direction->Commentaire }}</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
