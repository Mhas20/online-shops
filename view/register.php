<?php
include "links_icon.php";
include_once "../model/User.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['password'] == $_POST['password_ch']) {
        User::createUser($_POST['fname'], $_POST['lname'], $_POST['password'], $_POST['email'], $_POST['address']);
        echo "Registrierung erfolgreich";
        header("location: view.php");
    }
    else{
        echo "Password stimmt nicht überein";
    }

}

?>
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <title>Register</title>
    <style>
        body {
            background-image: url('pics/background.PNG');
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

        .textcolor {
            color: white;
        }

        .form-container {
            padding: 20px;
            border-radius: 10px;
            position: absolute;
            top: 250px;
            left: 650px;
            width: 400px;
        }

        .form-container .input-group {
            margin-bottom: 20px;
        }

        .form-container .input-group-text {
            font-size: 1rem;
        }

        .form-container input[type="text"] {
            font-size: 1rem;
        }

        .form-container .btn {
            width: 100%;
        }

        .form-container p {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="headline">Register</h1>

    <form action="register.php" method="post">
        <div class="form-container">
            <div class="mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Vorname</span>
                </div>
                <input type="text" class="form-control"  name="fname">
            </div>
            <div class="mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nachname</span>
                </div>
                <input type="text" class="form-control" name="lname">
            </div>
            <div class="mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Adresse</span>
                </div>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                </div>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Passwort</span>
                </div>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Passwort wiederholen</span>
                </div>
                <input type="password" class="form-control" name="password_ch">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">registrieren</button>
            </div>
        </div>
    </form>
</body>
</html>

