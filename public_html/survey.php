<?php
if(isset($_GET['page'])) 
{
  $page = $_GET['page'];
}
else
{
  $page = 1;
}
 
// $ch2 = curl_init();
// curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch2, CURLOPT_URL, "https://api.go-moore.com/index.php/Website_Web_Service/Web_Service/get_campaign_group_by_pagination?page=".$page."");
// $result2 = curl_exec($ch2);
// curl_close($ch2);

// $news_result = json_decode(substr($result2,3), true);

$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_URL,"https://merchant.go-reward.com/index.php/Website_Web_Service/Web_Service/get_survey_list_pagination");
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
                <li><a href="news">Our news</a></li>
                <li><a href="survey">Survey result</a></li>

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
          <li><a href="news">Our news</a></li>
          <li><a href="survey">Survey result</a></li>

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
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="teal-text">Battle of the </span> 3-in-1 Coffee Brands
        </h4>
        <p class="center">
          Join this fun 3-in-1 coffee survey and see if your favorite brand is
          also Malaysia's favorite!
        </p>
      </div>
    </div>

    <!--carousel-->
    <div class="carousel">
      <a class="carousel-item" href="#one!"
        ><img class="responsive-img" src="image/huat.jpg"
      /></a>
      <a class="carousel-item" href="#two!"
        ><img class="responsive-img" src="image/checkhup.jpg"
      /></a>
      <a class="carousel-item" href="#three!"
        ><img class="responsive-img" src="image/cheong.jpg"
      /></a>
      <a class="carousel-item" href="#four!"
        ><img class="responsive-img" src="image/alicafe.jpg"
      /></a>
    </div>

    <!--question1-->
   <!-- <section class="section section-icons grey lighten-4 center">
      <div class="row">
        <div class="col s12">
          <h4>Question 1</h4>
          <p><b>Which of the 3-in-1 coffee brand do you usually buy?</b></p>
        </div>
        <div class="col s4">
          <img style="height:100px;" src="image/huat.jpg" />
        </div>

        <div class="col s5">
          <p><b>Ah Huat</b></p>
          <div class="progress">
            <div class="determinate" style="width: 28.6%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>28.6%</b></p>
        </div>
      </div>

      <div class="row">
        <div class="col s4">
          <img style="height:100px;" src="image/cheong.jpg" />
        </div>

        <div class="col s5">
          <p><b>Aik Cheong</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          <img style="height:100px;" src="image/alicafe.jpg" />
        </div>

        <div class="col s5">
          <p><b>Alicafe</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          <img style="height:100px;" src="image/checkhup.jpg" />
        </div>

        <div class="col s5">
          <p><b>Chek Hup</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          <img style="height:100px;" src="image/home'scoffee.jpg" />
        </div>

        <div class="col s5">
          <p><b>Home's Coffee</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          <img style="height:100px;" src="image/super.jpg" />
        </div>

        <div class="col s5">
          <p><b>Super</b></p>
          <div class="progress">
            <div class="determinate" style="width: 14.3%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>14.3%</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          <img style="height:100px;" src="image/kopico.jpg" />
        </div>

        <div class="col s5">
          <p><b>Kopiko</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          <img style="height:100px;" src="image/nescafe.jpg" />
        </div>

        <div class="col s5">
          <p><b>Nescafe</b></p>
          <div class="progress">
            <div class="determinate" style="width: 28.6%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>28.6%</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          <img style="height:100px;" src="image/oldtown.jpg" />
        </div>

        <div class="col s5">
          <p><b>OldTown</b></p>
          <div class="progress">
            <div class="determinate" style="width: 28.6%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>28.6%</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          <img style="height:100px;" src="image/oldvillage.jpg" />
        </div>

        <div class="col s5">
          <p><b>Old Village</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
      </div>
      <div class="row">
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>Others</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
      </div>
    </section>
    <!--question2--
    <section class="section section-icons white lighten-4 center">
      <div class="row">
        <div class="col s12">
          <h4>Question 2</h4>
          <p><b>How many cups of 3-in-1 coffee do you drink a day?</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>One cup</b></p>
          <div class="progress">
            <div class="determinate" style="width: 71.4%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>71.4%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>Two cups</b></p>
          <div class="progress">
            <div class="determinate" style="width: 14.3%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>14.3%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>Three cups</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>Four cups and more</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>No way Jose, ain't no a 3-in-1 mama</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>Dude, I only take black coffee</b></p>
          <div class="progress">
            <div class="determinate" style="width: 14.3%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>14.3%</b></p>
        </div>
      </div>
    </section>
    <!--question3--
    <section class="section section-icons grey lighten-4 center">
      <div class="row">
        <div class="col s12">
          <h4>Question 3</h4>
          <p><b>Where do you usually buy your 3-in-1 coffee brand ?</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>AEON</b></p>
          <div class="progress">
            <div class="determinate" style="width: 14.3%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>14.3%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>Tesco</b></p>
          <div class="progress">
            <div class="determinate" style="width: 42.9%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>42.9%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>AEON BIG</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>Econsave</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>KK Mart</b></p>
          <div class="progress">
            <div class="determinate" style="width: 0%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>0%</b></p>
        </div>
        <div class="col s4"></div>

        <div class="col s5">
          <p><b>Others</b></p>
          <div class="progress">
            <div class="determinate" style="width: 42.9%"></div>
          </div>
        </div>
        <div class="col s3">
          <p><b>42.9%</b></p>
        </div>
      </div>
    </section>
    <!--question4--
    <section class="section section-icons white lighten-4 center">
        <div class="row">
          <div class="col s12">
            <h4>Question 4</h4>
            <p><b>How often do you buy your 3-in-1 coffee?</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Once a week</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Once every 2 weeks</b></p>
            <div class="progress">
              <div class="determinate" style="width: 28.6%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>28.6%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Once every 3 weeks</b></p>
            <div class="progress">
              <div class="determinate" style="width: 14.3%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>14.3%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Once a month</b></p>
            <div class="progress">
              <div class="determinate" style="width: 28.6%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>28.6%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Others</b></p>
            <div class="progress">
              <div class="determinate" style="width: 28.6%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>28.6%</b></p>
          </div>
         
        </div>
      </section>
      <!--question5--
    <section class="section section-icons grey lighten-4 center">
        <div class="row">
          <div class="col s12">
            <h4>Question 5</h4>
            <p><b>What is the most important factor in deciding your 3-in-1 coffee brand?</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Taste</b></p>
            <div class="progress">
              <div class="determinate" style="width: 71.4%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>71.4%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Aroma</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Brand</b></p>
            <div class="progress">
              <div class="determinate" style="width: 14.3%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>14.3%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Promotion</b></p>
            <div class="progress">
              <div class="determinate" style="width: 14.3%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>14.3%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Price</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
         
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Others</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
         
        </div>
      </section>
      <!--question6--
    <section class="section section-icons white lighten-4 center">
        <div class="row">
          <div class="col s12">
            <h4>Question 6</h4>
            <p><b>If your preferred 3-in-1 coffee brand is not available at the point of purchase, what is your next brand of choice?</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Super</b></p>
            <div class="progress">
              <div class="determinate" style="width: 14.3%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>14.3%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Aik Cheong</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Alicafe</b></p>
            <div class="progress">
              <div class="determinate" style="width: 28.6%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>28.6%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Check Hup</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Home's Coffee</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
         
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>OldTown</b></p>
            <div class="progress">
              <div class="determinate" style="width: 14.3%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>14.3%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Kopiko</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Old Village</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Nescafe</b></p>
            <div class="progress">
              <div class="determinate" style="width: 42.9%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>42.9%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Ah Huat</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Others</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
         
        </div>
      </section>
       <!--question7--
    <section class="section section-icons grey lighten-4 center">
        <div class="row">
          <div class="col s12">
            <h4>Question 7</h4>
            <p><b>What is the most important factor for your next brand of choice when your preferred 3-in-1 coffee brand is not available?</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Price</b></p>
            <div class="progress">
              <div class="determinate" style="width: 42.9%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>42.9%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Free gift</b></p>
            <div class="progress">
              <div class="determinate" style="width: 14.3%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>14.3%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Sampling</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Current Promotion</b></p>
            <div class="progress">
              <div class="determinate" style="width: 0%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>0%</b></p>
          </div>
          <div class="col s4"></div>
  
          <div class="col s5">
            <p><b>Others</b></p>
            <div class="progress">
              <div class="determinate" style="width: 42.9%"></div>
            </div>
          </div>
          <div class="col s3">
            <p><b>42.9%</b></p>
          </div>
         
         </div>
      </section>-->
      <section>
        
      
        <div class="container">
           <div class="row center">
              
              <div class="col s12">
              <a href="news-details.php?news_id=<?=$news_result['data'][13]["id"]?>">
            <h4 class="center-align"><?=$news_result['data'][13]["title"]?></h4></a>
            <a
                    class="waves-effect waves-light btn modal-trigger center"
                    href="survey_details.php?id=<?=$news_result['data'][13]["id"]?>"
                    >See Results</a>    
                  
                          
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
              <i class="fab fa-facebook fa-4x"></i>
            </a>
            <a href="htttps://twitter.com" target="_blank" class="white-text">
              <i class="fab fa-twitter fa-4x"></i>
            </a>
            <a href="htttps://linkedin.com" target="_blank" class="white-text">
              <i class="fab fa-linkedin fa-4x"></i>
            </a>
            <a
              href="htttps://googleplus.com"
              target="_blank"
              class="white-text"
            >
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
    <script src="all.js"></script>
  </body>
</html>
