<?php
  header("Access-Control-Allow-Origin: *");
  require('functions.php');
  $con = openConnection();
  $rec = getRecord($con, "SELECT * FROM playlist");
  echo json_encode($rec);
  closeConnection($con);
?>