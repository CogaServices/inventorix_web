@extends('layouts.AdminTemplate')

@section('title')
Creer un droit
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Ajouter une autorisation</h3>
        <div class="card-tools">
            <a href="{{ route('permission.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See all Permission</a>
        </div>
    </div>
    <form method="POST" action="{{ route('permission.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nom Autorisation</label>
                <input type="text" name="name"  id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="Permission Name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Creer</button>
        </div>
    </form>
</div>
@endsection
