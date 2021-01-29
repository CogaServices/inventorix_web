
<div class="row">
    <div class="col-md-6">
    <div class="card">
        <h5 class="card-header">Ajouter une nouvelle Devise</h5>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="row">

                <div class="col-md-12">
                    <form>
                    <div class="form-group">
                        <label for="id_code_devise">Code devise:</label>
                        <input type="text" class="form-control" id="id_code_devise" name="code_devise" placeholder="XOF">
                    </div>
                    <div class="form-group">
                        <label for="id_libeller_devise">Libellé:</label>
                        <input type="text" class="form-control" id="id_libeller_devise" name="libeller_devise" placeholder="FRCA">
                    </div>
                    <div class="form-group">
                        <label for="id_taux_conversion">Taux de Conversion:</label>
                        <input type="text" class="form-control" id="id_taux_conversion" name="taux_conversion" placeholder="0.0056">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card ">
        <div class="card-header">
            <h5>liste des Devises</h5>
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
                            <th>Code Devise</th>
                            <th>Libellé</th>
                            <th>Taux de Conversion</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Deo</td>
                            <td>#81412314</td>
                            <td>Moto G5</td>
                            <td>17-2-2017</td>
                            <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                        </tr>
                        <tr>
                            <td>Jenny William</td>
                            <td>#68457898</td>
                            <td>iPhone 8</td>
                            <td>20-2-2017</td>
                            <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                        </tr>
                        <tr>
                            <td>Lori Moore</td>
                            <td>#45457898</td>
                            <td>20</td>
                            <td>17-2-2017</td>
                            <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                        </tr>
                        <tr>
                            <td>Austin Pena</td>
                            <td>#62446232</td>
                            <td>Jio</td>
                            <td>25-4-2017</td>
                            <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="text-right  m-r-20">
                <a href="#!" class="b-b-primary text-primary">Voir Tout</a>
            </div>
        </div>
    </div>
</div>
</div>

        </div>
    </div>
    <!-- [ Main Content ] end -->
