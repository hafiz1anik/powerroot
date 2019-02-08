<?php
if(isset($_GET['id'])) 
{
  $id = $_GET['id'];
}
else
{
  $id = 1;
}

// echo "<pre>";
// echo $news_id;exit;
// echo "</pre>";
$survey_detail_url = "https://merchant.go-reward.com/index.php/Website_Web_Service/Web_Service/get_new_survey_by_id?survey_id=".$_GET['id']."";
//get category list
$survey_detail_ch = curl_init();
curl_setopt($survey_detail_ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($survey_detail_ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($survey_detail_ch, CURLOPT_URL, $survey_detail_url);
$survey_detail_result = curl_exec($survey_detail_ch);
curl_close($survey_detail_ch);
$survey_detail_decoded_result = json_decode(substr($survey_detail_result,3), true);

$json_data = json_decode($survey_detail_decoded_result['data'][0]['json_data']);
// $ch2 = curl_init();
// curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch2, CURLOPT_URL, "https://merchant.go-reward.com/index.php/Website_Web_Service/Web_Service/get_new_survey_by_id?survey_id=".$id."");
// $result2 = curl_exec($ch2);
// curl_close($ch2);

// $news_result = json_decode(substr($result2,3), true);
 //echo "<pre>";
 //print_r($json_data );exit;
 //echo "</pre>";

// foreach ($json_data->data as $key => $value) {
// echo "<pre>";
//  print_r($value);
//  echo "</pre>";
//  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Power Root</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="materialize-v1.0.0-rc.2/materialize/css/materialize.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="fontawesome-free-5.1.1-web/fontawesome-free-5.1.1-web/css/fontawesome.min.css"
    />

    <link rel="stylesheet" href="all.css" />

    <script src="fontawesome-free-5.1.1-web/fontawesome-free-5.1.1-web/js/all.js"></script>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <nav class="black z-depth-1">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo"></a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"
                ><i class="material-icons">menu</i></a
              >
              <ul class="right hide-on-med-and-down">
                <li><a href="http://www.powerroot.com/malaysia/">Home</a></li>
                <li>
                  <a
                    href="http://www.powerroot.com/malaysia/profile_company_history.html"
                    >Our Story</a
                  >
                </li>
                <li><a href="index">PowerCard</a></li>
                <li><a href="promotion">Promotion</a></li>
                <li>
                  <a
                    href="news"
                    >Our news</a
                  >
                </li>
                <li>
                    <a href="survey">Survey result</a>
                </li>
                        

                <li><a href="fetch">Contact Us</a></li>
                <li>
                  <a href="powerrootadmin/index">Login</a>
                </li> 
              </ul>
            </div>
          </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
          <li><a href="http://www.powerroot.com/malaysia/">Home</a></li>
          <li>
            <a
              href="http://www.powerroot.com/malaysia/profile_company_history.html"
              >Our Story</a
            >
          </li>
          <li><a href="index">PowerCard</a></li>
          <li><a href="promotion">Promotion</a></li>
          <li>
            <a href="news"
              >Our news</a
            >
          </li>
          <li>
             <a href="survey">Survey result</a>
          </li>
                        

          <li><a href="fetch">Contact Us</a></li>
          <li>
              <a href="powerrootadmin/index">Login</a>
          </li> 
        </ul>
      </div>
    </nav>
   <!--image-->
   <div>
      <img
        style="height:600px;width:100%;"
        class="responsive-img"
        src="image/surveymain.jpeg"
      />
    </div>


   <section>
         <div><h3 class="teal-text center-align">Survey Result</h1>
      
         <h4 class="teal-text center-align"><?=$json_data->title?></h3>
            <h5 class="center-align"><?=$json_data->description?></h5>
            
            <hr>
            </div>
            
            <?php
              foreach ($json_data->data as $key => $value) {
                
                ?>
                <h5 class="teal-text center-align">QUESTION <?=$key+1?></h5>
                <br>
                <h6 class="teal-text center-align"><?=$value->question->label?></h6> 
                <br>
                <?php
                foreach($value->options as $key2 => $value2)
                {
                  
                  
            ?>
            
            <div class="container">
          
            <div class="row">
            <div class="col s4 center-align">
            <?php
              if(isset($value2->image->url)) 
              {
                
             
            ?>
            <img style="height:100px;width:100px;" src="<?=$value2->image->url?>" alt="" class="responsive-img">
            <?php
              }
             else{
            ?>
          
          <?php
             
              }
          ?>
           </div>
            <div class="col s4 center-align">
            <div class="progress">
            <div class="determinate" style="width:<?=$value2->avg?>%"></div>
          </div>
          
           </div>
           <div class="col s4 center-align">
           <?php
           if($value2->isOther == '1'){
             $title = "Others";
           }
           else{
             $title = $value2->label;
           } 
           ?>
           
           <p><?=$title?></p>
           <p><?=$value2->avg?></p>
           
           </div>
           </div>
           </div>
            <br>
           <?php
                
              }
              }
           ?>
           
        
        <br>

        
           
        </section> 
         <!-- Section: Follow -->
   <section class="section section-follow teal darken-2 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          
         
          <a href="htttps://facebook.com" target="_blank" class="white-text">
            <i class="fab fa-facebook fa-4x"></i>
          </a>
          <a href="htttps://twitter.com" target="_blank" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="htttps://linkedin.com" target="_blank" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="htttps://googleplus.com" target="_blank" class="white-text">
            <i class="fab fa-google-plus fa-4x"></i>
          </a>
          <a href="htttps://pinterest.com" target="_blank" class="white-text">
            <i class="fab fa-pinterest fa-4x"></i>
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
    <script src="all.js"></script>
  </body>
</html>