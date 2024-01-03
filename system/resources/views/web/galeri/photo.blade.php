<x-web>
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>Galeri Poto Dinas</h1>
        </div>
    </section>

    <section id="blog-area" class="blog-grid-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <div class="row">
                            @foreach ($list_galeri_poto as $galeri_poto)
                                <div class="col-md-3">
                                    <div class="single-blog-post">
                                        <div class="img-holder">
                                            <img src="{{ url("public/$galeri_poto->poto") }}">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        
                                                        <h5 style="text-align: center; color: white">{{ $galeri_poto->judul }}</h5>
                                                    </div>
                                                </div>
                                            </div>
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
