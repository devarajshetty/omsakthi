<?php
//print_r($_POST);
$companyname = 'OM SAKTHI AUTO GARAGE';
$all_bill = json_decode($_POST['all_bill_det']);
//print_r($all_bill);exit();
//echo $all_bill->v_no;exit();
?>

<!DOCTYPE html>
<head>
  <title>Services booking</title>
  <style type="text/css">
  input#product_price {text-align: center;width: -webkit-fill-available;}
  	input{
  		border: none;
  	}
  	td{
  		text-align: center;
  	}
  </style>
</head>
	<body style="margin:0px;"><table style="height: 500px;" id="content" width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ccc" data-bgcolor="body-bg-dark" data-module="1" class="ui-sortable-handle currentTable">  
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
	 <td height="30" bgcolor="#f2f2f2" align="center" valign="middle" style="color: #008489; font-weight: 600; font-family:Open Sans, Arial, Helvetica, sans-serif;" ><!-- <img src="'.base_url()."images/logo/".$this->config->item('logo_image').'" border="0"  height="30" alt="" style="vertical-align: middle; padding: 10px; ">  --><?php echo '6A,Duraisamy Layout, Avarampalayam, Peelamedu, Coimbatore-641004,    PH:0422-2565658';?></td> 
	 </tr> 

	 <tr>  
	<td align="center">          
	 <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">              
	 <tbody><tr style="padding: 10px 10px 0px 10px; float: left">          
			   
	 <td align="center" valign="top">
					<table width="800" border="0" cellpadding="5" cellspacing="1" >
							<tbody style="font-family:Open Sans, Arial, Helvetica, sans-serif; font-size:13px;">
							<tr>
							  
							  <!-- <th width="70" bgcolor="#008489" style="color:#fff; font-size:15px;">Bill</th> -->
							  
							  <th align="right" class="toggleBtn" width="100%"><a id="download_pdf" style="cursor: pointer; cursor: hand;text-decoration:underline;margin-right: 5px;">Download</a><a type="button" id="printer" style="color:rgb(255, 90, 95); cursor: pointer; cursor: hand;text-decoration:underline;">Print</a></th>
							</tr><div style="width: 100%;">
							  <div  style="width: 50%;float: left;"><?php echo '<b>S.No: </b>'. $all_bill->ser_no; ?></div>
							  
							  <div  style="width: 50%;float: left;"><?php echo '<b>Date:</b> '. $all_bill->date_is; ?></div>
</div><div style="width: 100%;">
							   <div  style="width: 50%;float: left;"><?php echo '<b>Vehicle Details: </b>'.$all_bill->v_details.'<b> Vehicle No: </b>'.$all_bill->v_no; ?></div>
							  
							  <div style="width: 50%;float: left;"><?php echo '<b>K.M At Service: </b>'.$all_bill->km; ?></div>
							</div>
							<div style="width: 100%;">
								<div style="width: 25%;float: left;font-weight: bold;margin: 5px 0;">S.NO</div>
							  <div style="width: 50%;float: left;font-weight: bold;margin: 5px 0;">PRODUCT</div>
							  <div style="width: 25%;float: left;font-weight: bold;margin: 5px 0;">PRICE</div>
							</div>
							<?php
							$product_name_arr = array();
						foreach ($all_bill->product_name as $value) {
							$product_name_arr[] = $value;
							# code...
						}

						$product_price_arr = array();
						foreach ($all_bill->product_price as $value) {
							$product_price_arr[] = $value;
							# code...
						}
						// print_r($product_name_arr);
						// print_r($product_price_arr);exit();
					//	echo count($product_price_arr);exit;
							//echo  count($all_bill->product_name);
							for ($i=0; $i <count($product_price_arr); $i++) { 
								# code...
							 ?>
      <div style="width: 100%;"><div style="width: 25%;float: left;"><?php echo $i+1; ?></div>
      <div style="width: 50%;float: left;"><input type="text" name="product_name[]" id="product_price" readonly="readonly" value="<?php echo $product_name_arr[$i]; ?>"></div>
      <div style="width: 25%;float: left;"><input type="text" name="product_price[]" id="product_price" value="<?php echo $product_price_arr[$i]; ?>"></div></div><?php
      
    }
    $number = array_sum($product_price_arr);
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
  //echo $result . "Rupees  " . $points . " Paise";

?>
							
					
							
				</tbody></table>
			<br>
	 <div style="width: 100%;"><div style="width: 50%;float: right;"><b>Total:</b> <?php echo array_sum($product_price_arr); ?></div>	</div>
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
  	$(document).ready(function(){
  		
  		var doc = new jsPDF();

var specialElementHandlers = {
	"#editor": function(element, renderer){
		return true;
	}
};

    $("#download_pdf").click(function(){

    	$("#printer").hide();
    	$("#download_pdf").hide();
    	var vno = '<?php echo $all_bill->v_no; ?>';
    	var options = {
			  };
			  var pdf = new jsPDF("l", "mm", [297, 225]);
			  pdf.addHTML($("#content"), 0, 0, options, function() {
			    pdf.save(vno+".pdf");
			    $(".toggleBtn").show();
			  });

    });

  	});
  	  $("#printer").click(function(){

    	$("#printer").hide();
    	$("#download_pdf").hide();
    	window.print();

    });

  
  </script>