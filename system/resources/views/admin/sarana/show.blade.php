<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">   
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/sarana') }}" />
                        <a href="{{ url("admin/sarana/$sarana->id") }}/edit" class="btn btn-primary btn-sm float-right"><span class="fa fa-edit"></span> Edit Data</a>
                    </div>
                    <div class="card-body box-profile row">
                        <h3 class="profile-username text-left col-md-6">
                            {{ $sarana->title }}
                        </h3>
                        <h3 class="profile-username text-right col-md-6">
                            {{ date("d-m-Y", strtotime($sarana->tanggal_sarana)) }}
                        </h3>
                        <div class="text-center">
                            <img class="profile-user-img img-fluid circle" src="{{ url("public/$sarana->poto") }}"
                                style="width:100%">
                        </div>

                       
                        
                    </div>
                    
                </div>
                
            </div>
            <div class="col-md-2"></div>
        </div>
        
    </div>
</x-app>