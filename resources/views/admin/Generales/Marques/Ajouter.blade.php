
    @extends('layouts.AdminTemplate')

    @section('title')
    Marque
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter une Marque</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">

                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('marque.store') }}" method="POST">
                            @csrf

                            <div class="col-sm-12 form-group">
                                <label for="id_Nom_marque">Nom :</label>
                                <input type="text" class="form-control @error('Nom_marque') is-danger @enderror " id="id_Nom_marque" name="Nom_marque" value="{{ old('Nom_marque')  }}">
                                @error('Nom_marque')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter une Marque') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
