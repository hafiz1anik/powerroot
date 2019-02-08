<?php
session_start(); 
//if user is not logged in
if(!$_SESSION['loggedInUser']){
    //send them to the login page
    header('Location:index.php');
}

//connect to database
include('includes/connection.php');
include('includes/functions.php');

//if add button is submitted
if (isset($_POST['add'])){
    $descriptions = $_POST['descriptions'];
    $normalprice = $_POST['normalprice'];
    $offerprice = $_POST['offerprice'];
    $photo_location = "powerrootadmin/images/".$_FILES['photo']['name'];

    $imagePath = $_FILES['photo']['tmp_name'];
    $newPath = "images/";
    $ext = '.jpg';
    $newName  = $newPath.$_FILES['photo']['name'];

    $copied = copy($imagePath , $newName);

    if ((!$copied)) 
    {
        echo "Error : Not Copied";
    }
    else
    { 
        //echo "Copied Successful";
    }
    //   echo "<pre>";
    // print_r($_POST);
    //  print_r($_FILES);exit;
    //   echo "</pre>";   
    $query = "INSERT INTO announcement (photo, descriptions, normalprice, offerprice) VALUES ('$photo_location','$descriptions','$normalprice','$offerprice')";
    $result = mysqli_query($conn,$query);
    
    
    
    
    //if query successful
    if($result){
        //refresh page with query string
        header("Location:clients.php?alert=success");
    }else{
        //if something error happen
        echo "Error:".$query."<br>".mysqli_error($conn);
    }
}
else{
    
}


mysqli_close($conn);
include('includes/header.php');

?>

<div class="jumbotron text-center">
<h1>Add Promotion</h1>

<form  method="POST" action="#" class="row" enctype="multipart/form-data">
    <div class="form-group col-sm-6">
       <label for="photo">Photo</label>
       <input type="file" class="form-control input-lg" name="photo" value="">
       
    </div>
    <div class="form-group col-sm-6">
       <label for="descriptions">Descriptions</label>
       <input type="text" class="form-control input-lg" name="descriptions" value="">
      
    </div>
    <div class="form-group col-sm-6">
       <label for="normalprice">Normal Price</label>
       <input  type="text" class="form-control input-lg"  name="normalprice" value="">
    </div>
    <div class="form-group col-sm-6">
       <label for="offerprice">Offer Price</label>
       <input  type="text" class="form-control input-lg"  name="offerprice" value=""> 
    </div>
  
    <div class="col-sm-12">
    <a href="clients.php" type="button" class="btn btn-lg btn-default">Cancel</a>
    <button type="submit" class="btn btn-lg btn-success pull-right" name="add" id="add" >Add</button>
</div>

</form>


<?php
  include('includes/footer.php');
?>
</div>