<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="admin/berita" />
                        <h3 class="card-title" style="font-family: bold">
                            <h2 class="text-center">Edit Data Berita</h2></h3>
                    </div>
                    <form action="{{ url('admin/berita', $berita->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Judul Berita</label>
                                <input type="text" class="form-control col-md-10" name="title" value="{{ $berita->title }}">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Penulis Berita</label>
                                <input type="text" class="form-control col-md-10" name="penulis"
                                    value="{{ $berita->penulis }}">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Tanggal Berita</label>
                                <input type="date" class="form-control col-md-10" name="tanggal_berita"
                                    value="{{ $berita->tanggal_berita }}">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Deskripsi berita</label>
                                <div class="col-md-10">
                                    <textarea name="deskripsi" class="summernote">{{ $berita->deskripsi }}</textarea>
                                </div>

                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Poto Berita</label>
                                <div class="col-md-6">
                                    <img class="profile-user-img img-fluid circle" src="{{ url("public/$berita->poto") }}"
                                style="width:100%">>
                                </div>
                                <input type="file" class="form-control col-md-4" name="poto"
                                    accept=".jpg, .png, .jpeg" value="{{ $berita->poto }}">

                            </div>

                            <div class="footer mt-5">

                                <button class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>