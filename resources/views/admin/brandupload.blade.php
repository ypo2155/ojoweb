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
                            <h4 class="mb-0 font-size-18">Clients Upload</h4>


                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('adminclients') }}">Clients</a></li>
                                    <li class="breadcrumb-item active">Upload</li>
                                </ol>
                            </div>

                        </div>

                        <br>

                    </div>
                </div>
                <!-- end page title -->







                <div class="container-fluid">

                    <form action="{{route('adminclientcreate')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">



                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Clients Image Upload</h4>
                                    <p class="card-subtitle mb-4">3633px - 1937px</p>

                                    <input name="BrandImg" type="file" class="dropify" data-max-file-size="2M"
                                        data-allowed-file-extensions="jpeg jpg png" />

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->




                            <br>
                            <label for="simpleinput">Client Name</label>
                            <input name="BrandText" type="text" id="simpleinput" class="form-control"
                                placeholder="Headline">

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
