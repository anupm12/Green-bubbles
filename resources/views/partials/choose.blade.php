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

<body onload="getDate()">
    @include('partials.navbar')

    <section>
        <div class="comtainer">
            <div class="row mr-0">
                <div class="col-md-12">
                    <h2 class="search-heading">Make a booking</h2>
                </div>
            </div>


            <div class="row pt-3">
                <div class="col-md-6 link-section">
                    <div class="link-section-btn">
                        <a class="btn btn-link find-btn active" href="#" role="button">Find</a>
                        <a class="btn btn-link choose-btn" href="#" role="button">Choose</a>
                        <a class="btn btn-link payment-btn" href="#" role="button">Payment</a>
                    </div>
                </div>
            </div>

        </div>
        
    </section>

</body>
@include('partials.jsfile')
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</html>
