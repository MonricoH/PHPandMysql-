<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>
    <h2>Peys App</h2>
    <form method="post">
        <label for="rngSize">Select Photo Size: </label>
        <input type="range" name="rngSize" id="rngSize" min="10" max="100" step="10"><br>

        <label for="clrPickerBorder">Select Border Color: </label>
        <input type="color" name="clrPickerBorder" id="clrPickerBorder"><br>

        <button type="submit" name="btnProcess">Process</button>
    </form>
    <br>

    <?php
        $photoSize = '0.6';
        $borderColor = '#000';
        if(isset($_POST['btnProcess'])) {
            $photoSize = $_POST['rngSize'] * 0.01;
            $borderColor = $_POST['clrPickerBorder'];
        }        
    ?>

    <img src="renmark.jpg" style="transform: scale(<?php echo $photoSize; ?>); border: <?php echo $borderColor; ?> solid 5px;">
</body>
</html>