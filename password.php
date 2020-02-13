<?php

$hash = password_hash("mot de passe secret", PASSWORD_DEFAULT );

echo $hash;

echo "<hr>";

echo password_verify("toto", $hash)?"ok":"ko";