<?php

use Models\User;

class LoginController
{

    public function index()
    {
        if ($_SESSION['auth'] ?? false == true) {
            header('Location: /documents');
        } else {
            include 'views/pages/login.page.php';
        }
    }

    public function login()
    {
        if ($_SESSION['auth'] ?? false == true) {
            header('Location: /documents');
        } else {

            echo $_SESSION['auth'];

            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            echo $username;
            echo $password . "<br>";

            $user = User::where('username', $username)->first();

            if (isset($user)) {
                if ($password == $user->pass) {
                    $_SESSION['auth'] = true;
                    echo 'Logged in';
                } else {
                    header('Location: /?error=true');
                }
            } else {
                header('Location: /?error=true');
            }
        }
    }
}
