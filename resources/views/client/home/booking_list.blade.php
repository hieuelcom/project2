<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from themehut.co/html/geair/booking-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 19:41:35 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Geair - Air Ticket Booking System HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body class="white-background">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            @include('client.block.header')
        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="breadcrumb-content text-center">
                                <h2 class="title">Booking List</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Booking List</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- booking-area -->
            <div class="booking-area booking-style-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="booking-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="bOOKing-tab" data-bs-toggle="tab"
                                            data-bs-target="#bOOKing-tab-pane" type="button" role="tab"
                                            aria-controls="bOOKing-tab-pane" aria-selected="true"><i class="flaticon-flight"></i>air
                                            BOOKing</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="trips-tab" data-bs-toggle="tab"
                                            data-bs-target="#trips-tab-pane" type="button" role="tab" aria-controls="trips-tab-pane"
                                            aria-selected="false"><i class="flaticon-file"></i> my trips</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="check-tab" data-bs-toggle="tab"
                                            data-bs-target="#check-tab-pane" type="button" role="tab" aria-controls="check-tab-pane"
                                            aria-selected="false"><i class="flaticon-tick"></i> check-in</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="flight-tab" data-bs-toggle="tab"
                                            data-bs-target="#flight-tab-pane" type="button" role="tab"
                                            aria-controls="flight-tab-pane" aria-selected="false"><i class="flaticon-clock"></i>
                                            Flight status</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="bOOKing-tab-pane" role="tabpanel"
                                        aria-labelledby="bOOKing-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tab-content-wrap">
                                                    <div class="content-top">
                                                        <ul>
                                                            <li class="active"><a href="#">Roundtrip</a></li>
                                                            <li><a href="#">One-way</a></li>
                                                            <li><a href="#">Multi-city</a></li>
                                                        </ul>
                                                    </div>
                                                    <form action="#" class="booking-form">
                                                        <ul>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="select">nơi đi</label>
                                                                    <select class="form-select">
                                                                        <option>
                                                                            tỉnh/ thành phố
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="select">nơi đến</label>
                                                                    <select class="form-select">
                                                                        <option>tỉnh/ thành phố</option>
                                                                    </select>
                                                                    <button class="exchange-icon"><i
                                                                            class="flaticon-exchange-1"></i></button>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="shortBy">Trip</label>
                                                                    <select id="shortBy" name="select" class="form-select"
                                                                        aria-label="Default select example">
                                                                        <option value="">Tour type</option>
                                                                        <option>Adventure Travel</option>
                                                                        <option>Family Tours</option>
                                                                        <option>Newest Item</option>
                                                                        <option>Nature & wildlife</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp date">
                                                                    <ul>
                                                                        <li>
                                                                            <label for="shortBy">Depart</label>
                                                                            <input type="text" class="date"
                                                                                placeholder="Select Date">
                                                                        </li>
                                                                        <li>
                                                                            <label for="shortBy">Return</label>
                                                                            <input type="text" class="date"
                                                                                placeholder="Select Date">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp economy">
                                                                    <label for="text">Passenger/ Class</label>
                                                                    <input type="text" id="text" placeholder="1 Passenger, Economy">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </form>
                                                    <div class="content-bottom">
                                                        <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                                        <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="trips-tab-pane" role="tabpanel" aria-labelledby="trips-tab"
                                        tabindex="0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tab-content-wrap">
                                                    <div class="content-top">
                                                        <ul>
                                                            <li class="active"><a href="#">Roundtrip</a></li>
                                                            <li><a href="#">One-way</a></li>
                                                            <li><a href="#">Multi-city</a></li>
                                                        </ul>
                                                    </div>
                                                    <form action="#" class="booking-form">
                                                        <ul>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="select">nơi đi</label>
                                                                    <select class="form-select">
                                                                        <option>
                                                                            tỉnh/ thành phố
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="select">nơi đến</label>
                                                                    <select class="form-select">
                                                                        <option>tỉnh/ thành phố</option>
                                                                    </select>
                                                                    <button class="exchange-icon"><i
                                                                            class="flaticon-exchange-1"></i></button>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="shortByTwo">Trip</label>
                                                                    <select id="shortByTwo" name="select" class="form-select" aria-label="Default select example">
                                                                        <option value="">Tour type</option>
                                                                        <option>Adventure Travel</option>
                                                                        <option>Family Tours</option>
                                                                        <option>Newest Item</option>
                                                                        <option>Nature & wildlife</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp date">
                                                                    <ul>
                                                                        <li>
                                                                            <label for="shortBy">Depart</label>
                                                                            <input type="text" class="date" placeholder="Select Date">
                                                                        </li>
                                                                        <li>
                                                                            <label for="shortBy">Return</label>
                                                                            <input type="text" class="date" placeholder="Select Date">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp economy">
                                                                    <label for="textTwo">Passenger/ Class</label>
                                                                    <input type="text" id="textTwo" placeholder="1 Passenger, Economy">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </form>
                                                    <div class="content-bottom">
                                                        <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                                        <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="check-tab-pane" role="tabpanel" aria-labelledby="check-tab"
                                        tabindex="0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tab-content-wrap">
                                                    <div class="content-top">
                                                        <ul>
                                                            <li class="active"><a href="#">Roundtrip</a></li>
                                                            <li><a href="#">One-way</a></li>
                                                            <li><a href="#">Multi-city</a></li>
                                                        </ul>
                                                    </div>
                                                    <form action="#" class="booking-form">
                                                        <ul>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="select">nơi đi</label>
                                                                    <select class="form-select">
                                                                        <option>
                                                                            tỉnh/ thành phố
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="select">nơi đến</label>
                                                                    <select class="form-select">
                                                                        <option>tỉnh/ thành phố</option>
                                                                    </select>
                                                                    <button class="exchange-icon"><i
                                                                            class="flaticon-exchange-1"></i></button>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="shortByThree">Trip</label>
                                                                    <select id="shortByThree" name="select" class="form-select" aria-label="Default select example">
                                                                        <option value="">Tour type</option>
                                                                        <option>Adventure Travel</option>
                                                                        <option>Family Tours</option>
                                                                        <option>Newest Item</option>
                                                                        <option>Nature & wildlife</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp date">
                                                                    <ul>
                                                                        <li>
                                                                            <label for="shortBy">Depart</label>
                                                                            <input type="text" class="date" placeholder="Select Date">
                                                                        </li>
                                                                        <li>
                                                                            <label for="shortBy">Return</label>
                                                                            <input type="text" class="date" placeholder="Select Date">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp economy">
                                                                    <label for="textThree">Passenger/ Class</label>
                                                                    <input type="text" id="textThree" placeholder="1 Passenger, Economy">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </form>
                                                    <div class="content-bottom">
                                                        <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                                        <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="flight-tab-pane" role="tabpanel" aria-labelledby="flight-tab"
                                        tabindex="0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="tab-content-wrap">
                                                    <div class="content-top">
                                                        <ul>
                                                            <li class="active"><a href="#">Roundtrip</a></li>
                                                            <li><a href="#">One-way</a></li>
                                                            <li><a href="#">Multi-city</a></li>
                                                        </ul>
                                                    </div>
                                                    <form action="#" class="booking-form">
                                                        <ul>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="select">nơi đi</label>
                                                                    <select class="form-select">
                                                                        <option>
                                                                            tỉnh/ thành phố
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="select">nơi đến</label>
                                                                    <select class="form-select">
                                                                        <option>tỉnh/ thành phố</option>
                                                                    </select>
                                                                    <button class="exchange-icon"><i
                                                                            class="flaticon-exchange-1"></i></button>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp select">
                                                                    <label for="shortByFour">Trip</label>
                                                                    <select id="shortByFour" name="select" class="form-select" aria-label="Default select example">
                                                                        <option value="">Tour type</option>
                                                                        <option>Adventure Travel</option>
                                                                        <option>Family Tours</option>
                                                                        <option>Newest Item</option>
                                                                        <option>Nature & wildlife</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp date">
                                                                    <ul>
                                                                        <li>
                                                                            <label for="shortBy">Depart</label>
                                                                            <input type="text" class="date" placeholder="Select Date">
                                                                        </li>
                                                                        <li>
                                                                            <label for="shortBy">Return</label>
                                                                            <input type="text" class="date" placeholder="Select Date">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-grp economy">
                                                                    <label for="textFour">Passenger/ Class</label>
                                                                    <input type="text" id="textFour" placeholder="1 Passenger, Economy">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </form>
                                                    <div class="content-bottom">
                                                        <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                                        <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- booking-area-end -->

            <!-- booking-list-area -->
            <div class="booking-list-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-27 order-2 order-xl-0">
                            <aside class="booking-sidebar">
                                <div class="widget filters">
                                    <h2 class="title">filters</h2>
                                    <div class="filters-wrap">
                                        <h2 class="widget-title">Price Range</h2>
                                        <div class="price_filter">
                                            <div id="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <span>Price :</span>
                                                <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                                <input type="submit" class="btn" value="Filter">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Departure Time</h2>
                                    <ul class="departure-wrap">
                                        <li><a href="#"><i class="flaticon-sunrise"></i>00:00 - 05:59</a></li>
                                        <li><a href="#"><i class="flaticon-sunny"></i>06:00 - 11:59</a></li>
                                        <li><a href="#"><i class="flaticon-sunset"></i>12:00 - 17:59</a></li>
                                        <li><a href="#"><i class="flaticon-crescent-moon"></i>18:00 - 23:59</a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Number of Stops</h2>
                                    <form action="#" class="flight-stops">
                                        <label for="stopNumber"><i class="flaticon-flight"></i></label>
                                        <select id="stopNumber" name="select" class="form-select" aria-label="Default select example">
                                            <option value="">Direct</option>
                                            <option>One Stops</option>
                                            <option>Two Stops</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Airlines</h2>
                                    <ul class="airlines-cat-list">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="catOne">
                                                <label class="form-check-label" for="catOne">Etihad Airway<span>(12)</span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="catTwo">
                                                <label class="form-check-label" for="catTwo">Lankan Airlines<span>(09)</span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="catThree">
                                                <label class="form-check-label" for="catThree">Dubai Airway<span>(12)</span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="catFour">
                                                <label class="form-check-label" for="catFour">NOVOAIR<span>(36)</span></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Weights</h2>
                                    <ul class="airlines-cat-list weights-list">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="weightsOne">
                                                <label class="form-check-label" for="weightsOne">25 KG</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Refundable</h2>
                                    <ul class="airlines-cat-list">
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="refOne">
                                                <label class="form-check-label" for="refOne">Non Refundable</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="refTwo">
                                                <label class="form-check-label" for="refTwo">Refundable</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="refThree">
                                                <label class="form-check-label" for="refThree">Rules Wise</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-73">
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon01.jpg" alt="">
                                                <h5 class="title">Etihad Airway</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon01.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                                <h5 class="title">Qatar Airways</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,099.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon03.jpg" alt="">
                                                <h5 class="title">Envat (DXB)</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,200.00</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon03.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon04.jpg" alt="">
                                                <h5 class="title">Lankan Airlines</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon04.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon05.jpg" alt="">
                                                <h5 class="title">Dubai (DXB)</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon05.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon01.jpg" alt="">
                                                <h5 class="title">Etihad Airway</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon01.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-list-item">
                                <div class="booking-list-item-inner">
                                    <div class="booking-list-top">
                                        <div class="flight-airway">
                                            <div class="flight-logo">
                                                <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                                <h5 class="title">Tom Line (DXB)</h5>
                                            </div>
                                            <span>Operated by Emirates</span>
                                        </div>
                                        <ul class="flight-info">
                                            <li>Thursday, <span>Jun 16</span></li>
                                            <li class="time"><span>12: 55</span>DAC</li>
                                            <li>22h<span>2 Stops</span></li>
                                        </ul>
                                        <div class="flight-price">
                                            <h4 class="title">US$ 1,056.40</h4>
                                            <a href="booking-details.html" class="btn">Select <i class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="booking-list-bottom">
                                        <ul>
                                            <li class="detail"><i class="fa-solid fa-angle-down"></i> Flight Detail</li>
                                            <li>Price per person (incl. taxes & fees)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flight-detail-wrap">
                                    <div class="flight-date">
                                        <ul>
                                            <li>Thursday, Jun 16</li>
                                            <li>Thursday, Jun 16 - 23:20 <span>22h 50m</span></li>
                                            <li>Friday, Jun 17 - 03:20</li>
                                        </ul>
                                    </div>
                                    <div class="flight-detail-right">
                                        <h4 class="title">IST - Istanbul Airport, Turkish</h4>
                                        <div class="flight-detail-info">
                                            <img src="assets/img/icon/booking_icon02.jpg" alt="">
                                            <ul>
                                                <li>Tpm Line</li>
                                                <li>Operated by Airlines</li>
                                                <li>Economy | Flight EK585 | Aircraft BOEING 777-300ER</li>
                                                <li>Adult(s): 25KG luggage free</li>
                                            </ul>
                                        </div>
                                        <h4 class="title title-two">DXB - Dubai, United Arab Emirates</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- booking-list-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <footer>
            <div class="footer-area footer-bg">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                    <div class="footer-content">
                                        <p>Online to make your journey even more memorable access or meet</p>
                                        <ul class="footer-social">
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget">
                                    <div class="fw-title">
                                        <h4 class="title">Explore</h4>
                                    </div>
                                    <div class="fw-link">
                                        <ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="contact.html">Travel alerts</a></li>
                                            <li><a href="contact.html">Awards</a></li>
                                            <li><a href="contact.html">Qatarisation</a></li>
                                            <li><a href="contact.html">Careers</a></li>
                                            <li><a href="contact.html">Beyond</a></li>
                                            <li><a href="contact.html">Press release</a></li>
                                            <li><a href="contact.html">Airways Cargo</a></li>
                                            <li><a href="contact.html">Sponsorship</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-4">
                                <div class="footer-widget privacy">
                                    <div class="fw-title">
                                        <h4 class="title">Privacy</h4>
                                    </div>
                                    <div class="fw-link">
                                        <ul>
                                            <li><a href="booking-list.html">Airline fees</a></li>
                                            <li><a href="booking-list.html">Airline guides</a></li>
                                            <li><a href="booking-list.html">Airport guides</a></li>
                                            <li><a href="booking-list.html">Low fare tips</a></li>
                                            <li><a href="booking-list.html">Flights</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-8">
                                <div class="footer-widget">
                                    <div class="fw-title">
                                        <h4 class="title">Contacts</h4>
                                    </div>
                                    <div class="footer-contact">
                                        <p>PO Box W75 Street lan West new queens</p>
                                        <h2 class="title"><a href="tel:0123456789">+1 246 333 - 0079</a></h2>
                                        <a href="#">geair@company.com</a>
                                        <form action="#">
                                            <input type="email" placeholder="Enter your email">
                                            <button type="submit"><i class="flaticon-send"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="copyright-text">
                                    <p>Copyright © 2022.All Rights Reserved By <span>Geair</span></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cart-img text-end">
                                    <img src="assets/img/images/cart.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->


        <!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.odometer.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from themehut.co/html/geair/booking-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 19:41:36 GMT -->
</html>
