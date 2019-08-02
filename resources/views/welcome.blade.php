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
    <link rel="stylesheet" href="css/homepage.css">
</head>

<body onload="getDate()">
    @include('partials.navbar')

    <section class="pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero-img">
                        <img class="no-vector" src="{{ url('img/vector/herosvg.svg') }}" alt="herosvg">
                    </div>
                </div>

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

            </div>
        </div>
    </section>


    {{-- into section --}}
    <section class="pt-5 intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pt-13">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    <p>Lorem ipsum dolor sit.</p>
                    <a href="" class="btn book-btn mt-5">Book</a>
                </div>
                <div class="col-md-6 pt-13">
                    <img class="no-vector" style="width:100%;" src="{{ url('img/vector/introsvg.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="pt-5 features">
        <div class="container">
            <h2>Features</h2>
            <div class="row pt-4">
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ url('img/vector/features/sunday.svg') }}">
                        <p>Open on Sundays</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ url('img/vector/features/meeting_room.svg') }}">
                        <p>Meeting Room</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ url('img/vector/features/hotdesk.svg') }}">
                        <p>Hot Desk</p>
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ url('img/vector/features/conference.svg') }}">
                        <p>Conference Room</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ url('img/vector/features/boardroom.svg') }}">
                        <p>BoardRoom</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ url('img/vector/features/interview.svg') }}">
                        <p>Interview Room</p>
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ url('img/vector/features/training.svg') }}">
                        <p>Training Room</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ url('img/vector/features/creative.svg') }}">
                        <p>Creative Room</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ url('img/vector/features/plugandplay.svg') }}">
                        <p>Plug and Play</p>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <section class="pt-5  pricing">
        <div class="blue-area pb-5">
            <div class="container">
                <h2 class="pt-2">Pricing</h2>
                <div class="row pt-3">
                    <div class="col-md-3 col-mobile">
                        <div class="card card-pricing">
                            <div class="card-body">
                                <p class="title-pricing">Hot Desks</p>
                                <img class="card-img" src="{{ url('img/vector/features/hotdesk.svg') }}">
                                <p class="pt-2 d-flex justify-content-center align-items-center">
                                    <span><img src="{{ url('img/vector/ruppe.svg')}}"></span>
                                    <span class="pl-2 price-number">79</span>
                                    <span class="hour">/hour*</span>
                                </p>

                                <ul class="lists">
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Seating for 1
                                    </li>
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Free WiFi
                                    </li>
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Tea/Coffee
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center align-item-center">
                                    <a href="#" class="btn mt-4 price-btn">
                                        <span>Book</span>
                                        <span class="pl-2"><ion-icon name="arrow-forward"></ion-icon></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-mobile">
                        <div class="card card-pricing">
                            <div class="card-body">
                                <p class="title-pricing">Meeting Room</p>
                                <img class="card-img" src="{{ url('img/vector/features/meeting_room.svg') }}">
                                <p class="pt-2 d-flex justify-content-center align-items-center">
                                    <span><img src="{{ url('img/vector/ruppe.svg')}}"></span>
                                    <span class="pl-2 price-number">339</span>
                                    <span class="hour">/hour*</span>
                                </p>

                                <ul class="lists">
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Seating for 1
                                    </li>
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Free WiFi
                                    </li>
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Tea/Coffee
                                    </li>
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Stationaries
                                    </li>
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Privacy guaranteed
                                    </li>
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Air-conditioned
                                    </li>
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Whiteboard
                                    </li>
                                    <li>
                                        <span>
                                            <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                        </span>
                                        Projector/LED display
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center align-item-center">
                                        <a href="#" class="btn mt-4 price-btn">
                                            <span>Book</span>
                                            <span class="pl-2"><ion-icon name="arrow-forward"></ion-icon></span>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-mobile">
                            <div class="card card-pricing">
                                <div class="card-body">
                                    <p class="title-pricing">Boardrooms</p>
                                    <img class="card-img" src="{{ url('img/vector/features/BoardRoom.svg') }}">
                                    <p class="pt-2 d-flex justify-content-center align-items-center">
                                        <span><img src="{{ url('img/vector/ruppe.svg')}}"></span>
                                        <span class="pl-2 price-number">539</span>
                                        <span class="hour">/hour*</span>
                                    </p>

                                    <ul class="lists">
                                        <li>
                                            <span>
                                                <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                            </span>
                                            Seating for 1
                                        </li>
                                        <li>
                                            <span>
                                                <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                            </span>
                                            Free WiFi
                                        </li>
                                        <li>
                                            <span>
                                                <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                            </span>
                                            Tea/Coffee
                                        </li>
                                        <li>
                                            <span>
                                                <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                            </span>
                                            Stationaries
                                        </li>
                                        <li>
                                            <span>
                                                <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                            </span>
                                            Privacy guaranteed
                                        </li>
                                        <li>
                                            <span>
                                                <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                            </span>
                                            Air-conditioned
                                        </li>
                                        <li>
                                            <span>
                                                <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                            </span>
                                            Whiteboard
                                        </li>
                                        <li>
                                            <span>
                                                <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                            </span>
                                            Projector/LED display
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-center align-item-center">
                                            <a href="#" class="btn mt-4 price-btn">
                                                <span>Book</span>
                                                <span class="pl-2"><ion-icon name="arrow-forward"></ion-icon></span>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-mobile">
                                <div class="card card-pricing">
                                    <div class="card-body">
                                        <p class="title-pricing">Training Rooms</p>
                                        <img class="card-img" src="{{ url('img/vector/features/training.svg') }}">
                                        <p class="pt-2 d-flex justify-content-center align-items-center">
                                            <span><img src="{{ url('img/vector/ruppe.svg')}}"></span>
                                            <span class="pl-2 price-number">339</span>
                                            <span class="hour">/hour*</span>
                                        </p>

                                        <ul class="lists">
                                            <li>
                                                <span>
                                                    <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                                </span>
                                                Seating for 1
                                            </li>
                                            <li>
                                                <span>
                                                    <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                                </span>
                                                Free WiFi
                                            </li>
                                            <li>
                                                <span>
                                                    <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                                </span>
                                                Tea/Coffee
                                            </li>
                                            <li>
                                                <span>
                                                    <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                                </span>
                                                Stationaries
                                            </li>
                                            <li>
                                                <span>
                                                    <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                                </span>
                                                Privacy guaranteed
                                            </li>
                                            <li>
                                                <span>
                                                    <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                                </span>
                                                Air-conditioned
                                            </li>
                                            <li>
                                                <span>
                                                    <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                                </span>
                                                Whiteboard
                                            </li>
                                            <li>
                                                <span>
                                                    <ion-icon class="circle" name="radio-button-off"></ion-icon>
                                                </span>
                                                Projector/LED display
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-center align-item-center">
                                                <a href="#" class="btn mt-4 price-btn">
                                                    <span>Book</span>
                                                    <span class="pl-2"><ion-icon name="arrow-forward"></ion-icon></span>
                                                </a>
                                            </div>
                                    </div>
                                </div>
                            </div>





                    </div>
            </div>
        </div>
    </section>

    <section class="pt-5 contact">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row pt-4 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center pt-4">
                        <span class="pr-3"><ion-icon class="contact-icon" name="pin"></ion-icon></span>
                        <span>102 street xyz</span>
                    </div>

                    <div class="d-flex align-items-center pt-4">
                        <span class="pr-3"><ion-icon class="contact-icon" name="call"></ion-icon></span>
                        <span>+91 8256452365</span>
                    </div>

                    <div class="d-flex align-items-center pt-4">
                        <span class="pr-3"><ion-icon class="contact-icon" name="mail"></ion-icon></span>
                        <span>contact@in.com</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <img style="width:100%;" src="{{ url('img/vector/contactimage.svg') }}" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="pr-4"><img class="social-icon" src="{{ url('img/vector/facebook-logo.svg') }}" alt=""></div>
                    <div class="pr-4"><img class="social-icon" src="{{ url('img/vector/twitter-social-logotype.svg') }}"></div>
                    <div class="pr-4"><img class="social-icon" src="{{ url('img/vector/linkedin-logo.svg') }}" alt=""></ion-icon></div>
                    <div class="pr-4"><img class="social-icon" src="{{ url('img/vector/instagram.svg') }}" alt=""></ion-icon></div>
                </div>
            </div>

        </div>
    </section>

    <footer class="mt-3 pt-5 d-flex justify-content-center align-item-center">
        <p>2019 © GreenBubbles</p>
    </footer>

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
