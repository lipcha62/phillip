<?php 
include('db.php');
  include('header.php');
// Retrieve data from the database
$sql = "SELECT * FROM member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<h1> MEMBER</h1> ";

     echo "<a href='create2.php'>CREATE MEMBER </a>";

   echo "<table border =  '1' width = '50%'><tr><th> id </th> 
    <th> Last Name </th> 
    <th> First Name</th> 
    <th> Middle Initial</th>
    <th> Age </th> 
    <th> Address </th> 
    <th> contact </th> <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];                

         echo "<tr>  
          <td>" . $row["id"]. "</td> 
         <td>" . $row["lastname"]. "</td> 
         <td> " . $row["firstname"]. "</td> 
         <td>" . $row["middleinitial"]. "</td>
         <td> " . $row["age"]. "</td>
         <td> " . $row["address"]. "</td>
         <td> " . $row["contact"]. "</td>";

        echo "<td><a href='update.php?user_id=$id'</a>EDIT</td>";    
        echo "<td><a href='delete.php?user_id=$id'</a>DELETE</td>"; 


        echo "</tr>";    

    }
        echo "</table>"; 
} else {
    echo "0 results";
} 
?>
<style>
table{
    font-size:  20px;
    font-family:    fantasy ;
            
}
table {
  border: 5px double; #B36C6C;
}

</style>


