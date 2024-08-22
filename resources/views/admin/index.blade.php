@extends('admin.layout.app')


@section('admincontent')


 <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">


                @if (session('successlogin'))
                <div class="alert alert-success">
                    {{ session('successlogin') }}
                    <button type="button" class="close" data-dismiss="alert"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            
            
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="">OJO</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        
    
                        <div class="col-xl-4">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="card-title">Portfolio</h4>
    
                                    <div class="text-center">

                                        <i style="font-size: 40px" class="mdi mdi-web"></i> <h1>{{ $portfolios->count() }}</h1>
                                     
                                 
                                     
    
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-4">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="card-title">Service</h4>
    
                                    <div class="text-center">

                                        <i style="font-size: 40px" class="mdi mdi-code-braces"></i> <h1>{{ $services->count() }} </h1>
                                     
                                 
                                     
    
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-4">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="card-title">Blog</h4>
    
                                    <div class="text-center">

                                        <i style="font-size: 40px" class="mdi mdi-blogger"></i> <h1>{{ $news->count() }}</h1>
                                     
                                 
                                     
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- end row -->


                  

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

          
@endsection
