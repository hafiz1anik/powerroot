<?php
session_start();
//if user is not logged in
if(!$_SESSION['loggedInUser']){
    //send them to the login page
    header('Location:index.php');
}

$id=$_GET['id'];

include('includes/connection.php');
include('includes/functions.php');

$query ="SELECT* FROM announcement WHERE id = '$id'";
//echo $query;
$result = mysqli_query($conn,$query);


//varify if result is returned
if(mysqli_num_rows($result)>0){
      
    //store basic user data in variables
    while($row = mysqli_fetch_assoc($result)){
      $photo = $row['photo'];
      $descriptions = $row['descriptions'];
      $normalprice = $row['normalprice'];
      $offerprice = $row['offerprice'];
    }
}else{
    $alertMessage = '<div class="alert alert-warning">Nothing to see here<a href="clients.php">Head back</a></div>';
}

if(isset($_POST['update'])){
    $descriptions = $_POST['descriptions'];
    $normalprice = $_POST['normalprice'];
    $offerprice = $_POST['offerprice'];
    $photo_location = "powerrootadmin/images/".$_FILES['photo']['name'];

    $imagePath = $_FILES['photo']['tmp_name'];
    $newPath = "images/";
    $ext = '.jpg';
    $newName  = $newPath.$_FILES['photo']['name'].$ext;

    $copied = copy($imagePath , $newName);

    if ((!$copied)) 
    {
        echo "Error : Not Copied";
    }
    else
    { 
        //echo "Copied Successful";
    }
    //new database query and results
    $query = "UPDATE announcement SET photo='$photo_location', descriptions='$descriptions',normalprice='$normalprice', offerprice='$offerprice' WHERE id='$id'";
    
    $result = mysqli_query($conn,$query);

    if($result){

        header("Location:clients.php?alert=updatesuccess");
    }else{
        echo "error updating record:".mysqli_error($conn);
    }
}

$alertMessage='';
if(isset($_POST['delete'])){
    $alertMessage = "<div class='alert alert-danger'>
    
             <p>Are you sure you want to delete this announcement??? no take backs!!</p><br>

             <form action='' method='post'>
             <input type='submit' class='btn btn-danger btn-sm' name='confirm-delete' value='Yes,delete!'>
             <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Oops,no thanks!</a>
             
             </form>
    </div>";
}

if(isset($_POST['confirm-delete'])){
    $query = "DELETE FROM announcement WHERE id='$id'";
    $result = mysqli_query($conn,$query);

    if($result){
        header("Location:clients.php?alert=deleted");
    }else{
        echo "error deleting record:".mysqli_error($conn);
    }
}

mysqli_close($conn);
include('includes/header.php');
?>
<div class="jumbotron text-center">
<h1>Edit Promotion</h1>
<?php echo $alertMessage;?>
<form method="POST" action="#" class="row" enctype="multipart/form-data">
    <div class="form-group col-sm-6">
    <label for="photo">Photo</label>
       <input type="file" class="form-control input-lg" name="photo" value="<?php echo $photo;?>">
    </div>
    <div class="form-group col-sm-6">
       <label for="descriptions">Description</label>
       <input type="text" class="form-control input-lg" name="descriptions" value="<?php echo $descriptions;?>">
    </div>
    <div class="form-group col-sm-6">
       <label for="normalprice">Normal Price</label>
       <input  type="text" class="form-control input-lg"  name="normalprice" value="<?php echo $normalprice;?>">
    </div>
    <div class="form-group col-sm-6">
       <label for="offerprice">Offer Price</label>
       <input  type="text" class="form-control input-lg"  name="offerprice" value="<?php echo $offerprice;?>"> 
    </div>
  
    <div class="col-sm-12">
    <button type="submit" name="delete" class="btn btn-lg btn-danger pull-left" >Delete</button> 
    <a href="clients.php" type="button" class="btn btn-lg btn-default">Cancel</a>
    <button type="submit" class="btn btn-lg btn-success pull-right" name="update" id="update" >Update</button>
</div>

</form>
<?php
  include('includes/footer.php');
?>
</div>