
    @extends('layouts.AdminTemplate')

    @section('title')
    Etat
    @endsection
    @section('content')
<div class="row">
        <div class="card">
            <h5 class="card-header">Ajouter un Etat</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-row" action="{{ route('etat.store') }}" method="POST">
                            @csrf
                            <div class="col-sm-12 form-group">
                                <label for="id_Type">Type Etat:</label>
                                <input type="text" class="form-control @error('Type') is-danger @enderror " id="id_Type" name="Type" value="{{ old('Type')  }}">
                                @error('Type')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="id_Sortie_inventaire">Sortie inventaire :</label>
                                <input type="text" class="form-control @error('Sortie_inventaire') is-danger @enderror " id="id_Sortie_inventaire" name="Sortie_inventaire" value="{{ old('Sortie_inventaire')  }}">
                                @error('Sortie_inventaire')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter un Etat') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
