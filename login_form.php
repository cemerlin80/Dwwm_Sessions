<?php
session_start();   


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sessions</title>
</head>
<body>
    
<style>

form{
    margin-top: 10em;
}

.form-group{
    width: 100%;
    
}
.input-group{
    width: 100%;
}

h1{
    text-align: center;
}

    </style>

<h1>Login</h1>


<div class="container">
    <div class="row">
        <div class="col 6">

<form action="login_script.php" method="POST">
        <div class="form-group">
    <label for="formGroupExampleInput">Nom d'utlisateur</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="user">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Mot de passe</label>
    <input type="password" class="form-control" id="formGroupExampleInput2" name="password">
  </div>

<label class="sr-only" for="inlineFormInputGroupUsername2">Mail</label>
  <div class="input-group mb-2 mr-sm-2">
    <div class="input-group-prepend">
      <div class="input-group-text">@</div>
    </div>
    <input type="mail" class="form-control" id="inlineFormInputGroupUsername2" placeholder="E mail" name="Mail">
  </div>

  <button type="submit" class="btn btn-primary">Valider</button>

</form>
</div>
</div>
</div>



</form>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


<?php


session_destroy();






?>