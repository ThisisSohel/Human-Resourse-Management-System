<?php
if ($_POST['id']===''){
    echo'Please enter your department id'. "<br>";
    return false;
}

if ($_POST['name']===''){
  echo'Please enter your department name'. "<br>";
  return false;
}

if ($_POST['locationId']===''){
  echo'Please enter your location id'. "<br>";
  return false;
}

?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrms_final";

try {
  $idValue = $_POST['id'];
  $nameValue = $_POST['name'];
  $locationIdValue = $_POST['locationId'];



  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $sql = "INSERT INTO departments (id, name, locations_id) VALUES('$idValue', '$nameValue', '$locationIdValue')";

  $conn->exec($sql);

  echo "New record created successfully";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>