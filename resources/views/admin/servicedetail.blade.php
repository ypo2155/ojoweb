@extends('admin.layout.app')
@section('admincontent')


  <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                
                <div class="container-fluid ">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Service</h4>
                                

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('adminservices')}}">Service</a></li>
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ol>
                                </div>
                                
                            </div>
                            <div>
                                <a class="btn btn-primary btn-sm" href="{{ url()->previous() }}">Back</a>
                            </div>
                            <br>
                            
                        </div>
                    </div>     
                    <!-- end page title -->

                 

                            <!-- Simple card -->
                            <div>
                                <div class="row">
                                    <div class="col-6">
                                        <img style="width: 300px;height: auto;" class="card-img-top" src="{{ asset('/storage/image/service/' . $service->ServiceImg1) }}" alt="Card image cap">
                                    </div>
                                    <div class="col-6">
                                        <img style="width: 300px;height: auto;" class="card-img-top" src="{{ asset('/storage/image/service/' . $service->ServiceImg2) }}" alt="Card image cap">
                                    </div>
                                </div>
                
                                <div class="card-body">
                                    <h4>{{ $service->ServiceText1 }}
                                    </h4>
                                  
                                   
                                        <p class="card-text">
                                            {!! $service->ServiceText2 !!}
                                        </p>
                                </div>
                            </div>


                </div> <!-- container-fluid -->
                
            </div>




@endsection