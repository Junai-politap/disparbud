<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
                            <span class="fa fa-plus"></span> Tambah Galeri Video
                        </button>
                        <h4 class="card-title">
                            <strong> Data Galeri Video</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Label</th>
                                    <th class="text-center">Video</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_galeri_video as $galeri_video)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button class="btn btn-warning" data-toggle="modal"
                                                data-target="#modal-edit{{ $galeri_video->id }}">
                                                <span class="fa fa-edit"></span>
                                            </button>
                                                <x-button.delete-button url="admin/galeri-video" id="{{ $galeri_video->id }}" />
                                            </div>
                                        </td>
                                        
                                        <td class="text-center">{{ $galeri_video->judul }}</td>
                                        <td class="text-center" style="width: 20%">
                                            <iframe width="1169" height="550" src="{{ $galeri_video->link }}" frameborder="0"></iframe>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-edit{{ $galeri_video->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Galeri Video</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('admin/galeri-video', $galeri_video->id) }}" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">

                                                        @csrf
                                                        @method('PUT')
                                                        <div class="card-body">

                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Judul Video</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="judul" value="{{ $galeri_video->judul }}">
                                                                </div>
                                                            </div>
                                
                                
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Link Video</label>
                                                               
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control" name="link" value="{{ $galeri_video->link }}">
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
                    <h4 class="modal-title">Tambah Data Galeri Video</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/galeri-video') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul Video</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Judul Video"
                                        name="judul">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Link Video</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="link">
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