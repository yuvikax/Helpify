<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="helpify";

$conn = mysqli_connect($server_name,$username,$password,$database_name);
//check connection
if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $user_type = $_POST['user-type'];
    $region = $_POST['region']; 
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql_query = "INSERT INTO user_details(first_name,last_name,type,region,phone,email,pass) VALUES('$first_name','$last_name','$user_type','$region','$phone','$email','$pass')";
    if(mysqli_query($conn,$sql_query)){
        echo "User registered successfully!";
        header("Location:findngo.html");
    }else{
        echo "Error" . $sql . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>