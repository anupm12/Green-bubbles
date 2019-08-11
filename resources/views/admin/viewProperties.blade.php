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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
                        <h1 class="h3 mb-0 text-gray-800">View Properties</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                       <div class="col-md-12">
                            <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Capacity</th>
                                            <th>Location</th>
                                            <th>Address</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($properties as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->capacity }}</td>
                                                <td>{{ $item->location }}</td>
                                                <td>{{ substr($item->address,0,10)."..." }}</td>
                                                <td><a href="{{ route('editProperty', ['id' => $item->id]) }}" class="btn btn-primary"><ion-icon name="create"></ion-icon></a></td>
                                                <td><a href="{{ route('deleteProperty', ['id' => $item->id]) }}" class="btn btn-danger"><ion-icon name="trash"></ion-icon></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
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
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "pagingType": "full_numbers"
            } );
        } );
        </script>
</body>

</html>
