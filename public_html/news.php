<?php
if(isset($_GET['page'])) 
{
  $page = $_GET['page'];
}
else
{
  $page = 1;
}
// echo "<pre>";
// print_r($page);exit;
// echo "</pre>";

$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_URL, "https://merchant.go-reward.com/index.php/Website_Web_Service/Web_Service/get_news_campaign_pagination?page=".$page."");
$result2 = curl_exec($ch2);
curl_close($ch2);

$news_result = json_decode(substr($result2,3), true);



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
    <!--news-->
   <!--news-->
   <section>
         <div><h1 class="center-align">News & Events</h1></div>
      
        <div class="container">
           <div class="row">
              <div class="col s6">
              <img style="width100;" src="<?=$news_result['data'][0]["header_pic"]?>" alt="" class="responsive-img">
              </div>
              <div class="col s6">
              <a href="news-details.php?news_id=<?=$news_result['data'][0]["id"]?>">
            <h4><?=$news_result['data'][0]["title"]?></h4></a>
                  <p>稻 盛 · 金 句 ☛ 我深深感到，作为人类行动指南的伦理道德其实都是非常简洁明了的，连小孩子都懂。我们现在需要的，就是这样一种既单纯又符合宇宙自然法则的伦理道德观。 ——《对话稻盛和夫：向哲学回归》 我认为，不管是处理国内问题还是国际问题，当今这个时代，更应该努力宣扬“为了人类、为了社会”的利他道德观与价值观，并以此作为我们......</p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="news-details.php?news_id=<?=$news_result['data'][0]["id"]?>"
                    >Learn More</a>
                          
              </div>
           </div>
        </div>
        <hr>
        </section>      
        <div class="container">
           <div class="row">
              <div class="col s6">
              <img style="width100;" src="<?=$news_result['data'][1]["header_pic"]?>" alt="" class="responsive-img">
              </div>
              <div class="col s6">
              <a href="news-details.php?news_id=<?=$news_result['data'][1]["id"]?>">
            <h4><?=$news_result['data'][1]["title"]?></h4></a>
                  <p>在公司中实行“明治维新”

                   当然，仅靠这个办法是远远不够的，我认为你同时还必须改革僵硬化的组织，排除官僚化的干部。 

                  首先，你必须发挥卓有成效的领导能力，培养能够充分理解公司经营理念的干部人才，并且赢得他们的忠诚...</p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="news-details.php?news_id=<?=$news_result['data'][1]["id"]?>"
                    >Learn More</a>
                          
              </div>
           </div>
        </div>
        <hr>
        </section>      
        <div class="container">
           <div class="row">
              <div class="col s6">
              <img style="width100;" src="<?=$news_result['data'][2]["header_pic"]?>" alt="" class="responsive-img">
              </div>
              <div class="col s6">
              <a href="news-details.php?news_id=<?=$news_result['data'][2]["id"]?>">
            <h4><?=$news_result['data'][2]["title"]?></h4></a>
                  <p> 必须发挥卓有成效的领导能力，培养能够充分理解公司经营理念的干部人才，并且赢得他们的忠诚。 ——《稻盛和夫的实学：活用人才》

                  1. 让公司的新战略方针获得员工的认同.....
                </p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="news-details.php?news_id=<?=$news_result['data'][2]["id"]?>"
                    >Learn More</a>
                          
              </div>
           </div>
        </div>
        <hr>
        </section>      
        <div class="container">
           <div class="row">
              <div class="col s6">
              <img style="width100;" src="<?=$news_result['data'][3]["header_pic"]?>" alt="" class="responsive-img">
              </div>
              <div class="col s6">
              <a href="news-details.php?news_id=<?=$news_result['data'][3]["id"]?>">
            <h4><?=$news_result['data'][3]["title"]?></h4></a>
                  <p>企业经营决定于领导者的器量，随着经营者人格的提升，企业就会不断成长发展。

                   企业要发展壮大，首先要求经营者相应地拓展自己的器量，也就是说，经营者要有意识地做出努力，不断提升自己的品格、哲学理念和所谓“思考方式”。

                   然而，近些年以来，意识到这一点的企业家越来越少，不断有企业家在事业上稍获成功，即将谦虚抛到脑......</p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="news-details.php?news_id=<?=$news_result['data'][3]["id"]?>"
                    >Learn More</a>
                          
              </div>
           </div>
        </div>
        <hr>
        </section>      
        <div class="container">
           <div class="row">
              <div class="col s6">
              <img style="width100;" src="<?=$news_result['data'][4]["header_pic"]?>" alt="" class="responsive-img">
              </div>
              <div class="col s6">
              <a href="news-details.php?news_id=<?=$news_result['data'][4]["id"]?>">
            <h4><?=$news_result['data'][4]["title"]?></h4></a>
                  <p>稻 盛 · 金 句 ☛ 我深深感到，作为人类行动指南的伦理道德其实都是非常简洁明了的，连小孩子都懂。我们现在需要的，就是这样一种既单纯又符合宇宙自然法则的伦理道德观。 ——《对话稻盛和夫：向哲学回归》 我认为，不管是处理国内问题还是国际问题，当今这个时代，更应该努力宣扬“为了人类、为了社会”的利他道德观与价值观，并以此作为我们......</p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="news-details.php?news_id=<?=$news_result['data'][4]["id"]?>"
                    >Learn More</a>
                          
              </div>
           </div>
        </div>
        <hr>
        </section>      
        <div class="container">
           <div class="row">
              <div class="col s6">
              <img style="width100;"; src="<?=$news_result['data'][5]["header_pic"]?>" alt="" class="responsive-img">
              </div>
              <div class="col s6">
              <a href="news-details.php?news_id=<?=$news_result['data'][5]["id"]?>">
            <h4><?=$news_result['data'][5]["title"]?></h4></a>
                  <p>孙文所说的“王道”，是指 “以德为本”的国家政策。所谓“德”，中国自古以来用“仁”、“义”、“礼”三个字来表示。

                    “仁”指的是慈悲之心；
                    “义”指的是合乎道理；
                    “礼”指的是知晓礼节。......</p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="news-details.php?news_id=<?=$news_result['data'][5]["id"]?>"
                    >Learn More</a>
                          
              </div>
           </div>
        </div>
        <hr>
        </section>      
        <div class="container">
           <div class="row">
              <div class="col s6">
              <img style="width100;" src="<?=$news_result['data'][6]["header_pic"]?>" alt="" class="responsive-img">
              </div>
              <div class="col s6">
              <a href="news-details.php?news_id=<?=$news_result['data'][6]["id"]?>">
            <h4><?=$news_result['data'][6]["title"]?></h4></a>
                  <p>稻 盛 · 金 句

                  ☛ 企业经营决定于领导者的器量，随着经营者人格的提升，企业就会不断成长发展。 ——《活法伍：成功与失败的法则》

                  在进行组织管理时，存在着以“力”治理和以“德”治理的两种方式。换而言之，在统治一个集团时，有以德为......</p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="news-details.php?news_id=<?=$news_result['data'][6]["id"]?>"
                    >Learn More</a>
                          
              </div>
           </div>
        </div>
        <hr>
        </section>      
        <div class="container">
           <div class="row">
              <div class="col s6">
              <img style="width100;" src="<?=$news_result['data'][7]["header_pic"]?>" alt="" class="responsive-img">
              </div>
              <div class="col s6">
              <a href="news-details.php?news_id=<?=$news_result['data'][7]["id"]?>">
            <h4><?=$news_result['data'][7]["title"]?></h4></a>
                  <p>Congratulations to this month winners!......</p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="news-details.php?news_id=<?=$news_result['data'][7]["id"]?>"
                    >Learn More</a>
                          
              </div>
           </div>
        </div>
         <hr>
        </section>      
        <div class="container">
           <div class="row">
              <div class="col s6">
              <img style="width100;" src="<?=$news_result['data'][8]["header_pic"]?>" alt="" class="responsive-img">
              </div>
              <div class="col s6">
              <a href="news-details.php?news_id=<?=$news_result['data'][8]["id"]?>">
            <h4><?=$news_result['data'][8]["title"]?></h4></a>
                  <p>Congratulations to this month winners!!
                        We look forward your continuous support......</p>
                  <a
                    class="waves-effect waves-light btn modal-trigger"
                    href="news-details.php?news_id=<?=$news_result['data'][8]["id"]?>"
                    >Learn More</a>
                          
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
