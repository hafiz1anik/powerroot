<?php
if(isset($_GET['news_id'])) 
{
  $news_id = $_GET['news_id'];
}
else
{
  $news_id = 1;
}

// echo "<pre>";
// echo $news_id;exit;
// echo "</pre>";

$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_URL, "https://merchant.go-reward.com/index.php/Website_Web_Service/Web_Service/get_news_campaign_by_id?news_id=".$news_id."");
$result2 = curl_exec($ch2);
curl_close($ch2);

$news_result = json_decode(substr($result2,3), true);
//echo "<pre>";
//print_r($news_result);exit;
//echo "</pre>";


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
    <!-- Section: Slider -->
    <section class="slider" id="home">
      <ul class="slides">
        <li><img class="responsive-img" src="image/newamain2.png" alt="" /></li>
        <li><img class="responsive-img" src="image/newsmain3.png" alt="" /></li>
        <li><img class="responsive-img" src="image/newsmain4.jpg" alt="" /></li>
      </ul>
    </section>


       <section>
         <div><h1 class="center-align">News & Events</h1></div>
       <div class="container">
            <div class="col s6">
            
            <h3><?=$news_result['data'][0]["title"]?></h3>
            <img src="<?=$news_result['data'][0]["header_pic"]?>" alt="" class="responsive-img">
            <p><?=$news_result['data'][0]["long_text"]?></p>
        </div>
        
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