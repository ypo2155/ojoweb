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
                                <h4 class="mb-0 font-size-18">Admin Profile</h4>
                                

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('adminindex')}}">ojo</a></li>
                                        <li class="breadcrumb-item active">Admin Profile</li>
                                    </ol>
                                </div>
                                
                            </div>
                            
                            <br>
                            
                        </div>
                    </div>     
                    <!-- end page title -->

                 

                            <!-- Simple card -->
                            <div style="padding-left: 30px;" class="">
                                <img style="width: 200px;height: auto;border-radius:50%;" class="card-img-top" src="{{ asset('assets/images/logo/logo.png') }}">
                                <br><br>
                                <div style="padding-left: 20px;" class="card-body">
                                    <h4>
                                       {{ Auth::user()->name }}
                                    </h4>
                                    <p></p>
                                    <p style="color: #20429c;font-size: medium;" class="card-text"></p>
                                    
                                    <p class="card-text"></p>
                                </div>
                            </div>

                     
    
                        
    
                        
    
                       
                    
                </div> <!-- container-fluid -->
                
            </div>


@endsection