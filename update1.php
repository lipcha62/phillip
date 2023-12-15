<?php include('db.php');
include('header.php');

// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

   $firstname = $_POST['lastname'];
    $lastname = $_POST['firstname'];
    $middleinitial = $_POST['middleinitial']; 
    $age = $_POST['age'];
    $address = $_POST['address'];

    $sql = "UPDATE worker SET lastname='$lastname', firstname='$firstname', middleinitial='$middleinitial', age='age', address='$address' WHERE ID= $id";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view.php';</script>";
       }  else {
        echo "<script>alert('SOMETHING WENT WRONG!');</script>";

    }

}
}



?> 

<html>
<head>  
<link rel="stylesheet" type="text/css" href="style/style.css">


</head>


<body>
<h2>Update worker</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM worker WHERE ID = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  Last Name: </h4>
  <input type="text" name="lastname" value="<?php echo $row['lastname']?>">
<h4>  First Name: </h4>
  <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>">
<h4>  Middle Initial: </h4>
  <input type="text" name="middleinitial" value="<?php echo $row['middleinitial'] ?>">
  <h4>  Age: </h4>
  <input type="text" name="age" value="<?php echo $row['age'] ?>">
<h4>  Address: </h4>
  <input type="text" name="address" value="<?php echo $row['address'] ?>">
<?php
 }
}  ?>
 <p> <input type="submit" name="update" value="Update worker"></p> 
</form> 
    
<style type="text/css">
  
table {
  border: 5px dotted #B36C6C;
}




</style>


</style>
</body>
</html>