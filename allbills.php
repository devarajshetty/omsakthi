<!DOCTYPE html>
<html>
<head>
	<style>
input[type="submit"] {
    background-color: #fe0000;
    color: #fff;
    border-radius: 2px;
    padding: 6px 33px;
        margin: 12px 0px;
}
input {
    background-color: #A59F9D;
    border: navajowhite;
    color: #fe0000;
    text-align: center;
    padding: 5px 0px;
    border-radius: 2px;
}
</style>
</head><body style="background-repeat: no-repeat; background-image: url(./images/bg1.jpg);">

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omsakthi";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$date_is = $_POST['bill_date_is'];
	$bill_sno = "SELECT * FROM biils WHERE date_is = '".$date_is."'";
    $result_is = mysqli_query($conn, $bill_sno);
  
   
 if (mysqli_num_rows($result_is) > 0) {
     while($row = mysqli_fetch_assoc($result_is)) {

$jsn = $row["bill_details"];
    		$pro_details = json_decode($row['bill_details']);
    		 
//echo $pro_details->v_no;
echo '<form action="search_allbills.php" method="post">';
echo "<input type='hidden' name='all_bill_det' value='".$jsn."'>";
echo '<input type="text" name="b_v_no" id="b_v_no" readonly="readonly" value="'.$pro_details->v_no.'">';
echo '<input type="submit" value="print">';
echo "</form>";
    	
    


    }
    
   

}
else {
	echo "<b style='color: #fff;'>No Data</b>";
}
    ?>
    </body>
</html>