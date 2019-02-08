<?php
session_start();

include('includes/functions.php');

// echo "<pre>";
// print_r($_POST);
// print_r($formPass);
// echo "</pre>";

// exit;

$loginError='';
//if login form was submitted
if(isset($_POST['login'])){
    //create variables
    //wrap data with validation function
    $formEmail = validateFormData($_POST['email']);
    $formPass = validateFormData($_POST['password']);

   
    
    //connect to database
    include('includes/connection.php');

    //create query
    $query = "SELECT name,password FROM users WHERE email = '$formEmail'";

    //store the result
    $result = mysqli_query($conn,$query);

    //varify if result is returned
    if(mysqli_num_rows($result)>0){
      
      //store basic user data in variables
      while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $hashedPass = $row['password'];
      }
      
      //varify hashed password with submitted password
      if(password_verify($formPass,$hashedPass)){

        //if correct login then store data in session variable
        $_SESSION['loggedInUser']=$name;

        //redirect user to client page
        header('Location:clients.php');
      }else{
        $loginError = "<div class='alert alert-danger'>Wrong username or password.Please try again</div>";
      }
    }else{
      $loginError = "<div class='alert alert-danger'>Sorry no such user in administration. <a class='close' data-dismiss='alert'>&times;</a> </div>";
    }
    //close the mysql connection
    mysqli_close($conn);
}



include('includes/header.php');
 
//$password = password_hash('mohammad123',PASSWORD_DEFAULT);
//echo $password;
?>

<div class="jumbotron text-center">
<h1>Powerroot</h1>
<h1>Only For Administrative Users</h1>
<p class="lead">Log in to your account</p>

<?php echo $loginError; ?>
<form method="post" action="#">
<div class="form-group" >
      <label for="login-email" class="sr-only">Email</label>
      <input name="email" type="text" class="form-control-lg" id="login-email" placeholder="email">
      </div>
      <div class="form-group">
      <label for="login-password" class="sr-only">Password</label>
      <input name="password" placeholder="password" type="password" class="form-control-lg" id="login-password">
      </div>
      
      <button type="submit" class="btn btn-success" name="login">Login</button>
      
</form>
<hr>
<?php
  include('includes/footer.php');
?>
</div>

<script src="jquery-ui-1.12.1/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>