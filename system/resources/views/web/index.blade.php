<x-web>

    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                @foreach ($list_slide as $slide)
                    <li data-transition="fade">
                        <img src="{{ url("public/$slide->poto") }}" alt="" width="1920" height="600"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

                        <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="-105" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="500">
                            <div class="slide-content-box middle-slide">
                                <h1 style="color: black">{{ $slide->label }}</h1>
                            </div>
                        </div>

                    </li>
                @endforeach

            </ul>
        </div>
    </section>

    @foreach ($list_tentang_dinas as $tentang_dinas)
        <section class="about-us-area">
            <div class="container">
                <div class="title text-center" style="color: black">
                    <h1>{{ $tentang_dinas->nama_dinas }}</h1>
                    <p>
                        {!! nl2br($tentang_dinas->deskripsi) !!}
                    </p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-5">
                        <div class="img-holder">
                            <img src="{{ url("public/$tentang_dinas->poto") }}">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="middle-text-box">
                            @foreach ($list_visi as $visi)
                                <div class="single-item top">
                                    <h3>{{ $visi->title }} </h3>
                                    <p>
                                        {!! nl2br($visi->deskripsi) !!}
                                    </p>
                                </div>
                            @endforeach
                            @foreach ($list_misi as $misi)
                                <div class="single-item">
                                    <h3>{{ $misi->title }} </h3>
                                    <p>
                                        {!! nl2br($misi->deskripsi) !!}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </section>
    @endforeach


    <section class="welcome-area">
        <div class="container">
            <div class="sec-title">
                <h1><span>Berita Terbaru</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <div class="row">
                            @foreach ($list_berita as $berita)
                                <div class="col-md-4">
                                    <div class="single-blog-post">
                                        <div class="img-holder">
                                            <img src="{{ url("public/$berita->poto") }}">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{ url("detail-berita/$berita->id") }}"><i
                                                                class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
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
