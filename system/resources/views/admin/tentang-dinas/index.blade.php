<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                            <span class="fa fa-plus"></span> Tambah Tentang Dinas
                        </button>
                        <h4 class="card-title">
                            <strong> Data Tentang Dinas</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama Dinas</th>
                                    <th class="text-center">Poto</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_tentang_dinas as $tentang_dinas)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-toggle="modal"
                                                data-target="#modal-edit{{ $tentang_dinas->id }}">
                                                <span class="fa fa-edit"></span>
                                            </button>
                                                <x-button.delete-button url="admin/tentang-dinas" id="{{ $tentang_dinas->id }}" />
                                            </div>
                                        </td>
                                        
                                        <td class="">{{ $tentang_dinas->nama_dinas }}</td>
                                        <td class="text-center" style="width: 20%">
                                            <img src="{{ url("public/$tentang_dinas->poto") }}" style="width:70%; height:30%;" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-edit{{ $tentang_dinas->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Tentang Dinas</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('admin/tentang-dinas', $tentang_dinas->id) }}" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">

                                                        @csrf
                                                        @method('PUT')
                                                        <div class="card-body">

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama Dinas</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        name="nama_dinas" value="{{ $tentang_dinas->nama_dinas }}">
                                                                </div>
                                                            </div>
                                
                                                            <div class="form-group row">
                                                                <label class="col-md-3 col-form-label"> Deskripsi Dinas</label>
                                                                <div class="col-md-9">
                                                                    <textarea name="deskripsi" class="summernote">{{ $tentang_dinas->deskripsi }}</textarea>
                                                                </div>
                                
                                                            </div>
                                
                                
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Poto</label>
                                                                <div class="col-md-4">
                                                                    <img src="{{ url("public/$tentang_dinas->poto") }}" style="width:50%; ">
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg" value="{{ $tentang_dinas->poto }}">
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
                    <h4 class="modal-title">Tambah Data Tentang Dinas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/tentang-dinas') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Dinas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Dinas"
                                        name="nama_dinas">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"> Deskripsi Dinas</label>
                                <div class="col-md-9">
                                    <textarea name="deskripsi" class="summernote"></textarea>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Poto</label>
                                <div class="col-sm-9">
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