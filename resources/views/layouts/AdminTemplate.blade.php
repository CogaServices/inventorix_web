<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>{{ config('app.name', 'InventoryX') }} || @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Select2 css -->
      <link href="{{ asset('assets/css/plugins/select2.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/css/plugins/dataTables.bootstrap4.min.css') }}">
      <!-- Select2 Js -->
<style>
    .w-5{
        width:16px !important;
    }

</style>

</head>
<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <nav class="pcoded-navbar  ">
        <div class="navbar-wrapper">
    		<div class="navbar-content scroll-div">
    			<ul class="nav pcoded-inner-navbar">
    				<li class="nav-item pcoded-menu-caption"><label>Aministration InventoryX</label></li>
    				<li class="nav-item"><a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-menu"></i></span><span class="pcoded-mtext">Version V1.0.0</span></a></li>
    				<li class="nav-item pcoded-hasmenu">
    					<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Actions Générales</span></a>
    					<ul class="pcoded-submenu">



                                    <li class=""><a href="#!" class="">{{__('Sites')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('site.index') }} " class="">{{__('Tous les Sites')}}</a></li>
                                            <li><a href="{{ route('site.create') }} " class="">{{__('Ajouter un Nouveau Site')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Etage')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('etage.index') }} " class="">{{__('Tous les Etages')}}</a></li>
                                            <li><a href="{{ route('etage.create') }} " class="">{{__('Ajouter un Nouvel Etage')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Appartement')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('appartement.index') }} " class="">{{__('Tous les Appartements')}}</a></li>
                                            <li><a href="{{ route('appartement.create') }} " class="">{{__('Ajouter 1 Appartement')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Directions')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('direction.index') }} " class="">{{__('Toutes les Directions')}}</a></li>
                                            <li><a href="{{ route('direction.create') }} " class="">{{__('Ajouter 1 Direction')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Bureaux')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('bureau.index') }} " class="">{{__('Tous les Bureaux')}}</a></li>
                                            <li><a href="{{ route('bureau.create') }} " class="">{{__('Ajouter 1 Bureau')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Pièces')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('piece.index') }} " class="">{{__('Toutes les Pièces')}}</a></li>
                                            <li><a href="{{ route('piece.create') }} " class="">{{__('Ajouter 1 Pièce')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Etats')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('etat.index') }} " class="">{{__('Tous les Etaps')}}</a></li>
                                            <li><a href="{{ route('etat.create') }} " class="">{{__('Ajouter 1 Etat')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Familles')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('famille.index') }} " class="">{{__('Toutes les Famille')}}</a></li>
                                            <li><a href="{{ route('famille.create') }} " class="">{{__('Ajouter un Nouvel Etage')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Fournisseurs')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('fournisseur.index') }} " class="">{{__('Tous les Fournisseurs')}}</a></li>
                                            <li><a href="{{ route('fournisseur.create') }} " class="">{{__('Ajouter 1 Fournisseur')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Marques')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('marque.index') }} " class="">{{__('Toutes les Marques')}}</a></li>
                                            <li><a href="{{ route('marque.create') }} " class="">{{__('Ajouter 1 marque')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Types Caractéristiques')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('caracteristique.index') }} " class="">{{__('Tous les Type Carac')}}</a></li>
                                            <li><a href="{{ route('caracteristique.create') }} " class="">{{__('Ajouter 1 Type Carac')}}</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#!" class="">{{__('Devises')}}</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="{{ route('devise.index') }} " class="">{{__('Tous les Devises')}}</a></li>
                                            <li><a href="{{ route('devise.create') }} " class="">{{__('Ajouter 1 Devise')}}</a></li>
                                        </ul>
                                    </li>
                        </ul>
                    </li>
                        <li class=" nav-item pcoded-hasmenu"><a href="#!" class="">{{__('Articles')}}</a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="{{ route('article.create') }}" class="">{{__('Ajouter des Articles')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Fichiers des Articles')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Recherche Multicritère')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Mouvement global d\'Articles')}}</a></li>
                            </ul>
                        </li>

                        <li class="nav-item pcoded-hasmenu"><a href="#!" class="">{{__('Inventaire')}}</a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="#!" class="">{{__('Saisie/Consultation Inventaire')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Liste d\'Inventaire')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Liste des Anomalies')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Affectation Inventares')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Remise à Zéro')}}</a></li>
                            </ul>
                        </li>
                        <li class=" nav-item pcoded-hasmenu"><a href="#!" class="">{{__('Editions')}}</a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="#!" class="">{{__('Liste des Articles')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Imprimer Code-Barres')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Re-imprimer Codes barres(Après Inventaire)')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Immobilisation initiales')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('immo à Integrer au fichier')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Recensement immo sans Abomalies')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Immo Pièce Compta Non Obtenues')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Immo avec VNC>=0 Non Identifiées')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Immo endommagées Identifiées')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Immo Incomplètes Identifiées')}}</a></li>
                                <li class=""><a href="#!" class="">{{__('Tableau de Passage')}}</a></li>

                                            {{__('Textes')}}

                            </ul>
                        </li>
                        <li class=" nav-item pcoded-hasmenu"><a href="#!" class="">{{__('Paramètrage')}}</a>

                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href=" {{ route('entite.edit',1) }} " class="">
                                        <span class="pcoded-micon">
                                            <i class="feather icon-sidebar"></i>
                                        </span>
                                        <span class="pcoded-mtext">{{__('Identification')}}</span>
                                    </a>
                                </li>
                                <li class="{{ route('role.index') }}"><a href="#!" class="">{{__('Roles')}}</a></li>
                                <li class="{{ route('permission.index') }}"><a href="#!" class="">{{__('Autorisations')}}</a></li>
                                <li class="{{ route('user.index') }}"><a href="#!" class="">{{__('Liste des Utilisateurs')}}</a></li>
                            </ul>
                            </u>
                        </li>

    			</ul>
    		</div>
    	</div>
    </nav>
    <header class="navbar pcoded-header navbar-expand-lg navbar-blue headerpos-fixed brand-blue">

        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="{{ route('admin') }}" class="b-brand ft-white">
                <!--<img src="assets/images/logo.png" alt="" class="logo"> -->
                   <h4 class="ft-white"><strong>INVENTORYX</strong></h4>
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <i class="icon feather icon-bell"></i>
                            <span class="badge badge-pill badge-danger">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">Nouvelles Notifications</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Utilisateur Recents</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>Modification d'article </p>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                            <div class="noti-footer">
                                <a href="#!">Voir toutes les Notifications</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                @auth
                                <span>{{ auth()->user()->name }}</span>
                                @endauth
                                <a class="dud-logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();" title="Deconnexion">
                                 <i class="feather icon-power"></i>
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                            </div>
                            <ul class="pro-body">
                                <li><a href="{{ route('user.profile') }}" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="{{ route('userGetPassword') }}" class="dropdown-item"><i class="feather icon-mail"></i> Changer le Mot de Passe</a></li>
                                <li><a href="#" class="dropdown-item"><i class="feather icon-lock"></i>Changer la photo de profile</a></li>
                                <li><a href="{{ route('logout') }}" class="dropdown-item"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" title="Deconnexion"><i class="feather icon-lock"></i>Déconnection</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </header>
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <main class="py-4">
                        @include('partials.message')
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>

<footer>
    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
        Application version  v({{ Illuminate\Foundation\Application::VERSION }})
    </div>
</footer>

<!-- Required Js -->

<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/js/menu-setting.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/todo.js') }}"></script>
<script src="{{ asset('js/inventoryx.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.5.2/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/scroller/2.0.2/js/dataTables.scroller.min.js"></script>
<script>
	$('#exampleModal').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var recipient = button.data('whatever')
		var modal = $(this)
		modal.find('.modal-title').text('New message to ' + recipient)
		modal.find('.modal-body input').val(recipient)
    })

    $('#modal-report').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('title')
        var modal = $(this)
        modal.find('.modal-title').text('Report of ' + recipient + ' on current month')
    })
    // report model end
    // DataTable start

    // DataTable end
</script>

</body>
</html>
