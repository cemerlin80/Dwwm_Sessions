<?php

$db = new PDO('mysql:host=localhost;dbname=record', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$login = $_POST["login"];
$role = $_POST["role"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

$hash = password_hash($password, PASSWORD_DEFAULT);

$requete = $db->prepare("insert into user (login, role, password) values (?, ?, ?);");

$requete->execute(array($login, $role, $hash));

