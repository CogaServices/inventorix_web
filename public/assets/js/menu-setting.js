"use strict";
$(document).ready(function() {
    // =========================================================
    // =========    Menu Customizer [ HTML ] code   ============
    // =========================================================
    $('body').append('' +
        '<div id="styleSelector" class="menu-styler">' +
        '<div class="style-toggler">' +
        '<a href="#!"></a>' +
        '</div>' +
        '<div class="style-block">' +
        '<h4 class="mb-2">Inventory <small class="font-weight-normal">V1.01</small></h4>' +
        '<hr class="">' +
        '<div class="m-style-scroller">' +
        '<h6 class="mt-2">Mise en Page</h6>' +
        '<div class="theme-color layout-type">' +
        '<a href="#!" class="active" data-value="menu-dark" title="Default Layout"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="menu-light" title="Light"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="dark" title="Dark"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="reset" title="Reset">Reset</a>' +
        '</div>' +
        '<h6>Couleur D\'entête</h6>' +
        '<div class="theme-color header-color">' +
        '<a href="#!" class="" data-value="header-blue"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="header-red"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="header-purple"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="header-info"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="header-green"><span></span><span></span></a>' +
        '<a href="#!" class="active" data-value="header-dark"><span></span><span></span></a>' +
        '</div>' +
        '<h6>Zone Logo</h6>' +
        '<div class="theme-color brand-color">' +
        '<a href="#!" class="" data-value="brand-blue"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="brand-red"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="brand-purple"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="brand-info"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="brand-green"><span></span><span></span></a>' +
        '<a href="#!" class="" data-value="brand-dark"><span></span><span></span></a>' +
        '</div>' +
        '<div class="form-group mb-2">' +
        '<div class="switch switch-primary d-inline m-r-10">' +
        '<input type="checkbox" id="menu-fixed">' +
        '<label for="menu-fixed" class="cr"></label>' +
        '</div>' +
        '<label>Sidebar Fixé</label>' +
        '</div>' +
        '<div class="form-group mb-2">' +
        '<div class="switch switch-primary d-inline m-r-10">' +
        '<input type="checkbox" id="header-fixed">' +
        '<label for="header-fixed" class="cr"></label>' +
        '</div>' +
        '<label>Entete Fixé</label>' +
        '</div>' +
        '<div class="form-group mb-2">' +
        '<div class="switch switch-primary d-inline m-r-10">' +
        '<input type="checkbox" id="box-layouts">' +
        '<label for="box-layouts" class="cr"></label>' +
        '</div>' +
        '<label>Zone de page reduite</label>' +
        '</div>' +
        '<div class="form-group mb-2">' +
        '<div class="switch switch-primary d-inline m-r-10">' +
        '<input type="checkbox" id="breadcumb-layouts">' +
        '<label for="breadcumb-layouts" class="cr"></label>' +
        '</div>' +
        '<label>Breadcumb sticky</label>' +
        '</div>' +
        '</div>' +
        '<a href="{{ route(\'user.profile\') }}" class="btn btn-success btn-block m-r-15 m-t-10 m-b-10">Profile</a>' +
        '</div>' +
        '</div>');
    setTimeout(function() {
        $('.m-style-scroller').css({
            'height': 'calc(100vh - 335px)',
            'position': 'relative'
        });
        var px = new PerfectScrollbar('.m-style-scroller', {
            wheelSpeed: .5,
            swipeEasing: 0,
            suppressScrollX: !0,
            wheelPropagation: 1,
            minScrollbarLength: 40,
        });
    }, 400);
    // =========================================================
    // ==================    Menu Customizer Start   ===========
    // =========================================================
    // open Menu Styler
    $('#styleSelector > .style-toggler').on('click', function() {
        $('#styleSelector').toggleClass('open');
        $('#styleSelector').removeClass('prebuild-open');
    });
    // layout types
    $('.layout-type > a').on('click', function() {
        var temp = $(this).attr('data-value');
        $('.layout-type > a').removeClass('active');
        $('.pcoded-navbar').removeClassPrefix('navbar-image-');
        $(this).addClass('active');
        $('head').append('<link rel="stylesheet" class="layout-css" href="">');
        if (temp == "menu-dark") {
            $('.pcoded-navbar').removeClassPrefix('menu-');
            $('.pcoded-navbar').removeClass('navbar-dark');
        }
        if (temp == "menu-light") {
            $('.pcoded-navbar').removeClassPrefix('menu-');
            $('.pcoded-navbar').removeClass('navbar-dark');
            $('.pcoded-navbar').addClass(temp);
        }
        if (temp == "reset") {
            location.reload();
        }
        if (temp == "dark") {
            $('.pcoded-navbar').removeClassPrefix('menu-');
            $('.pcoded-navbar').addClass('navbar-dark');
            $('.layout-css').attr("href", "assets/css/layout-dark.css");
        } else {
            $('.layout-css').attr("href", "");
        }
    });
    // Header Color
    $('.header-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        $('.header-color > a').removeClass('active');
        $('.pcoded-header').removeClassPrefix('brand-');
        $(this).addClass('active');
        if (temp == "header-default") {
            $('.pcoded-header').removeClassPrefix('header-');
            $('.pcoded-header').removeClassPrefix('brand-');
            $('.m-header > .b-brand > .logo').attr('src', 'assets/images/logo-dark.png');
        } else {
            $('.pcoded-header').removeClassPrefix('header-');
            $('.pcoded-header').addClass(temp);
            $('.pcoded-header').addClass('brand-' + temp.slice(7, temp.length));
            $('.m-header > .b-brand > .logo').attr('src', 'assets/images/logo.png');
        }
    });
    // brand Color
    $('.brand-color > a').on('click', function() {
        var temp = $(this).attr('data-value');
        $('.brand-color > a').removeClass('active');
        $(this).addClass('active');
        if (temp == "brand-default") {
            $('.pcoded-header').removeClassPrefix('brand-');
            $('.m-header > .b-brand > .logo').attr('src', 'assets/images/logo-dark.png');
        } else {
            $('.pcoded-header').removeClassPrefix('brand-');
            $('.pcoded-header').addClass(temp);
            $('.m-header > .b-brand > .logo').attr('src', 'assets/images/logo.png');
        }
    });
    // rtl layouts
    $('#theme-rtl').change(function() {
        $('head').append('<link rel="stylesheet" class="rtl-css" href="">');
        if ($(this).is(":checked")) {
            $('.rtl-css').attr("href", "assets/css/layout-rtl.css");
        } else {
            $('.rtl-css').attr("href", "");
        }
    });
    // Menu Fixed
    $('#menu-fixed').change(function() {
        $('.pcoded-navbar').removeAttr('style');
        if ($(this).is(":checked")) {
            $('.pcoded-navbar').addClass('menupos-fixed');
        } else {
            $('.pcoded-navbar').removeClass('menupos-fixed');
        }
    });
    // Entete Fixé
    $('#header-fixed').change(function() {
        $('.pcoded-navbar').removeAttr('style');
        if ($(this).is(":checked")) {
            $('.pcoded-header').addClass('headerpos-fixed');
        } else {
            $('.pcoded-header').removeClass('headerpos-fixed');
        }
    });
    // breadcumb sicky
    $('#breadcumb-layouts').change(function() {
        if ($(this).is(":checked")) {
            $('.page-header').addClass('breadcumb-sticky');
        } else {
            $('.page-header').removeClass('breadcumb-sticky');
        }
    });
    // Box layouts
    $('#box-layouts').change(function() {
        if ($(this).is(":checked")) {
            $('body').addClass('container');
            $('body').addClass('box-layout');
        } else {
            $('body').removeClass('container');
            $('body').removeClass('box-layout');
        }
    });
    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, it) {
            var classes = it.className.split(" ").map(function(item) {
                return item.indexOf(prefix) === 0 ? "" : item;
            });
            it.className = classes.join(" ");
        });
        return this;
    };
    // ==================    Menu Customizer End   =============
    // =========================================================
});
