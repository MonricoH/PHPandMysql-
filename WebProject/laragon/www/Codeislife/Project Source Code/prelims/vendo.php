<?php
    $products = array(
        'Coke'              => ,
        'Sprite'            => ,
        'Royal'             => ,
        'Pepsi'             => ,
        'Mountain Dew'      => 
    );    
    $productSizes = array(
        0       => 'Regular',
        5       => 'Up-Size',
        10      => 'Jumbo'
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <h2>Vendo Machine</h2>
    <form method="post">
        <fieldset style="width: 500px;">
            <legend>Products:</legend>
            <?php            
                if(isset($products)) {
                    foreach($products as $key => $value) {
                        echo '<input type="checkbox" name="chkProducts[]" id="chk' . $key . '" value="' . $key . '"> ';
                        echo '<label for="chk' . $key . '">' . $key . ' - ₱ ' . $value . '</label><br>';
                    }
                }
            ?>                    
        </fieldset> 
        
        <fieldset style="width: 500px;">
            <legend>Options:</legend>
            <label for="drpSize">Size</label>
            <select name="drpSize" id="drpSize">
                <?php
                    if(isset($productSizes)) {
                        foreach($productSizes as $key => $value)
                            echo '<option value="' . $key . '">' . $value . ($key != 0 ? ' (add ₱ ' . $key . ')' : '') . '</option>';
                    }
                ?>                
            </select>

            <label for="txtQuantity">Quantity</label>
            <input type="number" name="txtQuantity" id="txtQuantity" value="0">
            <button type="submit" name="btnCheckOut">Check Out</button>
        </fieldset>
    </form>

    <?php
        if(isset($_POST['btnCheckOut'])) {
            echo '<hr>';
            if(isset($_POST['chkProducts']) && $_POST['txtQuantity'] > 0) {
                $selectedProducts = $_POST['chkProducts'];
                $size = $_POST['drpSize'];
                $qty = $_POST['txtQuantity'];
                
                $totalQty = $qty * count($selectedProducts);
                $totalAmount = 0;

                echo '<h3>Purchase Summary</h3>';
                echo '<ul>';
                    foreach($selectedProducts as $key => $productName) {
                        $amount = ($products[$productName] + $size) * $qty;
                        $totalAmount += $amount;
                        echo '<li>' . $qty . ($qty > 1 ? ' pieces' : ' piece') . ' of ' . $productSizes[$size] . ' ' . $productName . ' amounting to ₱ ' . $amount . '</li>';                        
                    }
                echo '</ul>';
                echo '<b>Total Number of Items: </b>' . $totalQty . '<br>';
                echo '<b>Total Amount: </b>' . $totalAmount;
            }
            else
                echo 'No Selected Product, Try Again. ';
        }
    ?>
</body>
</html>