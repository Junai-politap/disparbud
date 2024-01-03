<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right ml-2" data-toggle="modal" data-target="#modal-lg-misi">
                            <span class="fa fa-plus"></span> Tambah Misi
                        </button>

                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg-visi">
                            <span class="fa fa-plus"></span> Tambah Visi
                        </button>
                        
                        <h4 class="card-title">
                            <strong> Data Visi & Misi Dinas</strong>
                        </h4>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Aksi</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Deskripsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_visi as $visi)
                                            <tr>
                                                <td class="text-center" style="width: 5%">{{ $loop->iteration }}</td>
                                                <td class="text-center" style="width: 10%">
                                                    <div class="btn-group">
                                                        <button class="btn btn-warning" data-toggle="modal"
                                                            data-target="#modal-edit-visi{{ $visi->id }}">
                                                            <span class="fa fa-edit"></span>
                                                        </button>
                                                        <a href="{{ url("admin/visi-misi/delete-visi/$visi->id") }}"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
                                                            <span class="fa fa-trash"></span>
                                                        </a>
                                                    </div>
                                                </td>

                                                <td class="text-center">{{ $visi->title }}</td>
                                                <td class="">{!! nl2br($visi->deskripsi) !!}</td>
                                            </tr>

                                            <div class="modal fade" id="modal-edit-visi{{ $visi->id }}">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Data Visi Dinas</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ url('admin/visi-misi', $visi->id) }}/update-visi" method="POST"
                                                            enctype="multipart/form-data">
                                                            <div class="modal-body">

                                                                @csrf
                                                                @method('PUT')
                                                                <div class="card-body">

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Title Visi</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control"
                                                                                name="title"
                                                                                value="{{ $visi->title }}">
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Deskripsi</label>

                                                                        <div class="col-sm-9">
                                                                            <textarea name="deskripsi" class="summernote">{{ $visi->deskripsi }}</textarea>
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

                        <div class="col-md-6">
                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Aksi</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Deskripsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_misi as $misi)
                                            <tr>
                                                <td class="text-center" style="width: 5%">{{ $loop->iteration }}</td>
                                                <td class="text-center" style="width: 10%">
                                                    <div class="btn-group">
                                                        <button class="btn btn-warning" data-toggle="modal"
                                                            data-target="#modal-edit-misi{{ $misi->id }}">
                                                            <span class="fa fa-edit"></span>
                                                        </button>
                                                        <a href="{{ url("admin/visi-misi/delete-misi/$misi->id") }}"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">
                                                            <span class="fa fa-trash"></span>
                                                        </a>
                                                    </div>
                                                </td>

                                                <td class="text-center">{{ $misi->title }}</td>
                                                <td class="">{!! nl2br($misi->deskripsi) !!}</td>
                                            </tr>

                                            <div class="modal fade" id="modal-edit-misi{{ $misi->id }}">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Data Misi Dinas</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ url('admin/visi-misi', $misi->id) }}/update-misi"
                                                            method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">

                                                                @csrf
                                                                @method('PUT')
                                                                <div class="card-body">

                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label">Title Misi
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control"
                                                                                name="title"
                                                                                value="{{ $misi->title }}">
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group row">
                                                                        <label
                                                                            class="col-sm-3 col-form-label">Deskripsi</label>

                                                                        <div class="col-sm-9">
                                                                           <textarea name="deskripsi" class="summernote">{{ $misi->deskripsi }}</textarea>                                                                        </div>
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
        </div>
    </div>


    <div class="modal fade" id="modal-lg-visi">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Visi Dinas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/visi-misi/store-visi') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title Visi"
                                        name="title">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea name="deskripsi" class="summernote"></textarea>
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


    <div class="modal fade" id="modal-lg-misi">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Misi Dinas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/visi-misi/store-misi') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title Misi"
                                        name="title">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea name="deskripsi" class="summernote"></textarea>
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
