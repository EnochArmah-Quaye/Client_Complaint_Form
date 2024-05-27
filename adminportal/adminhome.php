<?php 
  session_start();

  if(!isset($_SESSION["username"])){
    header("location:login1.php");
  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/main.css">
<script src="../js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
      button a{
        text-decoration-line:none;
        color: white;
    }
    </style>
</head>
<body>
  <div class="container">
    <h1>THIS IS ADMIN HOME PAGE</h1><?php echo $_SESSION["username"] ?>
    <button class="btn btn-primary" ><a href="../logout.php">Logout</p></button>
</div>  
</body>
</html>