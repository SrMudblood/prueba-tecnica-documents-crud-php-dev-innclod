<?php

use Models\User;

class LoginController
{

    public function index($error = false)
    {
        if (($_SESSION['auth'] ?? false) == true) {
            header('Location: /documents');
            exit;
        } else {
            include 'views/pages/login.page.php';
        }
    }

    public function login()
    {
        if (($_SESSION['auth'] ?? false) == true) {
            header('Location: /documents');
            exit;
        } else {

            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = User::where('username', $username)->first();

            if (isset($user)) {
                if ($password == $user->pass) {
                    $_SESSION['auth'] = true;
                    header('Location: /documents');
                    exit;
                } else {
                    header('Location: /login/index?error=true');
                    exit;
                }
            } else {
                header('Location: /login/index?error=true');
                exit;
            }
        }
    }

    public function logout()
    {
        if (($_SESSION['auth'] ?? false) == true) {
            session_destroy();
            header('Location: /');
            exit;
        }
        header('Location: /');
        exit;
    }
}
