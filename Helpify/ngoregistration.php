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
    $organisation_name = $_POST['orgName'];
    $ngo_type = $_POST['type'];
    $ngo_address = $_POST['address']; 
    $contact_number = $_POST['contact'];
    $mission = $_POST['mission'];
    $lack_of_resources = $_POST['resources'];
    $payment_link = $_POST['payment_link']; 
    $governing_doc = $_POST['document'];
    $website = $_POST['website'];

    $sql_query = "INSERT INTO ngo_details(organisation_name,ngo_type,ngo_address,contact_number,mission,lack_of_resources,payment_link,governing_doc,website) VALUES('$organisation_name','$ngo_type','$ngo_address','$contact_number','$mission','$lack_of_resources','$payment_link','$governing_doc','$website')";
    if(mysqli_query($conn,$sql_query)){
        echo "NGO registered successfully!";
        header("Location:ngo-ngo.html");
    }else{
        echo "Error" . $sql . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>