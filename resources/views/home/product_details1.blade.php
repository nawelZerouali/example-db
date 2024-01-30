<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    {{-- <title>DeskApp - Bootstrap Admin Dashboard HTML artisan</title> --}}

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="artisan/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="artisan/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="artisan/vendors//images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="artisan/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="artisan/vendors/styles/icon-font.min.css" />

    <!-- Slick Slider css -->
    <link rel="stylesheet" type="text/css" href="artisan/src/plugins/slick/slick.css" />
    <!-- bootstrap-touchspin css -->
    <link rel="stylesheet" type="text/css"
        href="artisan/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css" />
    <link rel="stylesheet" type="text/css" href="artisan/vendors/styles/style.css" />



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
        document.addEventListener('DOMContentLoaded', function() {
            var animatedDiv = document.getElementById('animatedDiv');
            animatedDiv.style.opacity = 5; // Change l'opacité à 1 (visible) une fois que la page est chargée
        });
    </script>
    <script>
        function rate1() {
            if(document.getElementById('star1').checked){
                document.getElementById('s1').style.color = 'yellow';
                document.getElementById('s2').style.color = '#ddd';
                        document.getElementById('s3').style.color = '#ddd';
                        document.getElementById('s4').style.color = '#ddd';
                        document.getElementById('s5').style.color = '#ddd';
            }
                    }
                    function rate2() {
                        if(document.getElementById('star2').checked){
                document.getElementById('s1').style.color = 'yellow';
                document.getElementById('s2').style.color = 'yellow';
                document.getElementById('s3').style.color = '#ddd';
                        document.getElementById('s4').style.color = '#ddd';
                        document.getElementById('s5').style.color = '#ddd';
            }
                    }
                    function rate3() {
                        if(document.getElementById('star3').checked){
                document.getElementById('s1').style.color = 'yellow';
                document.getElementById('s2').style.color = 'yellow';
                document.getElementById('s3').style.color = 'yellow';
                document.getElementById('s4').style.color = '#ddd';
                        document.getElementById('s5').style.color = '#ddd';

            }
                    }
                    function rate4() {
                        if(document.getElementById('star4').checked){
                        document.getElementById('s1').style.color = 'yellow';
                        document.getElementById('s2').style.color = 'yellow';
                        document.getElementById('s3').style.color = 'yellow';
                        document.getElementById('s4').style.color = 'yellow';
                        document.getElementById('s5').style.color = '#ddd';

                        }
                    }
                    function rate5() {
                        if(document.getElementById('star5').checked){

                        document.getElementById('s1').style.color = 'yellow';
                        document.getElementById('s2').style.color = 'yellow';
                        document.getElementById('s3').style.color = 'yellow';
                        document.getElementById('s4').style.color = 'yellow';
                        document.getElementById('s5').style.color = 'yellow';
                        }
                    }

        // $(document).ready(function () {
        //     $('.rate input').click(function () {
        //         // Désélectionner toutes les étoiles
        //         $('.rate label').css('color', '#ddd');

        //         // Sélectionner toutes les étoiles jusqu'à celle sur laquelle vous avez cliqué
        //         $(this).prevAll('input').addBack().prevAll('label').css('color', 'yellow');
        //     });

       // });
    </script>

    <!-- End Google Tag Manager -->
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('artisan/vendors/images/detail_produit.png') no-repeat center center fixed;
            background-size: cover;
        }

        .progress-label-left>i:before {
            content: '★ ';
        }

        :root {
            --primary-color: #f7bf17;

            --linear: #ef5350;

            --white: #fff;

            --r-color: #d63031;

            --light-b: #686de0;
        }

        .rating-review {

            height: 100%;

            width: 85%;

            margin: 80px auto;

            background-color: #fefefe;
        }

        .rating-review table,

        .rating-review td {

            font-size: .8125rem;

            text-align: center;

        }

        .rating-review table {

            width: 100%;

            margin: 0;

            font-family: "roboto", sans-serif;

            border-collapse: collapse;

            border-spacing: 0;

            color: #8f8f8f;

            margin-bottom: .625rem;

        }

        .rating-review td {

            padding: 1rem;

            width: 33.3%;
        }

        .tri {

            border-bottom: 1px solid #e2e2e2;

            padding: 12px;

        }

        .rnb h3 {

            color: var(--primary-color);

            font-size: 2.4rem;

            font-family: "roboto", sans-serif;

        }

        .tri .pdt-rate {

            height: 40px;

            display: flex;

            justify-content: center;

            align-items: center;

            flex-direction: column;
        }

        .rating-stars {

            position: relative;

            vertical-align: baseline;

            color: #b9b9b9;

            line-height: 10px;

            float: left;

        }

        .grey-stars {

            height: 100%;

        }

        .filled-stars {

            position: absolute;

            left: 1px;

            top: 2px;

            height: 100%;

            overflow: hidden;

            color: var(--primary-color);
        }

        .filled-stars::before,

        -grey-stars::before {

            content: "12605 12605 12605 12605 12605";

            font-size: 19px;

            line-height: 18px;

            letter-spacing: 0;

        }

        .tri filled-stars::before,

        .tri .grey-stars::before {

            font-size: 20px;

            line-height: 23px;
            I
        }

        .rnrn {
            width: 100%;
            font-family: "lato";

            font-weight: 700;

            font-size: 1rem;
        }

        .rpb {

            width: 100%;

            display: flex;

            flex-direction: column;

            align-items: center;

        }

        .rnpb {

            display: flex;

            width: 100%;

        }

        .rnpb label:first-child {

            margin-right: 5px;

            margin-top: -2px;

            .rnpb label:last-child {

                margin-left: 3px;

                margin-top: -2px;
            }

            .rnpb label i {

                color: var(--primary-color);

            }

            .ropb {

                height: 10px;

                width: 75%;

                background-color: #f1f1f1;

                position: relative;

                margin-bottom: 10px;

            }

            .ripb {

                height: 100%;

                background-color: var(--primary-color);

                border: 1px solid #a0a0a0;

            }

            .rrb p {

                font-size: 1rem;

                font-weight: 500;

                font-family: "raleway";

                margin-bottom: 10px;

            }

            .slick-slider {
                position: relative;
                display: block;
                box-sizing: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-touch-callout: none;
                -khtml-user-select: none;
                -ms-touch-action: pan-y;
                touch-action: pan-y;
                -webkit-tap-highlight-color: transparent;
            }

            .page-header.h1 {
                animation: rotateAnimation 10s infinite;
                /* Ajoute une animation de rotation infinie de 2 secondes */
            }

            @keyframes rotateAnimation {

                0%,
                50%,
                100% {
                    opacity: 1;
                }

                25%,
                75% {
                    opacity: 0;
                }
            }
    </style>



@include('home.Offcanvus')



    <div class="mobile-menu-overlay"></div>
    @if ($product)
        <div class="main-container">
            <div class="page-header"
                style=" margin-top:0vh;
            text-align: center;
            margin-top: 20vh;
            opacity: 0;
            width: 80%;
            margin: 0 auto;
            transition: opacity 10s ease-in-out;"
                id="animatedDiv">
                <h3 class="word" style="text-align: center; margin-top: 0vh; color:">
                    Click for a tasty treat</h3>
            </div><br>

            <script>
                words = ['hey I like SASS', 'I used to like LESS', 'I also heart Jade'],
                    part,
                    i = 0,
                    offset = 0,
                    len = words.length,
                    forwards = true,
                    skip_count = 0,
                    skip_delay = 5,
                    speed = 100;

                var wordflick = function() {
                    setInterval(function() {
                        if (forwards) {
                            if (offset >= words[i].length) {
                                ++skip_count;
                                if (skip_count == skip_delay) {
                                    forwards = false;
                                    skip_count = 0;
                                }
                            }
                        } else {
                            if (offset == 0) {
                                forwards = true;
                                i++;
                                offset = 0;
                                if (i >= len) {
                                    i = 0;
                                }
                            }
                        }
                        part = words[i].substr(0, offset);
                        if (skip_count == 0) {
                            if (forwards) {
                                offset++;
                            } else {
                                offset--;
                            }
                        }
                        $('.word').text(part);
                    }, speed);
                };

                $(document).ready(function() {
                    wordflick();
                });
            </script>
            <style>
                @import url(https://fonts.googleapis.com/css?family=Montserrat:700);

                .word {
                    margin: auto;
                    color: white;
                    font: 700 normal 4em/1.5 "Montserrat", sans-serif;
                    text-shadow: 1px 2px #bc8f1d, 2px 4px #bc8f1d, 3px 6px #bc8f1d, 4px 8px #bc8f1d, 5px 10px #bc8f1d, 6px 12px #bc8f1d, 7px 14px #bc8f1d, 8px 16px #bc8f1d, 9px 18px #bc8f1d, 10px 20px #bc8f1d;
                }
            </style>

            <div class="product-wrap">
                <div class="product-detail-wrap mb-30">
                    <div class="row">

                        {{-- <div class="product-slider slider-arrow"> --}}
                        <div class="product-slide col-lg-4 col-md-10 col-sm-6">
                            <div class="col-12">
                                <img style=" width:500px;" src="{{ asset(json_decode($product->image)[0]) }}"
                                    alt="{{ $product->name_prod }}" />
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    @php
                                        $images = json_decode($product->image);
                                    @endphp

                                    @foreach ($images as $key => $value)
                                    @if($key>0)
                                    <div class="col-6 col-md-4">
                                        <div class="product-img mx-auto">
                                            <img src="{{$value}}" alt="" />
                                        </div>
                                    </div>
                                    @endif

                                    @endforeach

                                </div>
                            </div>
                        </div>






                        <div class="col-lg-8 col-md-12 col-sm-6">
                            <div class="product-detail-desc pd-20 card-box height-100-p ">
                                <h4 style="color:#F1C93B">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                    &nbsp;&nbsp;{{ $product->name_prod }}</h4>

                                <p> <label style="color:#F1C93B"><b>Minimum
                                            Quantity </b></label>&nbsp;&nbsp;{{ $product->quantity_min }}</p>
                                <p><label style="color:#F1C93B"><b>description : </b></label>&nbsp;&nbsp;
                                    {{ $product->description }}
                                </p>

                                <div class="price"><ins> <label style="color:#F1C93B"><b>Price:
                                            </b></label>&nbsp;&nbsp;
                                        {{ $product->price }} DA</ins>
                                </div>


                                <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                    <label style="color:#F1C93B"><b>Quantity :</b></label>

                                    <form action="{{ url('/add_cart', $product->id) }}" method="POST"
                                        style="display: flex; align-items: center;">
                                        @csrf


                                        <input type="number" class="quantity-input" name="quantity" value="1"
                                            min="1"style="width: 100px; padding: 5px;"> &nbsp;&nbsp;
                                        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <button class="btn btn-primary btn-block"
                                            style="color:rgb(251, 245, 236); width: 300px; height: 50px; display: inline-block;  margin-left: 10px;">Add
                                            To Cart</button>
                                    </form>
                                </div>



                                <div class="col-md-12 col-6">

                                    {{-- <form action="{{ url('/add_cart', $product->id) }}"method="POST">
                                                    @csrf
                                                    <label class="text-blue">Action   </label>
                                                    <button class="btn btn-primary btn-block"
                                                        style="  color:rgb(251, 245, 236);  width: 200px; height: 50px;">Add To Cart</button>

                                                </form> --}}



                                </div>

                                <div class="span4 col-sm-8 col-lg-5">
                                    <h2 style="color:#000000"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User
                                        Reviews</h2>


                                    @php
                                        $count = $oneStarCount + $twoStarCount + $threeStarCount + $fourStarCount + $fiveStarCount;
                                        $average = $count != 0 ? ($oneStarCount * 1 + $twoStarCount * 2 + $threeStarCount * 3 + $fourStarCount * 4 + $fiveStarCount * 5) / $count : 0;

                                    @endphp
                                </div>


                                <div class="container">

                                    <div>

                                        <div class="row">
                                            {{-- <div class="col-sm-4 text-center"> --}}
                                            <div class="col-sm-8 col-lg-6 custom-width">
                                                <h1 class="text-warning mt-4 mb-4">
                                                    <b><span id="average_rating">{{ intval($average) }}</span>
                                                        /
                                                        5</b>
                                                </h1>

                                                <h3><span id="total_review">{{ $count }} Review</span>
                                                </h3>



                                                <div class="progress-label-left col-sm-8 col-lg-3 "><b>5</b> <i
                                                        class="fas fa-star text-warning"><span
                                                            id="total_five_star_review"
                                                            style="color: #000000">({{ $fiveStarCount }})</span></i>
                                                </div>
                                                <div class="progress-label-right">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($fiveStarCount / $average) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}" aria-valuemin="0"
                                                            aria-valuemax="100" id="five_star_progress">
                                                        </div>
                                                    </div>


                                                    <div class="progress-label-left"><b>4</b> <i
                                                            class="fas fa-star text-warning">
                                                            <span id="total_four_star_review"
                                                                style="color: #000000">({{ $fourStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">

                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($fiveStarCount / $average) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}" aria-valuemin="0"
                                                            aria-valuemax="100" id="five_star_progress">
                                                        </div>
                                                    </div>


                                                    <div class="progress-label-left"><b>3</b> <i
                                                            class="fas fa-star text-warning"><span
                                                                id="total_three_star_review"
                                                                style="color: #000000">({{ $threeStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($fiveStarCount / $average) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}" aria-valuemin="0"
                                                            aria-valuemax="100" id="five_star_progress">
                                                        </div>
                                                    </div>

                                                    <p>
                                                    <div class="progress-label-left"><b>2</b> <i
                                                            class="fas fa-star text-warning"> <span
                                                                id="total_one_star_review"
                                                                style="color: #000000">({{ $twoStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($twoStarCount / $average) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}" aria-valuemin="0"
                                                            aria-valuemax="100" id="five_star_progress">
                                                        </div>
                                                    </div>
                                                    </p>

                                                    <p>
                                                    <div class="progress-label-left"><b>1</b> <i
                                                            class="fas fa-star text-warning"> <span
                                                                id="total_one_star_review"
                                                                style="color: #000000">({{ $oneStarCount }})</span>
                                                        </i></div>
                                                    <div class="progress-label-right">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            @php
$progressWidth = ($average != 0) ? ($oneStarCount / $count) * 100 : 0; @endphp
                                                            style="width: {{ $progressWidth }}%;"
                                                            aria-valuenow="{{ $progressWidth }}" aria-valuemax="100"
                                                            id="five_star_progress">
                                                        </div>
                                                    </div>
                                                    </p>
                                                </div>

                                            </div>
                                            <div classe="span4 col-sm-4 col-lg-7">
                                                <h2 class="comment">All Comments</h2>

                                                <div class="comment-section">

                                                    <div>

                                                        @foreach ($reviews as $review)
                                                            <div>
                                                                <strong>{{ $review->user->name }}</strong>
                                                                <p>{{ $review->review }}</p> <br>
                                                            </div>
                                                        @endforeach

                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="container ">
                                    <div class="span4">
                                        <h5>Your Review </h5>
                                        <div class="span4" style="align-items: center; height: 10vh;">

                                            <form action="{{ url('/add_rating') }}" method="POST"
                                                style="display: flex; align-items">
                                                @csrf
                                                <input type="hidden" value="{{ $product->id }}" name="prod_id" />
                                                <div>
                                                    {{-- <div class="rate">
                                                        <input type="radio" id="star5" name="rating"
                                                            value="5" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" id="star4" name="rating"
                                                            value="4" />
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" name="rating"
                                                            value="3" />
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" name="rating"
                                                            value="2" />
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" name="rating"
                                                            value="1" />
                                                        <label for="star1" title="text">1 star</label>

                                                    </div> --}}

                                                    <style>
                                                        .rate {
                                                            display: inline-block;
                                                        }

                                                        .rate input {
                                                            display: none;
                                                        }

                                                        .rate label {
                                                            font-size: 30px;
                                                            color: #ddd;
                                                            cursor: pointer;
                                                            transition: color 0.3s ease;
                                                        }

                                                        .rate input:checked + label,
                                                        .rate label:hover,
                                                        .rate label:hover ~ label {
                                                            color: yellow; /* Change this to your desired hover color */
                                                        }
                                                    </style>

                                                    <div class="rate">
                                                        <input type="radio" id="star5" name="rating" value="5" onclick="rate5()" />
                                                        <label for="star5" title="5 stars" id="s5">&#9733;</label>
                                                        <input type="radio" id="star4" name="rating" value="4" onclick="rate4()"  />
                                                        <label for="star4" title="4 stars" id="s4">&#9733;</label>
                                                        <input type="radio" id="star3" name="rating" value="3"onclick="rate3()" />
                                                        <label for="star3" title="3 stars" id="s3">&#9733;</label>
                                                        <input type="radio" id="star2" name="rating" value="2" onclick="rate2()" />
                                                        <label for="star2" title="2 stars" id="s2">&#9733;</label>
                                                        <input type="radio" id="star1" name="rating" value="1" onclick="rate1()"/>
                                                        <label for="star1" title="1 star" id="s1">&#9733;</label>
                                                        <i class="fas fa-star-light mr-1 main_star"></i>
                                                    </div>

                                                    <br>
                                                    <div>
                                                        <textarea name="review" style=" width:300px ; hieght:50px;"></textarea>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button
                                                            style="width: 100px; height: 50px;"
                                                            class="btn btn-primary btn-block"
                                                            type="submit">comment</button>
                                                    </div>

                                            </form>



                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>
                            <div class="product-list">
                                <br><br>
                                <ul class="row">
                                    <!---pour les photos--->

                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <li class="col-lg-2 col-md-12 col-sm-12">

                                        <div class="producct-img mx-auto">
                                            <img src="artisan/src/images/1.png" alt="" />
                                        </div>

                                    </li>
                                    <li class="col-lg-2 col-md-12 col-sm-12">

                                        <div class="producct-img mx-auto">
                                            <img src="artisan/src/images/2.png" alt="" />
                                        </div>

                                    </li>
                                    <li class="col-lg-2 col-md-12 col-sm-12">

                                        <div class="producct-img mx-auto">
                                            <img src="artisan/src/images/3.png" alt="" />
                                        </div>

                                    </li>
                                    <li class="col-lg-2 col-md-12 col-sm-12">

                                        <div class="producct-img mx-auto">
                                            <img src="artisan/src/images/4.png" alt="" />
                                        </div>

                                    </li>
                                    <li class="col-lg-2 col-md-12 col-sm-2">

                                        <div class="producct-img mx-auto">
                                            <img src="artisan/src/images/5.png" alt="" />
                                        </div>
                                    </li>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{-- </li> --}}
            </ul>
            {{-- </div> --}}
        </div>
        </div>

        </div>
        </div>
    @endif

    <!-- js -->
    <script src="artisan/vendors/scripts/core.js"></script>
    <script src="artisan/vendors/scripts/script.min.js"></script>
    <script src="artisan/vendors/scripts/process.js"></script>
    <script src="artisan/vendors/scripts/layout-settings.js"></script>
    <!-- Slick Slider js -->
    <script src="src/plugins/slick/slick.min.js"></script>
    <!-- bootstrap-touchspin js -->
    <script src="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".product-slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                speed: 1000,
                fade: true,
                asNavFor: ".product-slider-nav",
            });
            jQuery(".product-slider-nav").slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: ".product-slider",
                dots: false,
                infinite: true,
                arrows: false,
                speed: 1000,
                centerMode: true,
                focusOnSelect: true,
            });
            $("input[name='demo3_22']").TouchSpin({
                initval: 1,
            });
        });
    </script>

</body>

</html>
