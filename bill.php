<?php
//print_r($_POST);
$companyname = 'OM SAKTHI AUTO GARAGE';
?>

<!DOCTYPE html>
<head>
  <title>Services booking</title>
  <style type="text/css">
  	input{
  		border: none;
  	}
  	input#product_price {text-align: center;width: -webkit-fill-available;}
  	td{
  		text-align: center;
  	}
  </style>
</head>
	<body style="margin:0px;"><table id="content" width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ccc" data-bgcolor="body-bg-dark" data-module="1" class="ui-sortable-handle currentTable">  
	<tbody><tr>
	 <td>
	 <table width="800" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth" style="background-color:#ffffff;" data-bgcolor="light-gray-bg"> 
	 <tbody><tr>
	 <td height="30" bgcolor="#f2f2f2" align="center" valign="middle" style="color: #008489; font-weight: 600; font-family:Open Sans, Arial, Helvetica, sans-serif;" ><!-- <img src="'.base_url()."images/logo/".$this->config->item('logo_image').'" border="0"  height="30" alt="" style="vertical-align: middle; padding: 10px; ">  --><?php echo $companyname;?></td> 
	 </tr>  
	  <tr>
	 <td height="30" bgcolor="#f2f2f2" align="center" valign="middle" style="color: #008489; font-weight: 600; font-family:Open Sans, Arial, Helvetica, sans-serif;" ><!-- <img src="'.base_url()."images/logo/".$this->config->item('logo_image').'" border="0"  height="30" alt="" style="vertical-align: middle; padding: 10px; ">  --><?php echo 'All Two Wheeler Works Under Taken Here';?></td> 
	 </tr> 
	 <tr>
	 <td height="30" bgcolor="#f2f2f2" align="center" valign="middle" style="color: #008489; font-weight: 600; font-family:Open Sans, Arial, Helvetica, sans-serif;" ><!-- <img src="'.base_url()."images/logo/".$this->config->item('logo_image').'" border="0"  height="30" alt="" style="vertical-align: middle; padding: 10px; ">  --><?php echo '6A,Duraisamy Layout, Avarampalayam, Peelamedu, Coimbatore-641004,   PH:0422-2565658';?></td> 
	 </tr> 
	 <tr>  
	<td align="center">          
	 <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">              
	 <tbody><tr style="padding: 10px 10px 0px 10px; float: left">          
			   
	 <td align="center" valign="top">
					<table width="800" border="0" cellpadding="5" cellspacing="1" >
							<tbody style="font-family:Open Sans, Arial, Helvetica, sans-serif; font-size:13px;">
							<tr>
							  
							 <!--  <th width="70" bgcolor="#008489" style="color:#fff; font-size:15px;">Bill</th> -->
							  
							  <th align="right" class="toggleBtn" width="100%"><!-- <a id="download_pdf" style="cursor: pointer; cursor: hand;text-decoration:underline;">Download</a> --> <a type="button" id="printing" style="color:rgb(255, 90, 95); cursor: pointer; cursor: hand;text-decoration:underline;">Print</a></th>
							</tr><div style="width: 100%;">
							  <div style="width: 50%;float: left;"><?php echo '<b>S.No: </b>'. $_POST['ser_no']; ?></div>
							  
							  <div  style="width: 50%;float: left;"><?php echo '<b>Date: </b>'. $_POST['date_is']; ?></div>
</div><div style="width: 100%;">
							   <div  style="width: 50%;float: left;"><?php echo '<b>Vehicle Details: </b>'.$_POST['v_details'].'<b> Vehicle No: </b>'.$_POST['v_no']; ?></div>
							  
							  <div  style="width: 50%;float: left;"><?php echo '<b>K.M At Service:</b> '. $_POST['km']; ?></div>
							</div>
							<div style="width: 100%;">
								<div style="width: 25%;float: left;font-weight: bold;margin: 5px 0;">S.NO</div>
							  <div style="width: 50%;float: left;font-weight: bold;margin: 5px 0;">PRODUCT</div>
							  <div style="width: 25%;float: left;font-weight: bold;margin: 5px 0;">PRICE</div>
							</div>
							<?php
							
						//	echo $json_val;
							//$i=0;$j = 1;
							
							$jsn_array = array('ser_no' => $_POST['ser_no'],'date_is' => $_POST['date_is'],'v_details' => $_POST['v_details'],'v_no' => $_POST['v_no'],'km' => $_POST['km']);
							$js_det = array();
							$j = 1;
						for ($i=0; $i < count($_POST['product_price']); $i++) { 


									# code...
								
								# code...
									if($_POST['product_price'][$i] != ''){
										$js_det[$j] = $_POST['product_name'][$i];
										$js_det_price[$j] = $_POST['product_price'][$i];
							 ?>
      <div style="width: 100%;"><div style="width: 25%;float: left;"><?php echo $j; ?></div>
      <div style="width: 50%;float: left;"><input type="text" name="product_name[]" id="product_price" readonly="readonly" value="<?php echo $_POST['product_name'][$i]; ?>"></div>
      <div style="width: 25%;float: left;text-align: center;"><input type="text" name="product_price[]" id="product_price" value="<?php echo $_POST['product_price'][$i]; ?>"></div></div><?php

      $i++;$j++;
      }
    }
    $price_new = array('product_price' => $js_det_price);
    $prod_new = array('product_name' => $js_det);
    $jsn_array = array_merge($jsn_array,$price_new);
    $jsn_array = array_merge($jsn_array,$prod_new);


      $number = array_sum($_POST['product_price']);
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
          // echo '<pre>';
          // print_r( $jsn_array);
          $json_val = json_encode($jsn_array);

?>
							
					
							
				</tbody></table>
				<br>

	 <div style="width: 100%;"><div style="width: 50%;float: right;"><b>Total:</b> <?php echo array_sum($_POST['product_price']); ?></div>	</div> 
					<div style="width: 100%;"><div style="width: 50%;float: right;"><b>Words:</b> <?php echo strtoupper($result . "Rupees  " . $points); ?></div>	</div>
					<div style="width: 100%;float: left;">
						<div style="width: 50%;float: left;">
					<div style="width: 100%;"><p>Next Due Date</p></div>
					<div style="width: 100%;"><p>----------------------</p></div>
				</div>
<div style="width: 50%;float: right;">

					<div style="width: 100%;"><p>OM SAKTHI AUTO GAARAGE</p></div>
					<div style="width: 100%;"><p>----------------------</p></div>
				</div>
				
			</div>

	 </body>	
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
  <script>
  	
$("#printing").click(function(){
	var det = '<?php echo $json_val;?>';
	$("#printing").hide();
	$.ajax({
				  type: "POST",
				  async: false, 
				  url: 'http://localhost/omsakthi/bill_save.php',
				  data: {'details':det},
				  success: function(data){
					window.print();
					
				  }
				  
				});
});
  

  
  </script>