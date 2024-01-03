<x-web>
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>Berita Terbaru Dinas</h1>
        </div>
    </section>

    <section id="blog-area" class="blog-grid-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <div class="row">
                            @foreach ($list_berita as $berita)
                                <div class="col-md-3">
                                    <div class="single-blog-post">
                                        <div class="img-holder">
                                            <img src="{{ url("public/$berita->poto") }}">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="b{{ url("detail-berita/$berita->id") }}"><i
                                                                class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder text-center">
                                            <ul class="meta-info">
                                                <li><a href="#">Tanggal</a></li>
                                                <li><a
                                                        href="#">{{ date('d-M-Y', strtotime($berita->tanggal_berita)) }}</a>
                                                </li>
                                            </ul>
                                            <a href="{{ url("detail-berita/$berita->id") }}">
                                                <h3 class="blog-title">{{ $berita->title }}</h3>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-web>
