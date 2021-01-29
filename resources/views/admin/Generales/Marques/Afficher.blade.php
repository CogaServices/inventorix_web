
    @extends('layouts.AdminTemplate')

    @section('title')
    Marque
    @endsection
    @section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <h5 class="card-header">Site: {{ $marque->Nom_Site }}</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-12">
                        <form class="form-row">
                            <div class="col-sm-12 form-group">
                                <label for="id_code_devise">Nom Marque: {{ $marque->Nom_de_la_marque }}</label>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="id_libeller_devise">Nature du marque: {{ $marque->Code_marque }}</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
