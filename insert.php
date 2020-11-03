<?php

$crop_name = $_POST['crop_name'];
$variety_name = $_POST['variety_name'];
$qty_wt = $_POST['qty_wt'];
$sell_price = $_POST['sell_price'];
$farmer_name = $_POST['farmer_name'];
$vil_name = $_POST['vil_name'];
$state_name = $_POST['state_name'];
$pin = $_POST['pin'];
$contact_no = $_POST['contact_no'];

if (!empty($crop_name) || !empty($variety_name) || !empty($qty_wt) || !empty($sell_price) || !empty($farmer_name) || !empty($vil_name) || !empty($state_name) || !empty($pin) || !empty($contact_no))
{

 $host = "localhost";
    $dbUsername = "id13519050_viditawasthi2";
    $dbPassword = "Greenday@1965";
    $dbname = "id13519050_mydb";

    //Creating connection

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  //if there is any error in creating Con. then close

    if (mysqli_connect_error())
 {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

    }


    else

     {

     $stmt = $conn->prepare( "INSERT Into sell_request (crop_name, variety_name, qty_wt, sell_price, farmer_name, vil_name, state_name, pin, contact_no  ) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");

     //Prepare statement

     $stmt->bind_param("ssiisssii",$crop_name,$variety_name,$qty_wt,$sell_price,$farmer_name,$vil_name,$state_name,$pin,$contact_no);
     $stmt->execute();

      echo "Your Selling Request has been Saved Sucessfully";


     $stmt->close();
     $conn->close();
    }

}

else
{

 echo "All fields are Required";
 die();

}
?>
