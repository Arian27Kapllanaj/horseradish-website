<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horseradish</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
    <script src="less.js" type="text/javascript"></script>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
        }

        body {
            font-family: 'Arvo', serif;
            color: #333;
        }

        h1 {
            margin-top: 110px;
            font-size: 2.5em;
            text-align: center;
        }

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: white;
            z-index: 1;
        }

        nav h2 {
            display: inline;
            height: 100px;
            width: 150px;
        }

        nav h2 img {
            width: 205px;
            height: 165px;
        }

        .menu {
            position: relative;
            margin-top: 6px;
            float: right;
            list-style-type: none;
            transition: top 0.5s cubic-bezier(0.3, 0.1, 0.3, 0.85);
        }

        .menu li {
            display: inline;
            margin-right: 15px;
            cursor: pointer;
        }

        .menu li::before {
            position: absolute;
            bottom: -6px;
            content: "";
            height: 3px;
            width: 0;
            background: #333;
            transition: 0.5s;
        }

        input[type=checkbox] {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        nav label {
            position: absolute;
            display: none;
            top: 0;
            right: 0;
            height: 70px;
            width: 70px;
            background: white;
            cursor: pointer;
            z-index: 1;
        }

        nav>label>span {
            display: block;
            margin: 4px auto;
            height: 4px;
            width: 25px;
            border-radius: 1px;
            background: #333;
            transition: 0.5s;
        }

        nav>label>span:nth-child(1) {
            margin-top: 25px;
        }

        input[type=checkbox]:checked~.menu {
            top: 0;
        }

        input[type=checkbox]:checked~label span {
            background: black;
        }

        input[type=checkbox]:checked~label span:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        input[type=checkbox]:checked~label span:nth-child(2) {
            opacity: 0;
        }

        input[type=checkbox]:checked~label span:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        @media (max-width: 768px) {
            .menu {
                position: absolute;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin: 0;
                top: -100vh;
                left: 0;
                height: 100vh;
                width: 100%;
                background: white;
            }

            nav label {
                display: block;
            }

            nav h2 img {
                height: 17.5vh;
                width: 22.5vh;
                display: none;
            }
        }

        .menu li img {
            width: 150px;
            height: 165px;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>

    <nav>
        <h2 class="brand"><a href="home.php"><img src="assets/logo.png" alt=""></a></h2>
        <input type="checkbox" id="nav">
        <label for="nav">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <ul class="menu">
            <li><a href="location.php"><img src="assets/location.png" alt=""></a></li>
            <li><a href="how.php"><img src="assets/how.png" alt=""></a></li>
            <li><a href="why.php"><img src="assets/why.png" alt=""></a></li>
        </ul>
    </nav>