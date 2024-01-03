<x-web>
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>Agenda Dinas</h1>
        </div>
    </section>

    <section class="pricing-plan-area">
        <div class="container">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Januari</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Januari') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Februari</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Februari') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Maret</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Maret') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Maret</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Maret') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> April</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'April') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Mei</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Mei') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Juni</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Juni') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Juli</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Juli') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Agustus</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Agustus') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> September</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'September') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Oktober</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Oktober') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Nopember</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Nopember') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 text-center" style="height: 100%">
                        <div class="single-price-box hvr-float-shadow wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="1s" data-wow-offset="0">
                            <div class="table-header">
                                <div class="top">
                                    <h3> Desember</h3>
                                    <span></span>
                                </div>

                            </div>
                            <div class="price-list">
                                <ul>
                                    @foreach ($list_agenda->where('nama_bulan', 'Desember') as $agenda)
                                        <li>
                                            <a href="" class="thm-btn" data-toggle="modal"
                                                data-target="#modal-edit{{ $agenda->id }}">{{ $agenda->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web>



@foreach ($list_agenda as $agenda)
    <div class="modal fade" id="modal-edit{{ $agenda->id }}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">Close &times;</span>
                    </button>

                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="price-list center">
                                <img src="{{ url("public/$agenda->poto") }}" style="width: 100%; margin-top: 5%;">
                                <br>
                                {!! nl2br($agenda->text) !!}
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endforeach
