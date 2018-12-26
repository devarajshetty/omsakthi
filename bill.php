<?php
print_r($_POST);
$companyname = 'OM SAKTHI AUTO GARAGE';
?>

<!DOCTYPE html>
<head>
  <title>Services booking</title>
  <style type="text/css">
  	input{
  		border: none;
  	}
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
	<td align="center">          
	 <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">              
	 <tbody><tr style="padding: 10px 10px 0px 10px; float: left">          
			   
	 <td align="center" valign="top">
					<table width="800" border="0" cellpadding="5" cellspacing="1" >
							<tbody style="font-family:Open Sans, Arial, Helvetica, sans-serif; font-size:13px;">
							<tr>
							  
							  <th width="70" bgcolor="#008489"style="color:#fff; font-size:15px;">Bill</th>
							  
							  <th align="right" class="toggleBtn" width="100%"><!-- <a id="download_pdf" style="cursor: pointer; cursor: hand;text-decoration:underline;">Download</a> --> <a onClick="window.print()" TARGET="_blank" style="color:rgb(255, 90, 95); cursor: pointer; cursor: hand;text-decoration:underline;">Print</a></th>
							</tr><tr>
							  <th width="70" style="color:#000; font-size:15px;"><?php echo 'S.No: '. $_POST['ser_no']; ?></th>
							  
							  <th align="right" class="toggleBtn" width="100%"><?php echo 'Date: '. $_POST['date_is']; ?></th>
</tr><tr>
							   <th width="70" style="color:#fff; font-size:15px;"><?php echo $_POST['v_details'].$_POST['v_no']; ?></th>
							  
							  <th align="right" class="toggleBtn" width="100%"><?php echo $_POST['km']; ?></th>
							</tr>
							<tr>
								<th width="75">S.NO</th>
							  <th width="75">PRODUCT</th>
							  <th width="75">PRICE</th>
							</tr>
							<?php
							for ($i=0; $i < count($_POST['product_name']); $i++) { 
								# code...
							 ?>
      <tr><td width="75"><?php echo $i+1; ?></td>
      <td width="75"><input type="text" name="product_name[]" id="product_price" readonly="readonly" value="<?php echo $_POST['product_name'][$i]; ?>"></td>
      <td width="75"><input type="text" name="product_price[]" id="product_price" value="<?php echo $_POST['product_price'][$i]; ?>"></td></tr><?php
      
    }

?>
							
						 
							
				</tbody></table>
				</td>       
	 </tr>          
	 </tr>
	 
	 <tr>
	      
	 </tr>        
	 <tr>         
	 <td>
	 <table style="font-family:Open Sans, Arial, Helvetica, sans-serif; font-size: 13px; " width="100%" border="0" cellspacing="10" cellpadding="6" align="center">              
	 <tbody>
	 	        
	 </tbody></table> 
	 </td>      </tr>  

	 </tbody></table>
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

    // jQuery(document).ready(function($) {
    // 	$(".toggleBtn").hide();
    // 	var options = {
			 //  };
			 //  var pdf = new jsPDF("l", "mm", [297, 225]);
			 //  pdf.addHTML($("#content"), 0, 0, options, function() {
			 //    pdf.save("pageContent.pdf");
			 //    $(".toggleBtn").show();
			 //  });

    // });

  	});
  </script>