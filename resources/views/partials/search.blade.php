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
    <link rel="stylesheet" href="css/search.css">
</head>

<body onload="getDate()">
    @include('partials.navbar')

    <section>
        <div class="container">
            <div class="row mr-0">
                <div class="col-md-12">
                    <h2 class="search-heading">Make a booking</h2>
                </div>
            </div>


            <div class="row pt-3 mr-0">

                <div class="col-md-6 link-section">
      <a class="btn btn-link find-btn active" href="#" role="button">Find</a>
                        <a class="btn btn-link choose-btn" href="#" role="button">Choose</a>
                        <a class="btn btn-link payment-btn" href="#" role="button">Payment</a>
              
            </div>

        </div>

    </section>

    <section class="pt-1">
        <div class="container">
            <div class="row align-items-center">

                {{-- form --}}
                <div class="col-md-6">
                    <form action="" class="">

                        {{-- select --}}
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text icon-input">
                                    <ion-icon name="help"></ion-icon>
                                </div>
                            </div>
                            <select class="form-control input">
                                <option>Select</option>
                            </select>
                        </div>

                        {{-- location --}}
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text icon-input">
                                    <ion-icon name="pin"></ion-icon>
                                </div>
                            </div>
                            <select class="form-control input">
                                <option>Location</option>
                            </select>
                        </div>

                        {{-- date --}}
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text icon-input">
                                    <ion-icon name="calendar"></ion-icon>
                                </div>
                            </div>
                            <input type="date" id="date" class="form-control input" name="date">
                        </div>

                        {{-- time --}}
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6" style="margin-bottom: 0;">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text icon-input">
                                            <ion-icon name="time"></ion-icon>
                                        </div>
                                    </div>
                                    <select name="from" class="form-control input">
                                        <option value="0">12:00 am</option>
                                        <option value="1">1:00 am</option>
                                        <option value="2">2:00 am</option>
                                        <option value="3">3:00 am</option>
                                        <option value="4">4:00 am</option>
                                        <option value="5">5:00 am</option>
                                        <option value="6">6:00 am</option>
                                        <option value="7">7:00 am</option>
                                        <option value="8">8:00 am</option>
                                        <option value="9">9:00 am</option>
                                        <option value="10">10:00 am</option>
                                        <option value="11">11:00 am</option>
                                        <option value="12">12:00 pm</option>
                                        <option value="13">1:00 pm</option>
                                        <option value="14">2:00 pm</option>
                                        <option value="15">3:00 pm</option>
                                        <option value="16">4:00 pm</option>
                                        <option value="17">5:00 pm</option>
                                        <option value="18">6:00 pm</option>
                                        <option value="19">7:00 pm</option>
                                        <option value="20">8:00 pm</option>
                                        <option value="21">9:00 pm</option>
                                        <option value="22">10:00 pm</option>
                                        <option value="23">11:00 pm</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6" style="margin-bottom: 0;">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text icon-input">
                                            <ion-icon name="time"></ion-icon>
                                        </div>
                                    </div>
                                    <select name="to" class="form-control input">
                                        <option value="0">12:00 am</option>
                                        <option value="1">1:00 am</option>
                                        <option value="2">2:00 am</option>
                                        <option value="3">3:00 am</option>
                                        <option value="4">4:00 am</option>
                                        <option value="5">5:00 am</option>
                                        <option value="6">6:00 am</option>
                                        <option value="7">7:00 am</option>
                                        <option value="8">8:00 am</option>
                                        <option value="9">9:00 am</option>
                                        <option value="10">10:00 am</option>
                                        <option value="11">11:00 am</option>
                                        <option value="12">12:00 pm</option>
                                        <option value="13">1:00 pm</option>
                                        <option value="14">2:00 pm</option>
                                        <option value="15">3:00 pm</option>
                                        <option value="16">4:00 pm</option>
                                        <option value="17">5:00 pm</option>
                                        <option value="18">6:00 pm</option>
                                        <option value="19">7:00 pm</option>
                                        <option value="20">8:00 pm</option>
                                        <option value="21">9:00 pm</option>
                                        <option value="22">10:00 pm</option>
                                        <option value="23">11:00 pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        {{-- people --}}

                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text icon-input">
                                    <ion-icon name="person"></ion-icon>
                                </div>
                            </div>
                            <input type="text" id="date" class="form-control input" name="people"
                                placeholder="How many people?">
                        </div>

                        <button class="btn btn-search" type="submit">
                            <span class="d-flex align-items-center justify-content-center">
                                <span class="pr-3">
                                    <ion-icon name="search"></ion-icon>
                                </span>
                                Search
                            </span>
                        </button>
                    </form>
                </div>

                <div class="col-md-6">
                    <div class="hero-img">
                        <img class="no-vector" src="{{ url('img/vector/herosvg.svg') }}" alt="herosvg">
                    </div>
                </div>

            </div>
        </div>
    </section>

</body>
@include('partials.jsfile')
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script>
    function getDate() {
        console.log('date');
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd
        }

        if (mm < 10) {
            mm = '0' + mm
        }

        today = yyyy + '/' + mm + '/' + dd;
        console.log(today);
        document.getElementById("date").value = today;

    }

</script>

</html>
