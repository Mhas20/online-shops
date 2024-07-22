<?php

class Usercontroller
{

    public function Login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["email"]) && !empty($_POST["password"])) {


                $user = User::login($_POST['email'], $_POST['password']);

                if ($user instanceof User) {
                    $_SESSION['u_id'] = $user->getUId();
                    header("location: ../view/view.php");
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

    }

}