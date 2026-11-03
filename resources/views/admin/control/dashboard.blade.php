@extends('admin.layout.side-nav')

@section('content')
 <!-- Dashboard Content -->
        <div class="container-fluid px-4">
            <h2 class="mb-4 text-dark fw-bold">Dashboard</h2>
            
            <!-- Sample content to test scrolling -->
            <div class="row">

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="card-title text-muted mb-2">Total Users</h6>
                                    <h3 class="mb-0">{{ $users }}</h3>
                                </div>
                                <div class="ms-3">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="card-title text-muted mb-2">Total Blog</h6>
                                    <h3 class="mb-0">{{ $blog }}</h3>
                                </div>
                                <div class="ms-3">
                                  
                                    <i class="fa-solid fa-square-rss fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h6 class="card-title text-muted mb-2">Total Form Data</h6>
                                    <h3 class="mb-0">{{ $form }}</h3>
                                </div>
                                <div class="ms-3">
                                 
                                    <i class="fa-solid fa-table fa-2x text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               
            </div>

        </div>
    </div>

@endsection