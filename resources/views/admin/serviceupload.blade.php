
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
                                <h4 class="mb-0 font-size-18">Service Upload</h4>
                                

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('adminservices') }}">Service</a></li>
                                        <li class="breadcrumb-item active">Upload</li>
                                    </ol>
                                </div>
                                
                            </div>
                            
                            <br>
                            
                        </div>
                    </div>     
                    <!-- end page title -->

                     
    
                        
    
                        
    
                    <div class="container-fluid">

                        <form action="{{route('adminservicecreate')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                            <div class="form-group">
                         
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-body">
                                    
                                                    <h4 class="card-title">Servce icon Upload</h4>
                                                    <p class="card-subtitle mb-4">3633px - 1937px</p>
                
                                                    <input name="ServiceImg1" type="file" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="jpeg jpg png" />
                                    
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div>

                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-body">
                                    
                                                    <h4 class="card-title">Servce Image Upload</h4>
                                                    <p class="card-subtitle mb-4">3633px - 1937px</p>
                
                                                    <input name="ServiceImg2" type="file" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="jpeg jpg png" />
                                    
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div>
                                    </div>
                                 
                                        
                                
                            
                                
                            
                                <br>
                                <label for="simpleinput">Service Name</label>
                                <input name="ServiceText1" type="text" id="simpleinput" class="form-control" placeholder="Headline">

                                                <br>
                                                <label> Long Text </label>
                                                <textarea name="ServiceText2" class="form-control" id="body" placeholder="Enter the Description"></textarea>
                                               <br>

                                              

                                           
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                          
                             
                            </div>
                        </form>
                
                        <!-- end row-->
    
                    </div> <!-- container-fluid -->
                    
                </div> <!-- container-fluid -->
                
            </div>
               

            <!-- End Page-content -->







@endsection