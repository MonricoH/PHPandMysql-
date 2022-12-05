<?php 

	$product = array(

		'Coke' => 15,
		'Sprite' => 20,
		'Royal' => 20,
		'Pepsi' => 15,
		'Mountain Dew' => 20,





	);

	$productsize = array(

		0 => 'regular',
		5 => 'upsize',
		10 => 'jumbo',
		40 => 'bbc',
	);






 ?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vendo Machine</title>
</head>
<body>
	<h2>Vendo Machine</h2>

	<form method="post">
		
	<fieldset style="width: 500px;">
			<legend>Products:</legend>
			<?php 
				if (isset($product)) {
					foreach ($product as $key => $value) {
						echo '<input type="checkbox" name="chkproduct[]" id="chk' . $key .'"  value="'. $key .'">';
						echo '<label for="chk' . $key .'">'.$key.'  -P  '. $value .'<br></label>';
					}
					
				}
			?>
	</fieldset>
		<fieldset style="width: 500px;">
			<legend>Options:</legend>
			<label for="drpsize" >Size</label>
			<select name="drpsize" id="drpsize">
			 <?php 

			 	if (isset($productsize)) {
			 		foreach ($productsize as $key => $value) {
			 			echo '<option value ="'.$key.'">' . $value . ($key != 0 ? '(add P '. $key.')' : '').  '</option>';
			 		}
			 	}

			  ?>
			</select>
			<label for="txtqty">Quantity</label>
			<input type="number" name="txtQuantity" id="txtQuantity" value="0">

			<button type="submit" name="btncheckout">Check Out</button>
			
	</fieldset>

	</form>

	<?php
		if (isset($_REQUEST['btncheckout'])) {
			echo '<hr>';
			if (isset($_REQUEST['chkproduct']) && $_REQUEST['txtQuantity'] > 0 ) {
				$selectedproduct = $_REQUEST['chkproduct'];
				$size = $_REQUEST['drpsize'];
				$qty = $_REQUEST['txtQuantity'];

				$totalqty = $qty * count($selectedproduct);
				$totalAmount = 0;


				echo '<h3>Purchase Summary</h3>';
				echo '<ul>';
				foreach ($selectedproduct as $key => $productname) {
					
					$amount = ($product[$productname] + $size) * $qty;
					$totalAmount += $amount;

					echo '<li>'. $qty . ($qty > 1 ? ' pieces ' : ' piece '). 'of ' . $productsize[$size] . ' '. $productname . 'Amounting to P '.$amount. '<br>';
				}
				echo '</ul>';
				echo '<b>Total Number of items:</b>' .$totalqty.'<br>';
				echo '<b>Total amount:</b> '.$totalAmount;
			}
				



		   	else
			echo "No selected Product";
		}
		



	?>



</body>
</html>