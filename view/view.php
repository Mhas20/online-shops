<?php
include_once "links_icon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <style>
        body {
            background-image: url('./pics/background.PNG');
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .headline {
            margin-top: 100px;
            font-size: 70px;
            color: white;
            text-align: center;
        }
        .selections {
            display: flex;
            gap: 50px; /* Space between images */
            margin-top: 50px;
        }
        .selection img {
            width: 300px;
            height: 800px;
            object-fit: cover;
            border-radius: 10px;
        }
        .selection {
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
<h1 class="headline">Online Store</h1>
<div class="selections">
    <a class="selection" href="men.php">
        <img src="./pics/men_cover.jpg" alt="Men's Wear">
        <div>Men's Wear</div>
    </a>
    <a class="selection" href="women.php">
        <img src="./pics/women_cover.jpg" alt="Women's Wear">
        <div>Women's Wear</div>
    </a>
</div>
</body>
</html>



