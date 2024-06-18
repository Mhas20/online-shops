<?php
include "../model/User.php";
include "links_icon.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {


        $user = User::login($_POST["email"], $_POST["password"]);

        if ($user instanceof User) {
            $_SESSION['u_id'] = $user->getUId();
            echo "Anmeldung erfolgreich";
            header("location: view.php");
            exit();
        } else {
            // Login fehlgeschlagen, Fehlermeldung anzeigen
            $error_message = "E-Mail oder Passwort ist falsch";
        }
    } else {
        // Nicht alle Felder wurden ausgefüllt
        $error_message = "Bitte füllen Sie alle Felder aus";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    <title>Login</title>
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
            top: 350px;
            left: 700px;
            width: 400px;
        }
        .form-container .input-group {
            margin-bottom: 20px;
        }
        .form-container .input-group-text {
            font-size: 1rem;
        }
        .form-container input[type="text"] {
            width: 100%;
            font-size: 1rem;
        }
        .form-container input[type="password"] {
            width: 100%;
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
<h1 class="headline">LOGIN</h1>
<form action="login.php" method="post">
    <div class="form-container">
            <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>
        <div class="mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
            </div>
            <input type="text"  name="email">
        </div>
        <div class="mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Passwort</span>
            </div>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-success">Login</button>
        </div>
        <p class="textcolor">Noch kein Konto? <a href="register.php">Registrierung</a></p>
    </div>
</form>
</body>
</html>