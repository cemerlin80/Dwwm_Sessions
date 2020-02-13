<?php
    session_start();

    if (!isset($_SESSION["auth"]) || $_SESSION["auth"]->role!="user") {
        header("Location: form.php");
    }
?>