
    @extends('layouts.AdminTemplate')

    @section('title')
    Entité
    @endsection
    @section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">Site: {{ $site->Nom_Site }}</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-12">
                        <form class="form-row">

                            <div class="col-sm-12 form-group">
                                <label for="id_code_devise">Nom : {{ $site->Nom_Site }}</label>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="id_libeller_devise">Nature du site: {{ $site->Nature }}</label>
                            </div>
                            <div class="col-sm-8 form-group">
                                <label for="id_taux_conversion">Locatisantion Géo: {{ $site->Localisation_geographique }}</label>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_taux_conversion">Adresse Postal:{{ $site->Addresse_postale }}</label>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_taux_conversion">Contacts:{{ $site->Contact }}</label>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="id_taux_conversion">Code Postal:{{ $site->Code_postal }}</label>
                            </div>
                            <div class="col-sm-6  form-group">
                                <label for="id_taux_conversion">Fax:{{ $site->Fax }}</label>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="id_taux_conversion">Commentaire:{{ $site->Commentaire }}</label>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
