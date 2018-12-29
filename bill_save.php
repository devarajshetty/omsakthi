<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omsakthi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$bill_details = $_POST['details'];
//echo $bill_details;exit;
$date_is = date("d/m/Y");

$sql = "INSERT INTO biils (date_is,bill_name, bill_details)
VALUES ('".$date_is."','".$_POST['name']."', '".$bill_details."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo 'ok';