<!DOCTYPE html>
<html>
<head>
	<style>
  input#product_price {

    background-color: #A59F9D;
    border: navajowhite;
    color: #fe0000;
    text-align: center;
}
input {
    background-color: #A59F9D;
    border: navajowhite;
    color: #fe0000;
    text-align: center;
    padding: 5px 0px;
    border-radius: 2px;
}
  .heading {
  color: #fff;text-align: center;
  font-size: 14px;
  }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #A59F9D;
  text-align: left;
  padding: 8px;
}
input[type="submit"] {
    background-color: #fe0000;
    color: #fff;
    border-radius: 2px;
    padding: 6px 33px;
        margin: 12px 0px;
}

tr:nth-child(even) {
  /*background-color: #dddddd;*/
}
</style>
</head>
<title>Om Sakthi Auto Garage</title>
</head>
<body style="background-size: cover;background-repeat: no-repeat; background-image: url(./images/d_004.jpg);">
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
<div id="container" style=" box-shadow: inset 0 0 0 3000px rgba(255,255,255,0.1);">
	<div id="header">
<h1 class="heading" style="font-size: 19px;">OM SAKTHI AUTO GARAGE</h1>
<h3 class="heading" style="font-size: 19px;">All Two Wheeler Works Under Taken Here</h3>
  
<h4 class="heading" style="font-size: 19px;">6A,Duraisamy Layout, Avarampalayam, Peelamedu, Coimbatore-641004</h4>
<hr>
<form action="bill.php" method="post" name="bill">
<small class="heading">No: </small><input type="text" value="<?php echo $bil_no; ?>" name="ser_no" id="ser_no" readonly="readonly">
<small class="heading">Date:</small><input type="text" name="date_is" id="date_is" value="<?php echo date('d-m-Y'); ?>" readonly="readonly">
<small class="heading">Vehile Details:</small><input type="text" name="v_details" id="v_details">
<small class="heading">Vehile No: </small><input type="text" name="v_no" id="v_no">
<small class="heading">K.M at the time of services: </small><input type="text" name="km" id="km">
</div>
<hr>
<div id="content">

<table>
  <tr>
    <th class="heading">S.NO</th>
    <th class="heading">PRODUCT</th>
    <th class="heading">PRICE</th>
  </tr>
  
    <?php
    $i =1;
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
      <tr><td class="heading"><?php echo $i; ?></td>
      <td style="text-align: center;width: -webkit-fill-available;"><input style="width: -webkit-fill-available;" type="text" name="product_name[]" id="product_price" readonly="readonly" value="<?php echo strtoupper($row["name"]); ?>"></td>
      <td style="text-align: center;"><input type="text" name="product_price[]" placeholder="Enter Price" id="product_price" value=""></td></tr><?php
       $i++;
    }
} else { ?>
    <td>No Items</td><?php
}
?>
    
   
 
  
</table>
<input style="float: right;" type="submit" value="print">
</form>
<form action="allbills.php" method="post"><input type="text" placeholder="31/12/2018" name="bill_date_is" id="bill_date_is" value=""><input type="submit" value="Search">
</form>
<!-- <div id="totala_price_div">
	<small>Total Price: </small><input type="text" readonly="readonly" name="tot_price" id="tot_price">
</div>	
<div id="totala_price_div">
	<small>Rupees: </small><p id="tot_price_rup"></p>
</div> -->
	</div>
<hr>
	<!-- <div style="background-repeat: no-repeat; background-image: url(./images/banner.png); height: 217px;" id="footer">

	</div> -->

</div>
</body>
</html>