@extends('layouts.AdminTemplate')
@section('title')
Roles
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Liste des Roles /h3>
        <div class="card-tools">
            <a href="{{ route('role.create') }} " class="btn btn-primary"><i class="fas fa-shield-alt"></i> Add new Role</a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <div class="row"><div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="report-table_length">
                                   <label>Affichage
                                        <select name="report-table_length" aria-controls="report-table" class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="report-table_filter" class="dataTables_filter">
                                        <label>Rechercher:
                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="report-table">
                                        </label>
                                    </div>
                                </div>
                            </div> <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Autorrisation</th>
                    <th>Date </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $role )
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            @foreach ($role->permissions as $permission )
                                <button class="btn btn-warning" role="button"><i class="fas fa-shield-alt"></i> {{ $permission->name }}</button>
                            @endforeach
                        </td>
                        <td><span class="tag tag-success">{{ $role->created_at }}</span></td>
                        {{--  <td>
                            <a href="{{ route('role.show', $role->id ) }}" class="btn btn-info">Change Permission</a>
                            <a href="{{ route('role.destroy',$role->id ) }}" class="btn btn-danger">Delete</a>
                        </td>  --}}
                    </tr>
                @empty
                    <tr>
                        <td><i class="fas fa-folder-open"></i> Aucunes Entrées</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
