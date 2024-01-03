<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">   
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <x-button.back-button url="{{ url('admin/berita') }}" />
                        <a href="{{ url("admin/berita/$berita->id") }}/edit" class="btn btn-primary btn-sm float-right"><span class="fa fa-edit"></span> Edit Data</a>
                    </div>
                    <div class="card-body box-profile row">
                        <h3 class="profile-username text-left col-md-6">
                            {{ $berita->title }}
                        </h3>
                        <h3 class="profile-username text-right col-md-6">
                            {{ date("d-m-Y", strtotime($berita->tanggal_berita)) }}
                        </h3>
                        <div class="text-center">
                            <img class="profile-user-img img-fluid circle" src="{{ url("public/$berita->poto") }}"
                                style="width:100%">
                        </div>

                        <h3 class="profile-username text-center mt-2">
                            {!! nl2br ($berita->deskripsi) !!}
                        </h3>

                        
                    </div>
                    
                </div>
                

                
                {{-- <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    
                    <div class="card-body">
                        

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                        <p class="text-muted">{{ $berita->alamat }}</p>

                        <hr>

                        <strong><i class="fas fa-phone-alt mr-1"></i> No Telp</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">{{ $berita->no_telp }}</span>
                        </p>
                    </div>
                    
                </div> --}}
                
            </div>
            <div class="col-md-2"></div>
        </div>
        
    </div>
</x-app>