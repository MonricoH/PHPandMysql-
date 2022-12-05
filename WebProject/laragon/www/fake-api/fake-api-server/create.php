<?php
  header("Access-Control-Allow-Origin: *");
  require('functions.php');
  $con = openConnection();
  if(isset($_POST['title'])) {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $developer = $_POST['developer'];
    $publisher = $_POST['publisher'];
    $programmer = $_POST['programmer'];
    $composer = $_POST['composer'];
    $engine = $_POST['engine'];
    $genre = json_encode($_POST['genre']);
    $date_released = $_POST['date_released'];
    $duration = json_encode(['hours' => $_POST['hours'], 'mins' => $_POST['mins']]);
    $strSql = "
        INSERT INTO playlist(title, artist, genre, date_released, duration, developer, publisher, programmer, composer, engine) 
        VALUES('$title', '$artist', '$genre', '$date_released', '$duration', '$developer', '$publisher', '$programmer', '$composer', '$engine')
    ";
    mysqli_query($con, $strSql);
    echo 'success';
  }
  closeConnection($con);
?>