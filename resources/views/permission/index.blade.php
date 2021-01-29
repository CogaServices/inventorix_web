@extends('layouts.AdminTemplate')

@section('title')
Autorisations
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Liste des Autorisations</h3>

        <div class="card-tools">
            <a href="{{ route('permission.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Creer une Autorisation</a>
        </div>
    </div>
    <!-- /.card-header -->
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
                            </div> <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Date </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->created_at }}</td>
                        <td>
                            <a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-sm btn-warning">Modifier l'autorisation</a>
                        </td>
                    </tr>
                @empty
                    <tr>Aucun resultat trouvé</tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
