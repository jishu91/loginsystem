<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Welcome page</title>
  </head>
  <body>
    <h1 class="text-center text-warning mt-5">Welcome
    <?php echo $_SESSION['username'];?>
    </h1>

    <div class="container">
        <a href="logout.php" class="btn btn-primary" mt-5>Logout</a>
    </div>

    
  </body>
</html>