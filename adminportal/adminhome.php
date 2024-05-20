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
    <title>Document</title>
</head>
<body>
    <h1>THIS IS ADMIN HOME PAGE</h1><?php echo $_SESSION["username"] ?>
    <a href="../logout.php">Logout</p>
</body>
</html>