<!DOCTYPE html>
<html>
<body>
<?php  include 'server.php'; ?>
<br />
<br />


<?php
echo "My first PHP script!";
?>

<br/>

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>

<br/>

<?php
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>

<br />

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
?>
<br/>

<form class="row g-3 needs-validation" action="index.php" method="POST">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" name="firstname" class="form-control" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" name="lastname" class="form-control" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">E-mail</label>
    <input type="text" name="email" class="form-control" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
</body>
</html>