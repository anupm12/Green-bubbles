<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Green Bubbles</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="css/choose.css">
</head>

<body>
    @include('partials.navbar')

    <section>
        <div class="comtainer">
            <div class="row mr-0">
                <div class="col-md-6">
                    <h2 class="choose-heading">Make a booking</h2>
                </div>
            </div>


            <div class="row pt-3 mr-0">
                <div class="col-md-6">
                    <div class="link-section">
                        <a class="btn btn-link find-btn" href="#" role="button">Find</a>
                        <a class="btn btn-link choose-btn active" href="#" role="button">Choose</a>
                        <a class="btn btn-link payment-btn" href="#" role="button">Payment</a>
                    </div>
                </div>
            </div>

            <div class="row mr-0 mt-2 go-back-section">
                <div class="col-md-6">
                    <img class="no-vector pl-3" src="{{ url('img/vector/back.svg') }}" alt="" name="back">
                    <a class="btn btn-link go-back-btn pl-0" href="#" role="button" for="back">Back</a>
                </div>
            </div>

        </div>

    </section>

    <section class="pt-4 container">
        <div class="row">

            <div class="col-md-4">
                <img class="img-fluid property-image" src="{{ url('img/vector/sample.svg') }}" alt="Card image cap">
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mumbai chembur</h5>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ex quis iusto dolore earum distinctio, corporis quo quibusdam quidem </p>
                        <h5 class="card-title">Reception open working days:45:45-45:45</h5>
                        <h5 class="card-title">Mumbai chembur</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>


    </section>



</body>
@include('partials.jsfile')
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>
