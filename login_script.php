<?php

// Login utilisateur

   

$_SESSION["user"] = "admin";

if ($_SESSION["user"] = "admin")
{
    echo"Accédez à votre compte";
}
else
{
    echo"Vous devez vous logger";
}

if ( ! isset($_SESSION["user"]) )
{
    header("Location:login_form.php");
    exit;
}

// Mot de passe




password_hash($password, PASSWORD_DEFAULT);

?>