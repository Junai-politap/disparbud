<x-web>
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>Sarana Dinas</h1>
        </div>
    </section>

    <section class="main-project-area">
        <div class="container">

            <div class="row project-content masonary-layout filter-layout">
                @foreach ($list_sarana as $sarana)
                <div class="col-md-4 col-sm-4 col-xs-12 filter-item maintenance airconditioning">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="{{ url("public/$sarana->poto") }}" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">

                                        <strong><h4 style="color: white" class="btn btn-info">{{ $sarana->title }}</h4></strong>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-web>
