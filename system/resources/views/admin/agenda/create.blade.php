<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="font-family: bold">Tambah Data Agenda</h3>
                    </div>
                    <form action="{{ url('admin/agenda') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Title Agenda</label>
                                <input type="text" class="form-control col-md-10" name="title"
                                    placeholder="Title Agenda">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Nama Bulan</label>

                                <select name="nama_bulan" class="col-md-10 form-control">
                                    <option value="">Pilih Nama Bulan</option>
                                    <option value="Januari"> Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="Mei">Mei</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="Nopember">Nopember</option>
                                    <option value="Desember">Desember</option>
                                </select>


                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Tanggal Agenda</label>
                                <input type="date" class="form-control col-md-10" name="tanggal_agenda"
                                    placeholder="Tanggal Agenda">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Deskripsi Agenda</label>
                                <div class="col-md-10">
                                    <textarea name="text" class="summernote"></textarea>
                                </div>

                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Poto Agenda</label>
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
