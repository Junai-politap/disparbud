<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="font-family: bold">Tambah Data Agenda</h3>
                    </div>
                    <form action="{{ url('admin/berita') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Judul Berita</label>
                                <input type="text" class="form-control col-md-10" name="title"
                                    placeholder="Judul Berita">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Penulis Berita</label>
                                <input type="text" class="form-control col-md-10" name="penulis"
                                    placeholder="Penulis Berita">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Tanggal Berita</label>
                                <input type="date" class="form-control col-md-10" name="tanggal_berita"
                                    placeholder="Tanggal Berita">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Deskripsi Berita</label>
                                <div class="col-md-10">
                                    <textarea name="deskripsi" class="summernote"></textarea>
                                </div>

                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Poto Berita</label>
                                <input type="file" class="form-control col-md-10" name="poto"
                                    accept=".jpg, .png, .jpeg">

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
