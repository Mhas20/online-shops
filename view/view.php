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
            margin: 0;
        }
        .headline {
            position: absolute;
            top: 350px;
            left: 250px;
            font-size: 70px;
            color: white;
        }
        .m_selection {
            position: absolute;
            top: 200px;
            left: 900px;
            color: white;
        }
        .w_selection {
            position: absolute;
            top: 200px;
            left: 1300px;
            color: white;
        }
        .pics {
            width: 300px;
            height: 750px;
        }
    </style>
</head>
<body>
<h1 class="headline">Online Store</h1>
    <a class="m_selection" href="men.php">
        <img src="./pics/men_cover.jpg" alt="Men's Wear" class="pics">
    </a>
    <a class="w_selection" href="women.php">
        <img src="./pics/women_cover.jpg" alt="Men's Wear" class="pics">
    </a>

</body>
</html>
