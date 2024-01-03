@php

    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('admin') }}" class="brand-link">
        <img src="{{ url('public/admin') }}/logo.png"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"> DISPARBUD</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public/admin') }}/logo.png" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="{{ url('admin') }}" class="d-block">
                    {{ Auth::guard('admin')->user()->nama }}
                </a>
            </div>
        </div>



        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ checkRouteActive('/') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/admin') }}" class="nav-link {{ checkRouteActive('admin/admin') }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data Admin

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Profil Dinas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('admin/tentang-dinas') }}"
                                class="nav-link {{ checkRouteActive('admin/tentang-dinas') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Tentang Dinas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/visi-misi') }}"
                                class="nav-link {{ checkRouteActive('admin/visi-misi') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Visi & Misi Dinas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/struktur-organisasi') }}"
                                class="nav-link {{ checkRouteActive('admin/struktur-organisasi') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Struktur Organisasi Dinas</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/sarana') }}" class="nav-link {{ checkRouteActive('admin/sarana') }}">
                        <i class="nav-icon fa fa-check "></i>
                        <p>Data Sarana</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/agenda') }}" class="nav-link {{ checkRouteActive('admin/agenda') }}">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>
                            Data Agenda
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/berita') }}" class="nav-link {{ checkRouteActive('admin/berita') }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Data Berita
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('admin/slide') }}" class="nav-link {{ checkRouteActive('admin/slide') }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Data Slide
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Galeri Dinas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('admin/galeri-poto') }}"
                                class="nav-link {{ checkRouteActive('admin/galeri-poto') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Galeri Poto</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/galeri-video') }}"
                                class="nav-link {{ checkRouteActive('admin/galeri-video') }}">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Galeri Video</p>
                            </a>
                        </li>
                       
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
