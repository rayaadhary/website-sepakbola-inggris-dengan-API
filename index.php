<?php
 include_once 'functions.php';
 $table = table();
 $results = results();
 $fixtures = fixtures();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>BOLATAKOTAK YA MEMANG!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php">
              <h3>BOLATAKOTAK</h3>
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="matches.php" class="nav-link">Matches</a></li>
                <li><a href="results.php" class="nav-link">Results</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto">
            <h1 class="text-white">Premier League</h1>
            <p>From 1993 to 2001, the league was called as the FA Carling Premiership. Barclaycard took over in 2001 and since then it is known as the Barclays Premier League.</p>
            <p>
              <a href="https://en.wikipedia.org/wiki/Premier_League" target="_blank" class="btn btn-primary py-3 px-4 mr-3">Learn More</a>
            </p>  
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="container">
      

      <div class="row">
        <?php
         foreach ($results as $r) {
        $arr = array_keys($r);
         $last = $arr[count($arr)-1];
          ?>

           <div class="col-lg-12">
          
          <div class="d-flex team-vs">
            <span class="score"><?=  $r[$last][0]["homeTeamScore"]  ?>-<?= $r[$last][0]["awayTeamScore"] ?></span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="<?= $r[$last][0]["homeLogo"]  ?>" alt="Image" class="mb-2">
                <h3><?= $r[$last][0]["homeTeam"]  ?></h3>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="<?= $r[$last][0]["awayLogo"]  ?>" alt="Image" class="mb-2">
                <h3><?= $r[$last][0]["awayTeam"]  ?></h3>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end">
          <a href="results.php" class="more light">View More</a>
          </div>
        </div>
       
        <?php
          }
         ?>
      </div>
    </div>
  

    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Latest News</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <?php
            $q = 'English Premier League';
            $youtube = searchYoutube($q);
            $yt = $youtube["items"];
            foreach ($yt as $y) {
            ?>
          <div class="col-md-6 mb-3">
          <iframe width="500" height="400" src="https://www.youtube.com/embed/<?=$y["id"]["videoId"]?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
          </div>
          <?php
          }
          ?>
        </div>

      </div>
    </div>
    
    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
         
          <div class="col-lg-6">
             <?php
            foreach ($fixtures as $f) {
            $arr = array_key_first($f);  
          ?>
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Next Match</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      <img src="<?= $f[$arr][0]["homeLogo"] ?>" alt="Image">
                      <h3><?= $f[$arr][0]["homeTeam"] ?></h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                      <img src="<?= $f[$arr][0]["awayLogo"] ?>" alt="Image">
                      <h3><?= $f[$arr][0]["awayTeam"]?></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="text-center widget-vs-contents mb-4">
                <h4>Premier League</h4>
                <p class="mb-5">
                  <span class="d-block"><?= $f[$arr][0]['MatchDay'] ?></span>
                </p>
              </div>
            </div>
             <?php
            }
            ?>
            <div class="d-flex justify-content-end mt-2">
          <a href="matches.php" class="more light">View More</a>
          </div>
          </div>
         

          <div class="col-lg-6">
            
            <div class="widget-next-match">
              <table class="table custom-table">
                <thead>
                  <tr>
                    <th>P</th>
                    <th>Team</th>
                    <th>MP</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>PTS</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($table as $t)
                  {
                  ?>  
                  <tr>
                    <td><?= $t["Position"] ?></td>
                    <td><strong class="text-white"><?= $t["Name"] ?></strong></td>
                     <td><?= $t["Played"] ?></td>
                    <td><?= $t["Winned"] ?></td>
                    <td><?= $t["Tie"] ?></td>
                    <td><?= $t["Loosed"] ?></td>
                    <td><?= $t["Points"] ?></td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div> 
  </div>
  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

</body>

</html>