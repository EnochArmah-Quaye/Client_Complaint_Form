<?php 

require_once('../conn.php');



//Taking inputs from the form
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $name= $_POST['name'];
    $staff= $_POST['StaffID'];
    $password= $_POST['password'];
    $department= $_POST['department'];
    $usertype= $_POST['users'];

    //Creatio of query statement
    $sql="INSERT INTO signup (id,username,name1,staff_id,password1,department_unit,usertype) VALUES('0','$username','$name','$staff','$password','$department','$usertype')";
    
    $rsl= mysqli_query($conn,$sql);

    if($rsl)
    {
        echo "<p>User was added successfully</p>";
    }
    else{
        echo "<p>User was not added</p>";
    }
}



mysqli_close($conn);
?>