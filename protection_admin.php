<?php
    session_start();

    if (!isset($_SESSION["auth"]) || $_SESSION["auth"]->role!="admin") {
        header("Location: form.php");
    }
?>