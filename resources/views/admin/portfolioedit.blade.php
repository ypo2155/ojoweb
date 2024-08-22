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
                                <h4 class="mb-0 font-size-18">Portfolio Edit</h4>
                                

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('adminportfolio') }}">Portfolio</a></li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                
                            </div>
                            
                            <br>
                            
                        </div>
                    </div>     
                    <!-- end page title -->

                     
    
                        
    
                        
    
                    <div class="container-fluid">

                        <form action="{{ route('adminportfolioupdate' , $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                            <div class="form-group">
                         
                                    
                                 
                                        <div class="card">
                                            <div class="card-body">
                                
                                                <h4 class="card-title">Portfolio Image Edit</h4>
                                                <p class="card-subtitle mb-4">3633px - 1937px</p>
            
                                                <input name="PortImg" type="file" data-default-file="{{ asset('/storage/image/portfolio/' . $portfolio->PortImg) }}" class="dropify" data-max-file-size="2M" data-allowed-file-extensions="jpeg jpg png" />
                                
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                
                            
                                
                            
                                <br>
                                <label for="simpleinput">Brand Name</label>
                                <input value="{{ $portfolio->PortText1 }}" name="PortText1" type="text" id="simpleinput" class="form-control" placeholder="Headline">

                                                <br>
                                <label for="simpleinput">Category</label>
                                <select name="PortText2"  class="form-control" id="exampleFormControlSelect1">
                                    
                                    @if ($portfolio->PortText2  == "Social Media")
                                    <option>{{ $portfolio->PortText2 }}</option>
                                    <option>Logo</option>
                                    @else 
                                    
                                    <option>{{ $portfolio->PortText2 }}</option>
                                    <option>Social Media</option>
                                    @endif
                                   
                                </select>

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