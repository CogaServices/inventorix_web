
    @extends('layouts.AdminTemplate')

    @section('title')
    Directions
    @endsection
    @section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h5>liste des Directions</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> Agrandir</span><span style="display:none"><i class="feather icon-minimize"></i> Restaurer</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> Réduire</span><span style="display:none"><i class="feather icon-plus"></i> Développer</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> Recharger</a></li>
                        <!--<li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> Supprimer</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
  <div class="table-responsive">
                    <div id="report-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row align-items-end">
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                        <div class="col">
                             <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success mb-3 btn-sm" data-toggle="modal" data-target="#modal-form"><i class="feather icon-plus"></i> Add Customer</button>
                            </div>
                        </div><a class="button is-info" href="{{ route('caracteristique.create') }}">Créer un  caracteristique</a>
                        </div>
                    </div>
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
                            </div> <table   class="table table-hover table-borderless">
                                <thead>
                                    <tr role="row">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Type </th>
                                <th>Libelle</th>
                                <th>Echeance </th>
                                <th>Nbre de jour </th>
                                <th>Date </th>
                                <th>Valeur</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($caracteristiques as $caracteristique)
                                <tr>
                                    <td>{{ $caracteristique->ID_carac }}</td>
                                    <td>{{ $caracteristique->Type }}</td>
                                    <td>{{ $caracteristique->Libelle }}</td>
                                    <td>{{ $caracteristique->Echeance }}</td>
                                    <td>{{ $caracteristique->Nbre_jour }}</td>
                                    <td>{{ $caracteristique->Date }}</td>
                                    <td>{{ $caracteristique->Valeur }}</td>
                                    <td>
                                        <a href="{{ route('caracteristique.show', $caracteristique->ID_carac) }}">
                                            <i class="icon feather icon-eye f-w-600 f-16 m-r-15 text-c-green"></i>
                                        </a>
                                        <a href="{{ route('caracteristique.edit',$caracteristique->ID_carac) }}">
                                            <i class="feather icon-edit f-w-600 f-16 text-c-red"></i>
                                        </a>
                                        <form action="{{ route('caracteristique.destroy', $caracteristique->ID_carac) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button  type="submit">
                                                <i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-right  m-r-20">
                    {{ $caracteristiques->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
