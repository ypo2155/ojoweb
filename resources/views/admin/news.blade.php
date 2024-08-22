@extends('admin.layout.app')
@section('admincontent')




 <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                @if (session('success'))
                  <div class="alert alert-success">
                  {{ session('success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                 </button>
                  </div>
            @endif
            @if (session('updatesuccess'))
                  <div class="alert alert-success">
                  {{ session('updatesuccess') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                 </button>
                  </div>
            @endif
            @if (session('deletesuccess'))
                  <div class="alert alert-success">
                  {{ session('deletesuccess') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                 </button>
                  </div>
            @endif
                <div class="container-fluid ">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Blog</h4>
                                

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('adminnews') }}">blog</a></li>
                                        <li class="breadcrumb-item active">blog</li>
                                    </ol>
                                </div>
                                
                            </div>
                            <div>
                                <a class="btn btn-primary btn" href="{{ route('adminnewupload') }}">Add</a>
                            </div>
                            <br>
                            
                        </div>
                    </div>     
                    <!-- end page title -->

                     <div class="row">
                        @foreach($news as $new)
                        <div class="col-md-6 col-xl-3">

                            <!-- Simple card -->
                            <div class="card">
                                <img class="card-img-top img-fluid" src="{{ asset('/storage/image/new/' . $new->NewImg) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $new->NewText1 }}</h5>
                                    <p class="card-text">{!! Str::limit($new->NewText2, 100) !!}</p>
                                    <a href="{{ route('adminnewedit' , $new->id) }}" class="btn btn-primary waves-effect waves-light">Edit</a>
                                    <a href="{{ route('adminnewdetail', $new->slug) }}" class="btn btn-light waves-effect waves-light">View</a>
                                    <a href="#" class="btn btn-danger waves-effect waves-light"  data-toggle="modal" data-target="#exampleModal">Delete</a>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete!</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure to delete this?
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('adminnewdelete' , $new->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- end col -->
                      
                        @endforeach
                        </div>
    
                        {{ $news->links('pagination::default') }}  
                </div> <!-- container-fluid -->
                
            </div>


@endsection