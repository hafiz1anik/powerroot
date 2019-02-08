<?php
 session_start();

//if user is not logged in
if(!$_SESSION['loggedInUser']){
    //send them to the login page
    header('Location:index.php');
}

//connect to database
include('includes/connection.php');

//query & result
$query = 'SELECT * FROM announcement ';
$result = mysqli_query($conn,$query);

$alertMessage = "";
if(isset($_GET['alert'])){
    //new client added
    if($_GET['alert']=='success'){
        $alertMessage = '<div class="alert alert-success">New announcement added!<a class="close" data-dismiss="alert">&times;</a></div>';
        //client updated
    }elseif($_GET['alert']=='updatesuccess'){
        $alertMessage = '<div class="alert alert-success">New announcement updated!<a class="close" data-dismiss="alert">&times;</a></div>';
        //client deleted
    }elseif($_GET['alert']=='deleted'){
        $alertMessage = '<div class="alert alert-success"> announcement deleted!<a class="close" data-dismiss="alert">&times;</a></div>';
}
}
//check from query string


//close the mysqli connection
mysqli_close($conn);

 include('includes/header.php');
?>

<div class="jumbotron text-center">

<h1>Powerroot</h1><hr>
<?php echo $alertMessage;?>
<table class="table table-striped table-bordered">
   <tr>
    <th>Photo</th>
    <th>Description</th>
    <th>Normal Price</th>
    <th>Offer Price</th> 

   </tr>

<?php
   if(mysqli_num_rows($result)>0){
       while($row = mysqli_fetch_assoc($result)){
           echo "<tr>";

           echo "<td>".$row['photo']. "</td><td>" . $row['descriptions']. "</td><td>". $row['normalprice']."</td><td>". $row['offerprice']."</td>";

           echo '<td><button><a href="edit.php?id='.$row['id'].'">Edit</a></button></td>';

           echo "</tr>";
       }
   }else{
       echo '<div class="alert alert-warning">You have no announcement</div>';
   }

  

?>

</table>
<hr>
<button><a href='add.php'>Add Promotion</a></button>

<hr>
<?php
include('includes/footer.php');
?>

</div>

