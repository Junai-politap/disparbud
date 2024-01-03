<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/sarana/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Data Sarana Dinas</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Poto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_sarana as $sarana)
                                    <tr>
                                        <td class="text-center" style="width: 5%">{{ $loop->iteration }}</td>
                                        <td class="text-center" style="width: 20%">
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/sarana" id="{{ $sarana->id }}" />
                                                <x-button.edit-button url="admin/sarana" id="{{ $sarana->id }}" />
                                                <x-button.delete-button url="admin/sarana" id="{{ $sarana->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $sarana->title }}</td>
                                        <td class="text-center" style="width: 30%">
                                            <img src="{{ url("public/$sarana->poto") }}" style="width:50%;" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </td>
                                       
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