<?php
 
//connect to database
include('includes/connection.php');

//query & result
$query = 'SELECT * FROM address ';
$result = mysqli_query($conn,$query);


//check from query string


//close the mysqli connection


 include('includes/contact.php');
 include('includes/functions.php');

$firstnameErr=$lastnameErr=$emailErr=$phoneErr=$commentErr="";
$firstname = $lastname=$email =$phone= $comment ="";
if(isset($_POST['submit'])){
    

    if(!$_POST['firstname']){
        $firstnameErr = 'please enter your firstname <br>';
    }else{
        $firstname = validateFormData($_POST['firstname']);
    }

    if(!$_POST['lastname']){
        $lastnameErr = 'please enter your lastname <br>';
    }else{
        $lastname = validateFormData($_POST['lastname']);
    }

    if(!$_POST['email']){
        $emailErr = 'please enter your password <br>';
    }else{
        $email = validateFormData($_POST['email']);
    }
    if(!$_POST['phone']){
        $phoneErr = 'please enter your phone number <br>';
    }else{
        $phone = validateFormData($_POST['phone']);
    }
    if(!$_POST['comment']){
        $commentErr = 'please enter your comment <br>';
    }else{
        $comment = validateFormData($_POST['comment']);
    }

    if($firstname && $lastname && $email && $phone && $comment){
      
        $query = "INSERT into information(firstname,lastname,email,phone,comment)
VALUES('$firstname','$lastname','$email','$phone','$comment')";

    if(mysqli_query($conn,$query)){
         echo "<div class='alert alert-success'>new record in database</div>";
     }  else{
         echo "error:".$query."<br>".mysqli_error($conn);
     }
    }

    
        

}


mysqli_close($conn);

?>



<div>



<div class="container">
        <div class="row">
            <div>
                <div class="form-group">
                    <div class="col s4">
                    
                        <h5>Power Root SDN</h5>
                       
                    </div>
                    <div class="col s4">
                        
                        <h5>Power Root Marketing</h5> 
                    
                    </div>
                    <div class="col s4">
                        
                        <h5>Power Root Berhed</h5>  
            
                    </div>
                

                <?php
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo '<div class="col s4">';
                        
                            echo $row['address1'].'</div>';

                            echo '<div class="col s4">';
                            echo $row['address2'].'</div>';

                            echo '<div class="col s4">';
                            echo $row['address3'].'</div>';
                        }
                    }else{
                        echo '<div class="alert alert-warning">You have no announcement</div>';
                    }

                    ?>
            </div>  
        </div>
<div>
<section id="message">
      <div class="col s12">
      <h4 class="center"><span class="red-text">Send us<span class="black-text"> Message</span></span></h4><hr>
        <div class="container">
          <div class="row">
            <div>
              <div class="col s12 m6">
                <p>
                  If you have any feedback or questions about our Office, our
                  website or our services in general, please contact us by
                  filling out the form.<br />
                  <hr />
                  All form fields are required unless otherwise indicated.
                </p>
              </div>
              <div class="col s12 m6 ">
                <div id="sending">
                <p class="text-danger">* required field</p>
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="form-group">
                      <label For="firstname">First name</label>
                      <small class="text-danger">*<?php echo $firstnameErr;?></small>
                      <input name="firstname" type="text" value="text" class="form-control" id="firstname" />
                    </div>
                    <div class="form-group">
                      <label for="lastname">Last name</label>
                      <small class="text-danger">*<?php echo $lastnameErr;?></small>
                      <input name="lastname" type="text" value="text" class="form-control" id="lastname" />
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <small class="text-danger">* <?php echo $emailErr;?></small>
                      <input name="email" type="email" value="email" class="form-control" id="email" />
                    </div>
                    <div class="form-group">
                      <label for="phone">Telephone no</label>
                      <small class="text-danger">*<?php echo $phoneErr;?></small>
                      <input name="phone" type="tel" value="tel" class="form-control" id="phone"/>
                    </div>
                    <div class="form-group">
                      <label for="comment">Comment</label><br />
                      <small class="text-danger">*<?php echo $commentErr;?></small>
                      <textarea name="comment" class="form-control" rows="3" id="comment"></textarea>
                    </div>

                    <button name="submit" type="submit" class="btn btn-primary">
                      Submit
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   <!-- Section: Follow -->
   <section class="section section-follow teal darken-2 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          
         
          <a href="htttps://facebook.com" target="_blank" class="white-text">
            <i class="fab fa-facebook fa-3x"></i>
          </a>
          <a href="htttps://twitter.com" target="_blank" class="white-text">
            <i class="fab fa-twitter fa-3x"></i>
          </a>
          <a href="htttps://linkedin.com" target="_blank" class="white-text">
            <i class="fab fa-linkedin fa-3x"></i>
          </a>
          <a href="htttps://googleplus.com" target="_blank" class="white-text">
            <i class="fab fa-google-plus fa-3x"></i>
          </a>
          <a href="htttps://pinterest.com" target="_blank" class="white-text">
            <i class="fab fa-pinterest fa-3x"></i>
          </a>
          <p>Follow us on social media for special offers</p>
        </div>
      </div>
    </div>
  </section>
         <!-- Footer -->
      <footer class="section teal darken-2 white-text center">
        <p class="flow-text">POWER ROOT MALAYSIA &copy; 2018</p>
      </footer>
        <script src="materialize-v1.0.0-rc.2/materialize/js/materialize.min.js"></script>
        <script src="home.js"></script>

   
   






<hr>


</div>

