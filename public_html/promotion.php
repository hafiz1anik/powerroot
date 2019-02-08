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
curl_setopt($ch2, CURLOPT_URL,"https://merchant.go-reward.com/index.php/Website_Web_Service/Web_Service/get_campaign_list_pagination");
$result2 = curl_exec($ch2);
curl_close($ch2);

$news_result = json_decode(substr($result2,3), true);
//echo "<pre>";
 //print_r($news_result);exit;
 //echo "</pre>";



?>
<?php
 session_start();
//connect to database
include('powerrootadmin/includes/connection.php');

//query & result
$query = 'SELECT * FROM announcement ';
$result = mysqli_query($conn,$query);


//check from query string


//close the mysqli connection
mysqli_close($conn);


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
        <li>
          <img class="responsive-img" src="image/promo.jpg" alt="" />
          <div class="caption center-align">
            
            
          </div>
        </li>

        <li>
          <img class="responsive-img" src="image/promo.jpg" alt="" />
          <div class="caption left-align">
            
            </h3>
            
          </div>
        </li>
        <li>
          <img class="responsive-img" src="image/promo.jpg" alt="" />
          <div class="caption right-align">
            
            </h3>
           
          </div>
        </li>
      </ul>
    </section>
 
<!--news-->
<!--<section id="news" class="section section-news scrollspy">
  <h4 class="center">
    <span class="red-text">
      Promotion <span class="black-text"> &amp; Events</span></span
    >
  </h4>
  <hr />
  <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width tab-demo z-depth-1">
    <li class="tab col s3">
      <a class="active" href="#test-swipe-1">Promotion</a>
    </li>
    <li class="tab col s3"><a href="#test-swipe-2">Contest</a></li>
    
  </ul>
  <div id="test-swipe-1" class="col s12 ">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img style="height:600px;" src="image/promo1jpg.jpg" alt="" />
            </div>
            <div
              class="card-content"
              style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;height:320px;"
            >
              <h4 class="center">Getcha Gachapon with B Infinite!</h4>
              <p class="center">
                <span class="red-text">Valid till : 3 March 2019</span><br />
                Samsung Galaxy Note 9, Nintendo Switch, Apple
                Watch & more than 15 Power points await you!<br>
                
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image"><img style="height:600px;" src="image/promo2.jpg" alt="" /></div>
            <div
              class="card-content"
              style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;height:320px;"
            >
              <h4 class="center">
                Open an account with Rakuten Trade
              </h4>
              <p class="center">
                <span class="red-text">Valid till : 16 January 2019 </span
                ><br />Download app and open an account to get 10
                Power points
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image"><img style="height:600px;" src="image/promo3.jpg" alt="" /></div>
            <div
              class="card-content"
              style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;height:320px;"
            >
              <h4 class="center">Win goodies worth up to RM100,000!</h4>
              <p class="center">
                <span class="red-text">Valid till : 15 March 2019</span
                ><br />Spend min. RM30 at Caltex & Mydin and Earn
                20 Power Points
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="test-swipe-2" class="col s12 ">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img style="height:600px;" src="image/contest1.jpg" alt="" />
            </div>
            <div
              class="card-content"
              style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;height:320px;"
            >
              <h4 class="center">Answer survey & Points!</h4>
              <p class="center">
                <span class="red-text">Valid till : 30 June 2019</span><br />
                Just answer a simple survey & you will be rewarded
                with 50 Power Points.
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img style="height:600px;" src="image/contest2.jpg" alt="" />
            </div>
            <div
              class="card-content"
              style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;height:320px;"
            >
              <h4 class="center">Food Contest</h4>
              <p class="center">
                <span class="red-text">Valid till : 31 February 2019</span
                ><br />Join the food contest and earn 10 Power Point
                Exclusive on B Infinite Mobile App only! Purchase a Kenny's Whole Chicken and get 10x PowerPoints.
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img style="height:600px;" src="image/contest3.jpg" alt="" />
            </div>
            <div
              class="card-content"
              style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;height:320px;"
            >
              <h4 class="center">Anniversary Bonanza!</h4>
              <p class="center">
                <span class="red-text">Valid until : 31 Februaru 2019</span
                ><br />It's time to pamper yourself with relaxing
                facial treatment & get ready for the celebration!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</section>-->

 <section>
         <div><h1 class="center-align">Promotions</h1></div>
      
        <div class="container">
           <div class="row">
              <div class="col s4">
              <img src="<?=$news_result['data'][0]["cover_pic"]?>" alt="" class="responsive-img">
              <a href="promotion_details.php?id=<?=$news_result['data'][0]["id"]?>">
            <h6><?=$news_result['data'][0]["title"]?></h6></a>
            <p>Normal Price: <?=$news_result['data'][0]["normal_price"]?></p>
            <p>Offer Price: <?=$news_result['data'][0]["offer_price"]?></p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="promotion_details.php?id=<?=$news_result['data'][0]["id"]?>"
                    >Learn More</a>
              </div>
              <div class="col s4">
                    <img src="<?=$news_result['data'][3]["cover_pic"]?>" alt="" class="responsive-img">
                    <a href="promotion_details.php?id=<?=$news_result['data'][3]["id"]?>">
                  <h6><?=$news_result['data'][3]["title"]?></h6></a>
                  <p>Normal Price: <?=$news_result['data'][3]["normal_price"]?></p>
                  <p>Offer Price: <?=$news_result['data'][3]["offer_price"]?></p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="promotion_details.php?id=<?=$news_result['data'][3]["id"]?>"
                    >Learn More</a>
                          
              </div>
              <div class="col s4">
             
                    <img src="<?=$news_result['data'][4]["cover_pic"]?>" alt="" class="responsive-img">
                    <a href="promotion_details.php?id=<?=$news_result['data'][4]["id"]?>">
                  <h6><?=$news_result['data'][4]["title"]?></h6></a>
                  <p>Normal Price: <?=$news_result['data'][4]["normal_price"]?></p>
                  <p>Offer Price: <?=$news_result['data'][4]["offer_price"]?></p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="promotion_details.php?id=<?=$news_result['data'][4]["id"]?>"
                    >Learn More</a>     
              </div>
           </div>
        </div>
        <hr>
        </section>  


        
        <div class="container">
        <div class="row">
                

                <?php
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                          // echo "<pre>";
                          // print_r($row);
                          // echo "</pre>";
                          echo '<div class="col s4">';
                            echo '<div class="row"><div class="col s12"><img style="height:300px;width:365px;" src="'.$row['photo'].'"  class="responsive-img">';
                            echo '</div></div>';

                            echo '<div class="row"><div class="col s12"><h6 class="blue-text">';
                            echo $row['descriptions'].'</h6></div></div>';

                            echo '<div class="row"><div class="col s12"><h6>Normal Price: ';
                            echo $row['normalprice'].'</h6></div></div>';

                            echo '<div class="row"><div class="col s12"><h6>Offer Price: ';
                            echo $row['offerprice'].'</h6></div></div>';
                            
                            echo '<div class="row"><div class="col s12"><a
                            class="waves-effect waves-light btn"
                            href="">Learn More</a></div></div>';
                            echo '</div>';
                        }
                    }else{
                        echo '<div class="alert alert-warning">You have no announcement</div>';
                    }

                    ?>

            </div>  
        </div>



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