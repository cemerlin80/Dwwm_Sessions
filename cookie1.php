<?php

    setcookie("nom_cookie2", "valeur_cookie", time() + (15 * 24 * 3600));

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";