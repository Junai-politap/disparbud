<x-app>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <x-button.back-button url="admin/sarana" />
                        <h3 class="card-title" style="font-family: bold">
                            <h2 class="text-center">Edit Data Sarana</h2></h3>
                    </div>
                    <form action="{{ url('admin/sarana', $sarana->id) }}" method="POST" enctype="multipart/form-data">
                        @method("PUT")
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Title Sarana</label>
                                <input type="text" class="form-control col-md-10" name="title" value="{{ $sarana->title }}">

                            </div>


                         
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label"> Poto sarana</label>
                                <div class="col-md-6">
                                    <img class="profile-user-img img-fluid circle" src="{{ url("public/$sarana->poto") }}"
                                style="width:50%">
                                </div>
                                <input type="file" class="form-control col-md-4" name="poto"
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