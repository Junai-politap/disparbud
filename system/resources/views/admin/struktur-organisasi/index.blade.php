<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                            <span class="fa fa-plus"></span> Tambah Struktur Organisasi
                        </button>
                        <h4 class="card-title">
                            <strong> Data Struktur Organisasi</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Gambar Struktur Organisasi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_struktur_organisasi as $struktur_organisasi)
                                    <tr>
                                        <td class="text-center" style="width: 5%">{{ $loop->iteration }}</td>
                                        <td class="text-center" style="width: 10%">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-toggle="modal"
                                                data-target="#modal-edit{{ $struktur_organisasi->id }}">
                                                <span class="fa fa-edit"></span>
                                            </button>
                                                <x-button.delete-button url="admin/struktur-organisasi" id="{{ $struktur_organisasi->id }}" />
                                            </div>
                                        </td>
                                    
                                        <td class="text-center" style="width: 20%">
                                            <img src="{{ url("public/$struktur_organisasi->poto") }}" style="width:50%;" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-edit{{ $struktur_organisasi->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Struktur Organisasi</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('admin/struktur-organisasi', $struktur_organisasi->id) }}" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">

                                                        @csrf
                                                        @method('PUT')
                                                        <div class="card-body">

                                                          
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Gambar Struktur Organisasi</label>
                                                                <div class="col-md-4">
                                                                    <img src="{{ url("public/$struktur_organisasi->poto") }}" style="width:50%; ">
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg" value="{{ $struktur_organisasi->poto }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-default"
                                                            data-dismiss="modal">Batal</button>
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Struktur Organisasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/struktur-organisasi') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Gambar Struktur Organisasi</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</x-app>