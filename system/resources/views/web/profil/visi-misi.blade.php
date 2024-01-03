<x-web>
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>Visi & Misi Dinas</h1>
        </div>
    </section>
    <section class="about-us-area">
        <div class="container">
            <div class="row bottom-content">
                <div class="col-md-12">
                    <div class="accordion-box">
                        @foreach ($list_visi as $visi)
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h2 style="font-size: 350%; color: black">{{ $visi->title }}</h2>
                            </div>
                            <div class="accord-content">
                                <p style="font-size: 200%; color: black">{!! nl2br($visi->deskripsi) !!}</p>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($list_misi as $misi)
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h2 style="font-size: 350%; color: black">{{ $misi->title }} </h2>
                            </div>
                            <div class="accord-content collapsed">
                                <p style="font-size: 200%; color: black">{!! nl2br($misi->deskripsi) !!}</p>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-web>
