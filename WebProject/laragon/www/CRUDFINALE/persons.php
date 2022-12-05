<?php
  session_start();
  $_SESSION['CURR_PAGE'] = 'persons';


?>

<?php require_once("header.php");?>
<?php  
if (isset($_POST['btnadd'])) {
  $con = openConnection();

  $lastname = sanitizeInput($con, $_POST['txtlastname']);
  $firstname = sanitizeInput($con, $_POST['txtfirstname']);
  $sex = sanitizeInput($con, $_POST['drpsex']);
  $email = sanitizeInput($con, $_POST['txtemail']);

  $err = [];
  if (empty($lastname))
    $err[] = "Lastname is req";

  if(empty($firstname))
    $err[] = "firstname is req";
  if(empty($email))
    $err[] = "email is address  is req";
  
  if (empty($err)) {
    

    $strsql = "
      INSERT INTO persons(lastname,firstname,sex,email)
      VALUES ('$lastname','$firstname','$sex','$email')
    ";

  if(mysqli_query($con, $strsql))
    header('location: person-add-success.php');
  else
    $err[] = 'ERROR';


    
  }
   closeConnection($con);
}
?>

<div class="container-fluid">
	<div class="row">
		<?php require_once("nav.php");?>

    <main role="main" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Persons</h1>
      </div>

<form method="post">
  <div class="row mb-3">
    <label for="txtlastname" class="col-sm-2 col-form-label text-right">Last Name<span class="text-danger">*</span></label>
    <div class="col-sm-10">
        <input type="text" name="txtlastname" class="form-control" id="txtlastname" required autofocus="">
    </div>
  </div>
  <div class="row mb-3">
    <label for="txtfirstname" class="col-sm-2 col-form-label text-right">First Name<span class="text-danger">*</span></label>
    <div class="col-sm-10">
        <input type="text" name="txtfirstname" class="form-control" id="txtfirstname" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="drpsex" class="col-sm-2 col-form-label text-right">Sex<span class="text-danger">*</span></label>
    <div class="col-sm-10">
        <select name="drpsex" id="drpsex" class="form-control">
          <?php
          if (isset($arrSex)) {
              foreach ($arrSex as $key => $value) {
                echo '<option value="'.$value.'">'.$value.'</option>';
              }
          }


          ?>
        </select>
    </div>
  </div>
  <div class="row mb-3">
    <label for="txtemail" class="col-sm-2 col-form-label text-right">Email Address<span class="text-danger">*</span></label>
    <div class="col-sm-10">
        <input type="email" name="txtemail" class="form-control" id="txtemail" required>
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
      <button type="submit" name="btnadd" class="btn btn-primary">Add New Record</button>
    </div>
  </div>
  



</form>





      <h2>Persons List</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Sex</th>
                    <th>Email Adress</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>


                          <?php
                          $con = openConnection();
                          $strSql ="SELECT * FROM persons ORDER BY sex, firstname";
                          $recPersons = getRecord($con, $strSql);
                              if (!empty($recPersons)) {
                                foreach ($recPersons as $key => $value) {
                                echo'<tr>';
                                echo'<td>'.$value['firstname'].' '. $value['lastname'].'</td>';
                                echo'<td>'.$value['sex'].'</td>';
                                echo'<td>'.$value['email'].'</td>';
                                echo '<td>';
                                    echo'<a href="update-person.php?k='. $value['id'].'" class="btn btn-success">Edit</a> ';
                                    echo'<a href="delete-person.php?k='. $value['id'].'" class="btn btn-danger">Remove</a></td> ';
                                echo'</td';
                                echo '</tr>';
                                
                                }
                              }
                              else{

                              }


                          closeConnection($con);
                          ?>

            </tbody>
          </table>
      </div>
    </main>
  </div>
</div>

<?php require_once("footer.php");?>
 