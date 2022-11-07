<?php
require "dbcon.php";
// session_start();
$email= $_POST['email'];
$pass= $_POST['pass'];
$response=array();
if($con){
    // $sql=  "INSERT INTO signup(fname, lname, username, email, pass, gender, phone) 
    // VALUES ('sanjay','kumar','sanjaysk','sanjay@gmail.com','12345678','Male','9008678765')";
    
    // if(mysqli_query($con,$sql)){
    //     $response['msg']="Registered successfully";
    //     echo json_encode($Responce);
    // }else{
    //     echo"Failed To Registered";
    // }
    $sql="select email from signup where email='$email' and pass='$pass' ";
    $check = mysqli_fetch_array(mysqli_query($con,$sql));
    if(isset($check)){
        header("Location:/home.html");
        // $response['msg']="Login Success";
        // echo json_encode($response);
    } else {
        $response['msg']="Login Failed";
        echo json_encode($response);
    }
    
 } else {
     $response['msg']="Connection Failed";
     echo json_encode($response);
}
mysqli_close($con);
?>