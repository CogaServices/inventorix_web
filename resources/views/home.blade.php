@extends('layouts.AdminTemplate')

@section('content')


        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tableau de Bord</h5>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ __('Content de vous Revoir') }}</strong>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('Vous êtes connecté!') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
                <!-- subscribe start -->
                <div class="col-md-12 col-lg-4">
                    <div class="card card-border-c-blue">
                        <div class="card-body text-center">
                            <i class="feather icon-home text-c-blue d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-c-blue">3</span> Sites</h4>
                            <p class="m-b-20">Gestion des Sites </p>
                            <button class="btn btn-primary btn-sm btn-round">Gérer</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-border-c-green">
                        <div class="card-body text-center">
                            <i class="feather icon-package text-c-green d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-c-green">2050</span> Articles</h4>
                            <p class="m-b-20">Gestion des Articles</p>
                            <button class="btn btn-success btn-sm btn-round">Articles par site</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-border-c-red">
                        <div class="card-body text-center">
                            <i class="feather icon-briefcase text-c-red d-block f-40"></i>
                            <h4 class="m-t-20">Inventaires</h4>
                            <p class="m-b-20">Gestion des Inventaires</p>
                            <button class="btn btn-danger btn-sm btn-round">Liste d'Inventaire</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="card card-border-c-blue">
                        <div class="card-body text-center">
                            <i class="feather icon-home text-c-blue d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-c-blue">17</span> Changements</h4>
                            <p class="m-b-20">Gestion des Inventaire </p>
                            <button class="btn btn-primary btn-sm btn-round">Affectation de l'inventaire</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-border-c-green">
                        <div class="card-body text-center">
                            <i class="feather icon-package text-c-green d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-c-green">35</span> Résltats</h4>
                            <p class="m-b-20">Recherche Multi critères</p>
                            <button class="btn btn-success btn-sm btn-round">Rechercher</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card card-border-c-red">
                        <div class="card-body text-center">
                            <i class="feather icon-bar-chart text-c-red d-block f-40"></i>
                            <h4 class="m-t-20">Edition des Articles</h4>
                            <p class="m-b-20">Edition de Code Bar</p>
                            <button class="btn btn-danger btn-sm btn-round">Editer</button>
                        </div>
                    </div>
                </div>
        </div>
        <!-- [ Main Content ] end -->

@endsection
