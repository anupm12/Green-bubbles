<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- customs tyles --}}

    <link rel="stylesheet" href="{{ asset('css/adminLayout.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Sarala&display=swap');
        body{
            font-family: 'Sarala', sans-serif;
            font-size: 1rem;
        }
    </style>
</head>

<body>
        @include('sweet::alert')
    <!-- Page Wrapper -->
    <div id="wrapper">

        {{-- side nav included --}}
        @include('admin/partials/sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                {{-- top nav included --}}
                @include('admin/partials/topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Location</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                       <div class="col-md-12">

                        <form action="{{ route('storeLocation') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input class="form-control" type="text" name="location" id="location">
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </form>

                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->


                {{-- footer partial included below --}}
                @include('admin/partials/footer')


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        {{-- logout modal --}}
        @include('admin/partials/logoutModal')

        {{-- all cdn --}}
        @include('partials/jsfile')

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/adminLayout.min.js') }}"></script>

</body>

</html>
