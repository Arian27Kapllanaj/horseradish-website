<?php require('include.php') ?>

<head>
    <title>Home</title>
    <style>
        .image {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .size {
            height: 25vw;
            width: 30vw;
        }

        @media screen and (max-width: 800px) {
            .size {
                height: 50vw;
                width: 55vw;
            }
        }
    </style>
</head>

<div class="image">
    <img src="assets/home.png" alt="" class="size">
</div>