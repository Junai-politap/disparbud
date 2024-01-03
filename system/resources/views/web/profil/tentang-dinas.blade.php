<x-web>
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>Tentang Dinas</h1>
        </div>
    </section>
 
    
    <section id="blog-area" class="blog-area blog-single-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                @foreach ($list_tentang_dinas as $tentang_dinas)
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="{{ url("public/$tentang_dinas->poto") }}" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                
                                <h3 class="blog-title">{{ $tentang_dinas->nama_dinas }}</h3>
                                
                                <div class="text">
                                    <p class="mar-bottom">
                                        {!! nl2br($tentang_dinas->deskripsi) !!}
                                    </p>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
               
                @endforeach
                <div class="col-md-2"></div>
                
            </div>
        </div>
    </section> 
</x-web>