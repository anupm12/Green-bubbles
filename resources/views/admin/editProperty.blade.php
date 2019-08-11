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
                        <h1 class="h3 mb-0 text-gray-800">Edit Property</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                       <div class="col-md-12">

                        <form action="{{ route('updateProperty',['id' => $property->id]) }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                {{-- image --}}
                                <div class="flex-column align-items-center d-flex">
                                        <div class="upload-image"
                                            onclick="document.getElementById('file-upload').click()"
                                            style="
                                            cursor: pointer;
                                            height: 150px;
                                            width: 200px;
                                            "
                                        >
                                        @php
                                            $image = $property->image;
                                        @endphp
                                        <img src="<?php echo asset("storage/properties/$image")?>" height="100%" width="100%" id="preview-img">
                                        </div>
                                    </div>

                                    <input type="file" name="image" id="file-upload" style="display:none;">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Enter the property name" value="{{ $property->name }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <select id="location" class="form-control" name="location" value={{ $property->location }} required>
                                        @foreach ($location as $data)
                                            <option value="{{ $data->name }}" {{ ($data->name==$property->location)? 'selected':'' }}>{{ $data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                        <label for="type">Select the Room type</label>
                                        <select name="type" class="form-control" id="type" required>
                                          <option value="Meeting Room" {{ ('Meeting Room'==$property->type)? 'selected':'' }}>Meeting Room</option>
                                          <option value="Hot Desk" {{ ('Hot Desk'==$property->type)? 'selected':'' }}>Hot Desk</option>
                                          <option value="Conference Room" {{ ('Conference Room'==$property->type)? 'selected':'' }}>Conference Room</option>
                                          <option value="BoardRoom" {{ ('Meeting Room'==$property->type)? 'selected':'' }}>BoardRoom</option>
                                          <option value="Interview Room" {{ ('Interview Room'==$property->type)? 'selected':'' }}>Interview Room</option>
                                          <option value="Training Room" {{ ('Training Room'==$property->type)? 'selected':'' }}>Training Room</option>
                                          <option value="Creative Room" {{ ('Creative Room'==$property->type)? 'selected':'' }}>Creative Room</option>
                                          <option value="Plug and Play" {{ ('Plug and Play'==$property->type)? 'selected':'' }}>Plug and Play</option>
                                        </select>
                                      </div>

                                <div class="form-group">
                                    <label for="capacity">Capacity</label>
                                <input class="form-control" type="number" id="capacity" name="capacity" value="{{ $property->capacity }}" placeholder="Enter the capacity" required>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                <textarea id="address" rows="5" name="address" class="form-control" required>{{ $property->address }}</textarea>
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
        <script src="{{ asset('js/upload.js') }}"></script>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script>
            function readURL(input){
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                    $('#preview-img').removeAttr( 'style' );
                    $('#preview-img').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#file-upload').change(function(){
                readURL(this);
            });
        </script>

</body>

</html>
