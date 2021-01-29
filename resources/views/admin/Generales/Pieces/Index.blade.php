
    @extends('layouts.AdminTemplate')

    @section('title')
    Pièces
    @endsection
    @section('content')
<div class="row">


</div>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>liste des Pièces</h5>
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
            <div class="row align-items-center m-l-0">
                <div class="col-sm-6">
                    <select class=" col-sm-12"  onchange="window.location.href = this.value">
                        <option value="{{ route('direction.index') }}" @unless($Nom_Bureau) selected @endunless>Tous les Bureaux</option>

                            @foreach($bureaux as $bureau)
                            <option value="{{ route('piece.bureau', $bureau->Nom_bureau) }}" {{ $Nom_Bureau == $bureau->Nom_bureau ? 'selected' : '' }}>{{ $bureau->Nom_bureau }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-sm-6 text-right">
                    <button class="btn btn-success mb-3 btn-sm" href="{{ route('piece.create') }}" data-toggle="modal" data-target="#modal-form"><i class="feather icon-plus"></i> Ajouter une Pièce</button>
                </div>
            </div>
            <div class="table-responsive">
                <table id="report-table" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom Piece </th>
                                        <th>Nom Direction </th>
                                        <th>Nom Bureau</th>
                                        <th>Surface</th>
                                        <th>Nbre Fenetres</th>
                                        <th>Nombre Porte</th>
                                        <th>Observation</th>
                                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pieces as $piece)
                        <tr>
                            <td>{{ $piece->ID_piece }}</td>
                            <td>
                                {{ $piece->Nom_piece }}
                                <small class="d-block">
                                    <a href="{{ route('piece.show', $piece->ID_piece) }}">Voir</a> |
                                    <a href="{{ route('piece.edit',$piece->ID_piece) }}">Modifier</a> |
                                    <a class="text-danger" onclick='document.getElementById("suppression_{{ $piece->ID_piece }}").submit()'>Supprimer </a>
                                    <form action="{{ route('piece.destroy', $piece->ID_piece) }}" method="post" id="suppression_{{ $piece->ID_piece }}">
                                        @csrf
                                        @method('DELETE')

                                    </form>
                                </small>
                            </td>
                            <td>{{ $piece->Nom_direction }}</td>
                            <td>{{ $piece->Nom_bureau }}</td>
                            <td>{{ $piece->suface }}</td>
                            <td>{{ $piece->Nbre_fenetre }}</td>
                            <td>{{ $piece->Numero_porte }}</td>
                            <td>{{ $piece->Observation }}</td>
                            <td>
                                <a href="{{ route('piece.show', $piece->ID_piece) }}">
                                    <i class="icon feather icon-eye f-w-600 f-15 m-r-5 text-c-green"></i>
                                </a>
                                <a href="{{ route('piece.edit',$piece->ID_piece) }}">
                                    <i class="feather icon-edit f-w-600 f-15 m-r-5 text-c-blue"></i>
                                </a>
                                <a class="text-danger" onclick='document.getElementById("suppression_{{ $piece->ID_piece }}").submit()'>
                                    <i class="feather icon-trash-2 f-w-600 f-15 m-r-5  text-c-red"></i>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-right  m-r-20">
                {{ $pieces->links() }}
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter une nouvelle Piece</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                                    <form class="form-row" action="{{ route('piece.store') }}" method="POST">
                                        @csrf
                                        <div class="col-sm-6 form-group">
                                            <label>Slectionner un bureau: <label><br/>
                                            <select class="form-control "  name="ID_bur">
                                                <option value="" selected>{{ __('Aucun Bureau') }}</option>
                                                @foreach($bureaux as $bureau)
                                                    <option value="{{ $bureau->ID_bur }}">{{ $bureau->Nom_bureau }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label> Slectionner un Etage: <label><br/>
                                            <select class=" form-control"  name="ID_etage">
                                                <option value="" selected>{{ __('Aucun') }}</option>
                                                @foreach($etages as $etage)
                                                    <option value="{{ $etage->ID_etage }}" >{{ $etage->Nom_etage }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label for="id_Nom_piece">Nom Pièce:</label>
                                            <input type="text" class="form-control @error('Nom_piece') is-danger @enderror " id="id_Nom_piece" name="Nom_piece" value="{{ old('Nom_piece')  }}">
                                            @error('Nom_piece')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <label for="id_Code_barre">Code barre piece:</label>
                                            <input type="text" class="form-control @error('Code_barre') is-danger @enderror" id="id_Code_barre" name="Code_barre" value="{{ old('Code_barre')  }}">
                                            @error('Code_barre')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-8 form-group">
                                            <label for="id_Nom_direction">Direction:</label>
                                            <input type="text" class="form-control @error('Nom_direction') is-danger @enderror" id="id_Nom_direction" name="Nom_direction" value="{{ old('Nom_direction')  }}">
                                            @error('Nom_direction')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="id_Nom_bureau">Nom bureau: </label>
                                            <input type="text" class="form-control @error('Nom_bureau') is-danger @enderror" id="id_Nom_bureau" name="Nom_bureau" value="{{ old('Nom_bureau')  }}">
                                            @error('Nom_bureau')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="id_suface">Surface:</label>
                                            <input type="number" class="form-control @error('suface') is-danger @enderror" id="id_suface" name="suface" value="{{ old('suface')  }}">
                                            @error('suface')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="id_Nbre_fenetre">Nombre fenêtre:</label>
                                            <input type="number" class="form-control @error('Nbre_fenetre') is-danger @enderror" id="id_Nbre_fenetre" name="Nbre_fenetre" value="{{ old('Nbre_fenetre')  }}">
                                            @error('Nbre_fenetre')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label for="id_Numero_porte">Numero Porte:</label>
                                            <input type="number" class="form-control @error('Numero_porte') is-danger @enderror" id="id_Numero_porte" name="Numero_porte" value="{{ old('Numero_porte')  }}">
                                            @error('Numero_porte')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label for="idObservation">Observation:</label>
                                            <textarea class="form-control @error('Observation') is-danger @enderror" id="idObservation" rows="3" name="Observation" value="{{ old('Observation')  }}"></textarea>
                                            @error('Observation')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <input type="hidden"  name="Code_automatique" value="1" >

                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary ">{{ __('Ajouter un Piece') }}</button>
                                        </div>
                                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
