<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <img src="{{ url('public/web') }}/logo.png" style="width: 23%; margin-top: 4%">
                </div>
            </div>
            <div class="col-lg-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-contact-info pull-left">
                            <ul>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="flaticon-technology"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Hubungi Kami</h5>
                                        <h6>0899-9372-020</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="flaticon-pin"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Tengah, Kec. Delta Pawan</h5>
                                        <h6>Kabupaten Ketapang, Kalimantan Barat 78811</h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="flaticon-agenda"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Senin - Jumat</h5>
                                        <h6>07.30 sampai 16.00</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li ><a href="{{ url('/') }}">Dashboard</a></li>
                            <li class="dropdown"><a href="#">Profil</a>
                                <ul>
                                    <li><a href="{{ url('tentang-dinas') }}">Tentang Dinas</a></li>
                                    <li><a href="{{ url('visi-misi') }}">Visi & Misi</a></li>
                                    <li><a href="{{ url('struktur-organisasi') }}">Struktur Organisasi</a></li>
                                </ul>
                            </li>
                           
                            <li><a href="{{ url('sarana') }}">Sarana</a></li>
                            <li><a href="{{ url('agenda') }}">Agenda</a></li>
                            <li><a href="{{ url('berita') }}">Berita</a></li>
                            <li class="dropdown"><a href="#">Galeri</a>
                                <ul>
                                    <li><a href="{{ url('galeri-photo') }}">Galeri Photo</a></li>
                                    <li><a href="{{ url('galeri-video') }}">Galeri Video</a></li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</section>
