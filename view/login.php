<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <title>CART</title>
    <style>
        body {
            background-image: url('./pics/background.PNG');
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
        }
        .headline {
            font-size: 40px;
            color: white;
        }
        .form-container {
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1 class="headline">LOGIN</h1>

    <div  class="form-container">
        <div class="input-group mb-3" style="position: absolute; top: 350px; left: 700px;">
            <div class="input-group-prepend">
                <span class="input-group-text">email</span>
            </div>
            <input type="text" aria-label="First name" style="font-size: 2rem;">
        </div>
        <div class="input-group" style="position: absolute; top: 420px; left: 700px;">
            <div class="input-group-prepend">
                <span class="input-group-text">password</span>
            </div>
            <input type="text" aria-label="First name" style="font-size: 2rem;" >
        </div>
        <div class="input-group" style="position: absolute; top: 500px; left: 850px;">
            <button type="button" class="btn btn-success" style="width: 200px">Success</button>
        </div>
    </div>


</body>
</html>
