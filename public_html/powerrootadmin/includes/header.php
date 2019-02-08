<?php
//session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Powerroot</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    
     
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="">Powerroot</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li>
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="users.php">Promotions</a>
            </li>
            
          </ul>
          <form class="nav navbar-nav navbar-right" >
          
            <?php
              
              if($_SESSION){
                
            ?>
                 
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="public_html/../../index">Logout</a></button>
          <?php
              }else{
          ?>
                  
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="index.php">Login</a></button>
          <?php
              }
          ?>
        </form>
        </div>
      </nav>

     <script src="jquery-ui-1.12.1/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
     <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>