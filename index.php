<!DOCTYPE html>
<html>
<head>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<title>Om Sakthi Auto Garage</title>
</head>
<body>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omsakthi";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);


    $bill_sno = "SELECT * FROM biils ORDER BY `id` DESC LIMIT 1";
    $result_is = mysqli_query($conn, $bill_sno);
    $bil_no = mysqli_fetch_assoc($result_is);
    $bil_no = $bil_no['id']+1;
// mysqli_close($conn);


?>
<div id="container">
	<div id="header">
<h1>OM SAKTHI AUTO GARAGE</h1>
<h4>All Two Wheeler Works Under Taken Here</h4>
<hr>
<p>6A,Duraisamy Layout, Avarampalayam, Peelamedu, Coimbatore-641004</p>
<hr>
<form action="bill.php" method="post" name="bill">
<small>No: </small><input type="text" value="<?php echo $bil_no; ?>" name="ser_no" id="ser_no" readonly="readonly">
<small>Customer Name: </small><input type="text" name="name_cus" id="name_cus">
<small>Date:</small><input type="text" name="date_is" id="date_is" value="<?php echo date('d-m-Y'); ?>" readonly="readonly">
<small>Vehile Details:</small><input type="text" name="v_details" id="v_details">
<small>Vehile No: </small><input type="text" name="v_no" id="v_no">
<small>K.M at the time of services: </small><input type="text" name="km" id="km">
</div>
<hr>
<div id="content">

<table>
  <tr>
    <th>S.NO</th>
    <th>PRODUCT</th>
    <th>PRICE</th>
  </tr>
  
    <?php
    $i =1;
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
      <tr><td><?php echo $i; ?></td>
      <td><input type="text" name="product_name[]" id="product_price" readonly="readonly" value="<?php echo $row["name"]; ?>"></td>
      <td><input type="text" name="product_price[]" id="product_price" value=""></td></tr><?php
       $i++;
    }
} else { ?>
    <td>No Items</td><?php
}
?>
    
   
 
  
</table>
<input type="submit" value="print">
</form>
<form action="allbills.php" method="post"><input type="text" name="bill_date_is" id="bill_date_is" value=""><input type="submit" value="Search">
</form>
<!-- <div id="totala_price_div">
	<small>Total Price: </small><input type="text" readonly="readonly" name="tot_price" id="tot_price">
</div>	
<div id="totala_price_div">
	<small>Rupees: </small><p id="tot_price_rup"></p>
</div> -->
	</div>
<hr>
	<div id="footer">
<!-- <small>Next Due Date: </small><input type="text" name="due" id="due"> -->
<h2>OM SAKTHI AUTO GAARAGE</h2>
	</div>

</div>
</body>
</html>