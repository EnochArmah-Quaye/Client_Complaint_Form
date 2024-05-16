<?php

require_once('conn.php');

if(isset($_POST['submit'])){
  //Getting and storing inputs in variables
  $firstName= $_POST['firstName'];
  $lastName= $_POST['lastName'];
  $dob= $_POST['dob'];
  $sex= $_POST['sex'];
  $phone= $_POST['phone'];
  $email= $_POST['email'];
  $address= $_POST['address'];
  $vulnerability= $_POST['vulnerability'];
  $feedbackType= $_POST['feedbackType'];
  $feedback= $_POST['feedback'];

  
//Code to send data from form entries to database
$sql="INSERT INTO complaint (id, firstName, lastName, dob, sex, phone, email, ad, vulnerability, type_of_feedback, feedback) VALUES ('0', '$firstName', '$lastName', '$dob', '$sex', '$phone', '$email', '$address', '$vulnerability', '$feedbackType', '$feedback')";

//Fire query to save and run and also check it with the if statament
$rsl= mysqli_query($conn,$sql);
  
if($rsl){
  echo "<p>Message has been sent successfully</p>";
}
else{
  echo "<p> Could not insert record:".mysqli_error($conn);
} 

//Connection closed
mysqli_close($conn);
}

?>



