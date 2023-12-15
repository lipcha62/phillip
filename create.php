<?php include('db.php');
include('header.php');

// Insert data into the database
if (isset($_POST['submit'])) {
    $firstname = $_POST['lastname'];
    $lastname = $_POST['firstname'];
    $middleinitial = $_POST['middleinitial']; 
    $address = $_POST['address'];
    
    $sql = "INSERT INTO applicant (lastname, firstname, middleinitial, address) VALUES ('$lastname', '$firstname', '$middleinitial','$address')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="style/style.css">
    <title></title>

</head>
<body>


    <center><h2>APPLICANT</h2></center>

    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <center>LAST NAME:<br>
      <input type="text" name="lastname"><br>
      FIRST  NAME:<br>
      <input type="text" name="firstname"><br>
      MIDDLE INITIAl:<br>
      <input type="text" name="middleinitial"><br>
      ADDRESS:<br>
     <input type="text" name="address"><br>
      <input type="submit" name="submit" value="Submit">
      <a href="view.php">BACK </a></center>
<?php

?>

      <style type="text/css">
    input[type=text] {
   width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  align-content: center;
  background: cyan;
}  

</body>
</html>
