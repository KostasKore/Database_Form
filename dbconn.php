<?php
$con = mysqli_connect("localhost", "root", "" , "database_db");

if(!$con){
  echo "Not connected";
}


if  (isset($_POST["sub_button"])
    && !empty($_POST["companyName"])
    && !empty($_POST["details"])
    && !empty($_POST["address"])
    && !empty($_POST["addnumber"])
    && !empty($_POST["plz"])
    && !empty($_POST["email"])
    && !empty($_POST["phone"])
    && !empty($_POST["size"])
    && !empty($_POST["indust"])
    && !empty($_POST["textArea"])
    ) {

  $companyName = $_POST["companyName"];
  $details = $_POST["details"];
  $address = $_POST["address"];
  $number = $_POST["addnumber"];
  $plz = $_POST["plz"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $size = $_POST["size"];
  $indust = $_POST["indust"];
  $textArea = $_POST["textArea"];

  }//if isset


$email_from = 'korekostas@hotmail.com';
$email_subj = "New Form";
$email_body = "New message from $details. \n".
              "Email address: $email \n".
              "The message is the following: $textArea".

$to = 'korekostas@hotmail.com';
$headers = "From: $email_from \r\n";

mail($to, $email_subj, $email_body, $headers);


$companyName = mysqli_real_escape_string($con, $_POST['companyName']);
$details = mysqli_real_escape_string($con, $_POST['details']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$addnumber = mysqli_real_escape_string($con, $_POST['addnumber']);
$plz = mysqli_real_escape_string($con, $_POST['plz']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$size = mysqli_real_escape_string($con, $_POST['size']);
$indust = mysqli_real_escape_string($con, $_POST['indust']);
$textArea = mysqli_real_escape_string($con, $_POST['textArea']);


$sql = "INSERT INTO details(companyName, details, address, addnumber, plz, email, phone, size, indust, textArea)
VALUES ('$companyName', '$details', '$address', '$addnumber', '$plz', '$email', $phone, $size, $indust, $textArea)";


if (!mysqli_query($con, $sql)) {

  die('Error: ' . mysqli_error($con));
}

else
{
    echo "Successfully Added";
}

header("refresh:2; url=index.html");

 ?>
