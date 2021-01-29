
    @extends('layouts.AdminTemplate')

    @section('title')
    Bureaux
    @endsection
    @section('content')
<div class="row">

    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h5>liste des Bureaux </h5>
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
                            <select class=" col-sm-12"  onchange="window.location.href = this.value">
                                    <option value="{{ route('bureau.index') }}" @unless($Nom_Direction) selected @endunless>Toutes les directions</option>
                                    @foreach($directions as $direction)
                                    <option value="{{ route('bureau.direction', $direction->Nom_de_la_direction) }}" {{ $Nom_Direction == $direction->Nom_de_la_direction ? 'selected' : '' }}>{{ $direction->Nom_de_la_direction }}</option>
                                    @endforeach
                            </select>
                             <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-success mb-3 btn-sm" data-toggle="modal" data-target="#modal-form"><i class="feather icon-plus"></i> Add Customer</button>
                            </div>
                        </div><a class="button is-info" href="{{ route('bureau.create') }}">Créer un Bureau</a>
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
                            </div> <table class="table table-hover table-borderless">
                                <thead>
                                    <tr role="row">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom Bureau</th>
                                <th>Nbre Pote </th>
                                <th>Nbre Occupant </th>
                                <th>Code_automatique</th>
                                <th>Commentaire</th>
                                <th>Action</th>
                            </tr>
                            @foreach($bureaux as $bureau)
                            <td>{{ $bureau->ID_bur }}</td>
                            <td>{{ $bureau->Nom_bureau }}</td>

                                    <td>{{ $bureau->N_porte_bureau }}</td>
                                    <td>{{ $bureau->Nb_occupant }}</td>

                                    <td>{{ $bureau->Code_automatique }}</td>
                                    <td>{{ $bureau->Commentaire }}</td>
                                    <td>
                                        <a href="{{ route('bureau.show', $bureau->ID_bur) }}">
                                            <i class="icon feather icon-eye f-w-600 f-16 m-r-15 text-c-green"></i>
                                        </a>
                                        <a href="{{ route('bureau.edit',$bureau->ID_bur) }}">
                                            <i class="feather icon-edit f-w-600 f-16 text-c-red"></i>
                                        </a>
                                        <form action="{{ route('bureau.destroy', $bureau->ID_bur) }}" method="post">

                                            @csrf
                                            @method('DELETE')
                                            <button  type="submit" class="button btn-theme">
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
                    {{ $bureaux->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
