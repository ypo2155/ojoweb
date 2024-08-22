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
                                <h4 class="mb-0 font-size-18">New Edit</h4>
                                

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('adminnews') }}">New</a></li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                
                            </div>
                            
                            <br>
                            
                        </div>
                    </div>     
                    <!-- end page title -->

                     
    
                        
    
                        
    
                    <div class="container-fluid">

                        <form action="{{route('adminnewupdate', $new->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                            <div class="form-group">
                                <div class="card">
                                    <div class="card-body">
                        
                                        <h4 class="card-title">New Image Upload</h4>
                                        <p class="card-subtitle mb-4">800px - 800px</p>
    
                                        <input name="NewImg" type="file" data-default-file="{{ asset('/storage/image/new/' . $new->NewImg) }}"  class="dropify" data-max-file-size="2M" data-allowed-file-extensions="jpeg jpg png" />
                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            
                                <br>
                                <label for="simpleinput">New Headline</label>
                                <input value="{{ $new->NewText1 }}" name="NewText1" type="text" id="simpleinput" class="form-control" placeholder="Headline">
                         

                                                <br>

                                                <label> Long Text </label>
                                                <textarea name="NewText2" class="form-control" id="body" placeholder="Enter the Description">{!! $new->NewText2 !!}</textarea>
                                               <br>
                                         
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