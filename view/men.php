<?php
include_once "links_icon.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEN</title>
    <style>
        body {
            background-image: url('./pics/background.PNG');
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
        }
        .headline {
            font-size: 70px;
            color: white;
            text-align: center;
            margin-top: 20px;
        }
        .product-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 180px; /* Abstand zwischen den Rahmen oder Bild bestimmen */
            margin-top: 50px;
        }
        .product {
            text-align: center;
            color: white;
            width: 200px;
        }
        .product img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            display: block;
        }
        .product .placeholder {
            width: 100%;
            height: 200px;
            border: 2px dashed white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: white;
        }
        .product-name {
            margin-top: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="headline">MEN's WEAR</h1>
    <div class="product-container">
        <div class="product">
            <a href="">
                <img src="./pics/product1.jpg" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="placeholder" style="display:none;">kein Bild</div>
                <div class="product-name">Product 1</div>
            </a>
        </div>
        <div class="product">
            <a href="">
                <img src="./pics/product2.jpg" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="placeholder" style="display:none;">kein Bild</div>
                <div class="product-name">Product 2</div>
            </a>
        </div>
        <div class="product">
            <a href="">
                <img src="./pics/product3.jpg" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="placeholder" style="display:none;">kein Bild</div>
                <div class="product-name">Product 3</div>
            </a>
        </div>
    </div>
</body>
</html>
