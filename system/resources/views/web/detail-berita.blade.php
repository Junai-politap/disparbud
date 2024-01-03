<x-web>
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>Detail Berita {{ $berita->title }}</h1>
        </div>
    </section>
 
    
    <section id="blog-area" class="blog-area blog-single-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="{{ url("public/$berita->poto") }}" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                
                                <h3 class="blog-title">{{ $berita->title }}</h3>
                                <ul class="meta-info">
                                    <li><a href="#">{{ $berita->penulis }}</a></li>
                                    <li><a href="#">{{ date("d-M-Y", strtotime($berita->tanggal_berita)) }}</a></li>
                                    <li><a href="#">20 Comments</a></li>
                                    
                                </ul>
                                <div class="text">
                                    <p class="mar-bottom">
                                        {!! nl2br($berita->deskripsi) !!}
                                    </p>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <!--Start sidebar Wrapper-->
                <div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
                    <div class="sidebar-wrapper">
                    
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Berita Terbaru</h3>
                            </div>
                            <ul class="popular-post">
                                @foreach ($list_berita as $berita)
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ url("public/$berita->poto") }}">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="{{ url("detail-berita/$berita->id") }}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="{{ url("detail-berita/$berita->id") }}"><h5 class="post-title">{{ $berita->title }}</h5></a>
                                        <h6 class="post-date">{{ date("d-M-Y", strtotime($berita->tanggal_berita)) }}</h6>
                                    </div>
                                </li>
                                @endforeach
                                
                              
                            </ul>
                        </div>
                       
                    </div>    
                </div>
            </div>
        </div>
    </section> 
</x-web>