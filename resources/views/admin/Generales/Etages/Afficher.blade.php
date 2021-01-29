
    @extends('layouts.AdminTemplate')

    @section('title')
    Etage
    @endsection
    @section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">Site: {{ $etage->Nom_Site }}</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-12">
                        <form class="form-row">
                            <div class="col-sm-12 form-group">
                                <label for="id_code_devise">Site: {{ $site }}</label>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="id_code_devise">Nom etage: {{ $etage->Nom_etage }}</label>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
