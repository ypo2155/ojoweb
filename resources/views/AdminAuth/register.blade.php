<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>OJO - Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.png') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div>
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            @if (session('errorregister'))
                                <div class="alert alert-danger">
                                    {{ session('errorregister') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center mb-5">
                                            <a href="{{ route('adminregister') }}" class="text-dark font-size-22 font-family-secondary">
                                                <img style="width: 150px;height:auto;"
                                                    src="{{ asset('assets/images/logo/logo.png') }}" />
                                            </a>
                                        </div>
                                        <h1 class="h5 mb-1">Create an Account!</h1>
                                        <p class="text-muted mb-4">Don't have an account? Create your own account, it
                                            takes less than a minute</p>
                                        <form action="{{ route('adminregister.post') }}" method="POST" class="user">
                                            @csrf
                                            <div class="form-group">

                                                <input name="name" type="text"
                                                    class="form-control form-control-user" id="exampleFirstName"
                                                    placeholder="Name">


                                            </div>
                                            <div class="form-group">
                                                <input name="email" type="email"
                                                    class="form-control form-control-user" id="exampleInputEmail"
                                                    placeholder="Email Address">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <input name="password" type="password"
                                                        class="form-control form-control-user" id="exampleInputPassword"
                                                        placeholder="Password">
                                                </div>

                                            </div>
                                            <button type="submit"
                                                class="btn btn-success btn-block waves-effect waves-light"> Register
                                                Account </button>



                                        </form>


                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/simplebar.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>

</html>