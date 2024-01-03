<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                            <span class="fa fa-plus"></span> Tambah Poto
                        </button>
                        <h4 class="card-title">
                            <strong> Data Galeri Poto</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Label</th>
                                    <th class="text-center">Poto</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_galeri_poto as $galeri_poto)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-toggle="modal"
                                                data-target="#modal-edit{{ $galeri_poto->id }}">
                                                <span class="fa fa-edit"></span>
                                            </button>
                                                <x-button.delete-button url="admin/galeri-poto" id="{{ $galeri_poto->id }}" />
                                            </div>
                                        </td>
                                        
                                        <td class="text-center">{{ $galeri_poto->judul }}</td>
                                        <td class="text-center" style="width: 20%">
                                            <img src="{{ url("public/$galeri_poto->poto") }}" style="width:70%; height:30%;" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-edit{{ $galeri_poto->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Galeri Poto</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('admin/galeri-poto', $galeri_poto->id) }}" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">

                                                        @csrf
                                                        @method('PUT')
                                                        <div class="card-body">

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Judul Poto</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="judul" value="{{ $galeri_poto->judul }}">
                                                                </div>
                                                            </div>
                                
                                
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Poto</label>
                                                                <div class="col-md-4">
                                                                    <img src="{{ url("public/$galeri_poto->poto") }}" style="width:50%; ">
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <input type="file" class="form-control" name="poto" accept=".jpg, .png, .jpeg" value="{{ $galeri_poto->poto }}">
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
                    <h4 class="modal-title">Tambah Data Galeri Poto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/galeri-poto') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul poto</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Judul poto"
                                        name="judul">
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