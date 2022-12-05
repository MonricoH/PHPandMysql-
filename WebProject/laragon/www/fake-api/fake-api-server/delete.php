<?php
  header("Access-Control-Allow-Origin: *");
  require('functions.php');
  $con = openConnection();
  if(isset($_POST['action'])) {
    if(isset($_POST['action'])=="delete") {
      delete();
    }
  }
  function delete(){
    global $con;
    $id = $_POST['id'];
    $rows = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM playlist WHERE id =$id"));
    mysqli_query($con, "DELETE FROM playlist WHERE id =$id");
    echo 1;
  }
 

  closeConnection($con);
?>