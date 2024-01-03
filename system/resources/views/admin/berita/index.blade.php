<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/berita/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Data Berita Dinas</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Penulis</th>
                                    <th class="text-center">Tanggal Berita</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_berita as $berita)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/berita" id="{{ $berita->id }}" />
                                                <x-button.edit-button url="admin/berita" id="{{ $berita->id }}" />
                                                <x-button.delete-button url="admin/berita" id="{{ $berita->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $berita->title }}</td>
                                        <td class="text-center">{{ $berita->penulis }}</td>
                                        <td class="text-center">{{ date("d-m-Y", strtotime($berita->tanggal_berita)) }}</td>
                                       
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>