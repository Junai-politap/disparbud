<x-web>
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>Struktur Organisasi Dinas</h1>
        </div>
    </section>
    <section class="about-us-area">
        <div class="container">
            
            <div class="row">
                @foreach ($list_struktur_organisasi as $struktur_organisasi)
                <div class="col-md-12">
                    <div class="img-holder">
                        <img style="width: 100%; height: 50%; border-radius: 2%" src="{{ url("public/$struktur_organisasi->poto") }}">
                    </div>
                </div>
                @endforeach               
            </div>
        </div>
    </section>

</x-web>