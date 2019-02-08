<?php
session_start();
if(isset($_COOKIE[session_name()])){
    //empty the cookie
    setcookie(session_name(),'',time()-86400,'/');
}
//clear all session variables
session_unset();

//destroy the session

session_destroy();

include('includes/header.php');

?>
<div class='jumbotron text-center'>
<h1>Logged Out</h1>
<p class="lead">You have been logged out.See you next time</p>

<?php
  include('includes/footer.php');
?>
</div>