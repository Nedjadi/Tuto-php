<head>
  <meta charset="utf-8">
  <link href="main.css" rel="stylesheet">
  <script  src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js" >
</script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <script src="script.js"></script>

</head>


<body>

<div class="row">
  <div class="col-md-4">



<!-- version de w3school pour un $_POST -->




  <div class="col-md-4">


  <form action="login.php" method="GET">
  Login: <input type="text" name="login"><br>
  Mot de passe: <input type="password" name="mdp"><br>
  <input type="submit" name="sub">
  </form>



</div>
</div>

</div>


<?php

$_POST["sub"]

echo 'Welcome'. $_GET["login"] ;'votre mot de passe est :'. $_GET["mdp"];


?>



</body>










</html>
