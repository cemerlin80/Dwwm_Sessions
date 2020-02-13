<?php
    session_start();

    $db = new PDO('mysql:host=localhost;dbname=record', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $login = $_POST["login"];
    $password = $_POST["password"];

    $requete = $db->prepare("select login, role, password from user where login=?");
    $requete->execute(array($login));
    $user = $requete->fetch(PDO::FETCH_OBJ);

    if ($user) {
        if (password_verify($password, $user->password)) {
            $user->password="";
            $_SESSION["auth"]=$user;
            $_SESSION["message"] = "Bonjour ...";
            header("Location: liste.php");
        }
        else {
            unset($_SESSION["auth"]);
            header("Location: form.php");
        }

    }
    else {
        unset($_SESSION["auth"]);
        header("Location: form.php");
    }
    