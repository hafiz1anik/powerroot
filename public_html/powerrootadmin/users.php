<?php
 session_start();
//connect to database
include('includes/connection.php');

//query & result
$query = 'SELECT * FROM announcement ';
$result = mysqli_query($conn,$query);


//check from query string


//close the mysqli connection
mysqli_close($conn);

 include('includes/header.php');
?>

<div class="jumbotron text-center">

<h1>Powerroot</h1><hr>
<table class="table table-striped table-bordered">
   <tr>
    <th>Photo</th>
    <th>Descriptions</th>
    <th>Normal Price</th>
    <th>Offer Price</th> 

   </tr>

<?php
   if(mysqli_num_rows($result)>0){
       while($row = mysqli_fetch_assoc($result)){
           echo "<tr>";

           echo "<td>".$row['photo']. "</td><td>" . $row['descriptions']. "</td><td>". $row['normalprice']."</td><td>". $row['offerprice']."</td>";

          

           echo "</tr>";
       }
   }else{
       echo '<div class="alert alert-warning">You have no announcement</div>';
   }

  

?>

</table>


<hr>
<?php
include('includes/footer.php');
?>

</div>

