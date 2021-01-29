@extends('layouts.AdminTemplate')
@section('title')
Creation de Role
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Ajouter un nouveau role</h3>
        <div class="card-tools">
            <a href="{{ route('role.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> Voir les Roles</a>
        </div>
    </div>
    <div class="card-body">
        <role></role>
    </div>
</div>

@endsection
