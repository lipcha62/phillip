<?php include('db.php');
include('header.php');


// Insert data into the database
if (isset($_POST['submit'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middleinitial = $_POST['middleinitial']; 
    $age = $_POST['age'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    
    $sql = "INSERT INTO member (lastname, firstname, middleinitial, age, address, contact) VALUES ('$lastname', '$firstname','$middleinitial','$age','$address','$contact')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view2.php';</script>";
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


    <center><h2>MEMBERS</h2></center>

    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <center>LAST NAME:<br>
      <input type="text" name="lastname"><br>
      FIRST NAME:<br>
      <input type="text" name="firstname"><br>
      MIDDLE INITIAL:<br>
      <input type="text" name="middleinitial"><br>
       AGE:<br>
     <input type="text" name="age"><br>
      ADDRESS:<br>
     <input type="text" name="address"><br>
      CONTACT:<br>
     <input type="text" name="contact"><br>
      <input type="submit" name="submit" value="Submit">
      <a href="view2.php">BACK </a> </center>
<?php

?>

      <style type="text/css">
    input[type=text] {
   width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  align-content: center;
  background: yellowgreen;
}  

</body>
</html>
