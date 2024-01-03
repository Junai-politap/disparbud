<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="admin/agenda" />
                        <h3 class="card-title" style="font-family: bold">
                            <h2 class="text-center">Edit Data Agenda</h2></h3>
                    </div>
                    <form action="{{ url('admin/agenda', $agenda->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Title Agenda</label>
                                <input type="text" class="form-control col-md-10" name="title" value="{{ $agenda->title }}">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Nama Bulan</label>

                                <select name="nama_bulan" class="col-md-10 form-control">
                                    <option value="">Pilih Nama Bulan</option>
                                    <option value="Januari" @if ($agenda->nama_bulan == 'Januari') selected @endif> Januari</option>
                                    <option value="Februari" @if ($agenda->nama_bulan == 'Februari') selected @endif>Februari</option>
                                    <option value="Maret" @if ($agenda->nama_bulan == 'Maret') selected @endif>Maret</option>
                                    <option value="April" @if ($agenda->nama_bulan == 'April') selected @endif>April</option>
                                    <option value="Mei" @if ($agenda->nama_bulan == 'Mei') selected @endif>Mei</option>
                                    <option value="Juni" @if ($agenda->nama_bulan == 'Juni') selected @endif>Juni</option>
                                    <option value="Juli" @if ($agenda->nama_bulan == 'Juli') selected @endif>Juli</option>
                                    <option value="Agustus" @if ($agenda->nama_bulan == 'Agustus') selected @endif>Agustus</option>
                                    <option value="September" @if ($agenda->nama_bulan == 'September') selected @endif>September</option>
                                    <option value="Oktober" @if ($agenda->nama_bulan == 'Oktober') selected @endif>Oktober</option>
                                    <option value="Nopember" @if ($agenda->nama_bulan == 'Nopember') selected @endif>Nopember</option>
                                    <option value="Desember" @if ($agenda->nama_bulan == 'Desember') selected @endif>Desember</option>
                                </select>


                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Tanggal Agenda</label>
                                <input type="date" class="form-control col-md-10" name="tanggal_agenda"
                                    value="{{ $agenda->tanggal_agenda }}">

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Deskripsi Agenda</label>
                                <div class="col-md-10">
                                    <textarea name="text" class="summernote">{{ $agenda->text }}</textarea>
                                </div>

                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Poto Agenda</label>
                                <div class="col-md-6">
                                    <img class="profile-user-img img-fluid circle" src="{{ url("public/$agenda->poto") }}"
                                style="width:100%">>
                                </div>
                                <input type="file" class="form-control col-md-4" name="poto"
                                    accept=".jpg, .png, .jpeg" value="{{ $agenda->poto }}">

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