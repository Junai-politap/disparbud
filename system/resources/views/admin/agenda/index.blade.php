<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/agenda/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Data Agenda Dinas</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Bulan</th>
                                    <th class="text-center">Tanggal Agenda</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_agenda as $agenda)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/agenda" id="{{ $agenda->id }}" />
                                                <x-button.edit-button url="admin/agenda" id="{{ $agenda->id }}" />
                                                <x-button.delete-button url="admin/agenda" id="{{ $agenda->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $agenda->title }}</td>
                                        <td class="text-center">{{ $agenda->nama_bulan }}</td>
                                        <td class="text-center">{{ date("d-m-Y", strtotime($agenda->tanggal_agenda)) }}</td>
                                       
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