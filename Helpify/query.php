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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $message = $_POST['message'];

    $sql_query = "INSERT INTO query_details(name,email,phone,message) VALUES('$name','$email','$phone','$message')";

    if(mysqli_query($conn,$sql_query)){
        echo "Query subumitted successfully!";
        header("Location:homepage.html");
    }else{
        echo "Error" . $sql . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>