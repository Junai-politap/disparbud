<x-app>
    <div class="content">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="text-center">
                                    <strong>
                                        Selamt Datang {{ Auth::guard('admin')->user()->nama }}
                                    </strong> 
                                </h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
