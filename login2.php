<?php 
//Connection to Database
require_once('conn.php');



if(!isset($_SESSION)){
    session_start();
}
//Login authentication
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["userName"];
    $password=$_POST["password2"];

    $sql="SELECT * from signup where username= '".$username."' AND password1= '".$password."'";

    $rsl=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($rsl);

    if($row["usertype"]=="user")
    {
        $_SESSION["username"]=$username;
        header("location:userhome.php");
    }
    elseif($row["usertype"]=="admin")
    {
        $_SESSION["usertype"]=$username;
        header("location:adminhome.php");
    }
    else{
        echo "<p> Username and Password Incorrect</p>";
    }
}
?>