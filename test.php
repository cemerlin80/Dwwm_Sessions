<?php
    session_start();


    if (!isset($_SESSION["compteur"]))
        $_SESSION["compteur"] = 0;
    else
        $_SESSION["compteur"]++;

    echo $_SESSION["compteur"];




