<?php
require "dbcon.php";
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$uname=$_POST['un'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$gender=$_POST['gen'];
$phone=$_POST['phno'];
$response=array();
if($con){
    $sql="INSERT INTO signup(fname, lname, username, email, pass, gender, phone) 
    VALUES ('$fname','$lname','$uname','$email','$pass','$gender','$phone')";
    
    if(mysqli_query($con,$sql)){
        header("Location:/home.html");
        // $response['msg']="Registered successfully";
        // echo json_encode($response);
    }else{
        echo"Failed To Registered";
    }    
 } else {
     $response['msg']="Connection Failed";
     echo json_encode($response);
}
mysqli_close($con);
?>