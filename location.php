<?php require('include.php') ?>

<head>
    <title>Hours & Location</title>
    <style>
        .map {
            width: 75%;
            margin-top: 200px;
        }

        .responsive {
            display: none;
        }

        .time-responsive {
            display: none;
        }

        @media screen and (max-width: 768px) {

            .time-responsive {
                display: inline;
                margin-top: 70px;
                height: 100px;
                width: 200px;
            }

            .responsive {
                display: inline;
                width: 100%;
                margin-top: 5px;
            }

            .map {
                display: none;
            }
        }
    </style>
</head>
<div class="time" style="width: 100%;">
        <div class="text-center">
        <img src="assets/time.png" alt="" class="time-responsive"></div>
    </div>
<div class="text-center">
    <a href="https://www.google.com/maps/place/839+Broadway,+Brooklyn,+NY+11206/@40.6991008,-73.9407825,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25bf7814ad0d7:0x9ed6beef48dad481!8m2!3d40.6991008!4d-73.9385938" target="_blank">
        <img src="assets/map.png" alt="" class="map">
    </a>

    <a href="https://www.google.com/maps/place/839+Broadway,+Brooklyn,+NY+11206/@40.6991008,-73.9407825,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25bf7814ad0d7:0x9ed6beef48dad481!8m2!3d40.6991008!4d-73.9385938" target="_blank">
        <img src="assets/mobile-map.png" alt="" class="responsive">
    </a>

</div>