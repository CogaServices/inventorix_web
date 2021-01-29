
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tableau de Bord</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">...</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Ajouter un Type</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                        <div class="form-group">
                            <label for="id_code_devise">Libellé Type:</label>
                            <input type="text" class="form-control" id="id_code_devise" name="code_devise" placeholder="Famille">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
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
                    <div id="report-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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
                                <th>Code Famille</th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Deo</td>
                                <td>#81412314</td>
                                <td>Moto G5</td>
                                <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jenny William</td>
                                <td>#68457898</td>
                                <td>iPhone 8</td>
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
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Ajouter une Nouvelle Famille D'article</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                        <div class="form-group">
                            <label for="id_code_devise">Libellé Famille:</label>
                            <input type="text" class="form-control" id="id_code_devise" name="code_devise" placeholder="Famille">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Selectionner un Type</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Type 1</option>
                                <option>Type2</option>
                                <option>Type3</option>
                                <option>Type4</option>
                                <option>Type5</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
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
                    <div id="report-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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
                                <th>Libellé Famille</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Deo</td>
                                <td>#81412314</td>
                                <td>Moto G5</td>
                                <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jenny William</td>
                                <td>#68457898</td>
                                <td>iPhone 8</td>
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
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Ajouter une Nouvelle Sous Famille D'article</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                        <div class="form-group">
                            <label for="id_code_devise">Libellé Sous Famille:</label>
                            <input type="text" class="form-control" id="id_code_devise" name="code_devise" placeholder="Famille">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Selectionner un Type</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Type 1</option>
                                <option>Type2</option>
                                <option>Type3</option>
                                <option>Type4</option>
                                <option>Type5</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
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
                    <div id="report-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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
                                <th>Libelle Sous Famille</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Deo</td>
                                <td>#81412314</td>
                                <td>Moto G5</td>
                                <td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jenny William</td>
                                <td>#68457898</td>
                                <td>iPhone 8</td>
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
