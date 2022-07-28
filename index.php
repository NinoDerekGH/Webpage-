<!-- --------Jelard--------- -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="images/png" rel="icon" href="images/LGO3.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"
    integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
  <title>Mixer </title>
</head>

<body>
  <header class="header">
    <div class="header_container">
      <div class="none"> </div>

      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="search">
          <!-- SEARCH -->
          <input type="text" placeholder="Search" name="search"> 
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </form>
      
      

      <div class="user">
        <div class="icon">
          <i class="fa-solid fa-video"></i>
          <i class="fa-solid fa-grip"></i>
          <i class="fa-solid fa-bell"></i>
        </div>

        <div class="img">
          <img src="images/logo.png" alt="">
        </div>
      </div>

      <div class="toggle">
        <i class="fa-solid fa-bars" id="header-toggle"></i>
      </div>
    </div>
  </header>
  <section class="nav" id="navbar">
    <nav class="nav_container">
      <div>
        <a href="#" class="nav_link nav_logo ">
          <i class="fa-solid fa-bars nav_icon"></i>
          <span class="logo_name">
            <i class="fab fa-maxcdn"></i>
            ixer
          </span>
        </a>

        <div class="nav_list">
          <div class="nav_items navtop">
            <a href="index.php" class="nav_link navtop active">
              <i class="fa fa-house nav_icon"></i>
              <span class="nav_name">Home</span>
            </a>
            <a href="#" class="nav_link navtop">
              <i class="fa fa-compass nav_icon"></i>
              <span class="nav_name">Explore</span>
            </a>
            <a href="#" class="nav_link navtop">
              <i class="fa-brands fa-tiktok nav_icon"></i>
              <span class="nav_name">Short Video</span>
            </a>
            <a href="#" class="nav_link navtop">
              <i class="fa-solid fa-users nav_icon"></i>
              <span class="nav_name">Channel</span>
            </a>
            <a href="#" class="nav_link navtop">
              <i class="fa-solid fa-video nav_icon"></i>
              <span class="nav_name">Library</span>
            </a>
            <a href="#" class="nav_link navtop">
              <i class="fa-solid fa-clock-rotate-left nav_icon"></i>
              <span class="nav_name">History</span>
            </a>
            
            <a href="Reg.php" class="nav_link navtop">
              <i class="fa-brands fa-yandex nav_icon"></i>
              <span class="nav_name">Register</span>
            </a>

            <div class="nav_dropdown">
              <a href="#" class="nav_link">
                <i class="fa-solid fa-chevron-down nav_icon"></i>
                <span class="nav_name">Creator</span>
              </a>

              <div class="nav_dropdown-collapse">
                <div class="nav_dropdown-content">
                  <a href="#" class="nav_dropdown-item">Arven Eco</a>
                  <a href="#" class="nav_dropdown-item">Nino Cabaitan</a>
                  <a href="#" class="nav_dropdown-item">Jelard Maur</a>
                </div>
              </div>
            </div>

            <a href="#" class="nav_link">
              <i class="fa-solid fa-comment nav_icon"></i>
              <span class="nav_name">Messages</span>
            </a>
          </div>
    </nav>
  </section>
  <main>

    <!-- Shorts -->
    <section class="shorts">
      <div class="container">
        <div class="shorts_row">
          <div class="shorts_column">
            <img class="shorts" id="short_a" src="shorts/short_a.gif" alt="Trolling News">
            <h5>Trolling News</h5>
          </div>
          <div class="shorts_column">
            <img class="shorts" id="short_b" src="shorts/short_b.gif" alt="Spooderman">
            <h5>Spooderman</h5>
          </div>
          <div class="shorts_column">
            <img class="shorts" id="short_c" src="shorts/short_c.gif" alt="UNO...?">
            <h5>UNO...?</h5>
          </div>
          <div class="shorts_column">
            <img class="shorts" id="short_d" src="shorts/short_d.gif" alt="Who are you!">
            <h5>Who are you!</h5>
          </div>
          <div class="shorts_column">
            <img class="shorts" id="short_e" src="shorts/short_e.gif" alt="Drawing with Crayons">
            <h5>Drawing with Crayons</h5>
          </div>
          <div class="shorts_column">
            <img class="shorts" id="short_f" src="shorts/short_f.gif" alt="mAtH tESt be like">
            <h5>mAtH tESt be like</h5>
          </div>
          <div class="shorts_column">
            <img class="shorts" id="short_g" src="shorts/short_g.gif" alt="Pay to Remove Ads">

            <h5>Pay to Remove Ads</h5>
          </div>
          <div class="shorts_column">
            <img class="shorts" id="short_h" src="shorts/short_h.gif" alt="Doctor Strange">
            <h5>Doctor Strange</h5>
          </div>
        </div>

        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="pop">
          <div id="caption"></div>
        </div>
      </div>
    </section>
    <!-- Shorts -->

    <section class="video_content grid">
    <?php 
      include('php/links.inc.php'); // $data(array from txtfile),$arr_(2d array of $data)
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        $search = $_POST['search'];
        $k=0;


        if($search == ""){
      for($i = 0; $i<count($data);$i++){
        $vid= $arr_[$i][0];
        $ttl= $arr_[$i][1];
        $ch= $arr_[$i][2];
        $chpic = $arr_[$i][4];
        $pic= $arr_[$i][3];

        
      
      if(true){?>
        <div class="video_items" style="padding-left:35px; padding-bottom:20px">
          <a href='view.php?index=<?php echo $i;?>'>
            <img src=<?php echo $pic;?> alt="">
          
          if(true){?>
            <div class="video_items">
              <a href='view.php?index=<?php echo $i;?>'>
                <img src=<?php echo $pic;?> alt="">
              
              <div class="details flex">
                <div class="img">
                  <img src=<?php echo $chpic;?> alt="">
                </div>
                <div class="heading">
                  <p><?php echo $ttl;?></p>
                  <span><?php echo $ch;?> <i class="fa fa-circle-check"></i> </span>
                  <br>
                  <span>100000.7M .1 Week ago</span>
                </div>
              </div>
              </a>
            </div>
            <?php } 
    
          }
        }
        if($search!=""){
          foreach($data as $da){
            if(stristr($da,$search)){
              if(true){?>
                <div class="video_items">
                  <a href='view.php?idex=<?php echo $k;?>'>
                    <img src=<?php echo $arr_[$k][3];?> alt="">
                  
                  <div class="details flex">
                    <div class="img">
                      <img src=<?php echo $arr_[$k][4];?> alt="">
                    </div>
                    <div class="heading">
                      <p><?php echo $arr_[$k][1];?></p>
                      <span><?php echo $arr_[$k][2];?> <i class="fa fa-circle-check"></i> </span>
                      <br>
                      <span>100000.7M .1 Week ago</span>
                    </div>
                  </div>
                  </a>
                </div>
                <?php }
              continue;
            }
            $k++;
          }
        }
        
      }else{
        for($i = 0; $i<count($data);$i++){
          $vid= $arr_[$i][0];
          $ttl= $arr_[$i][1];
          $ch= $arr_[$i][2];
          $chpic = $arr_[$i][4];
          $pic= $arr_[$i][3];
  
          
        
        if(true){?>
          <div class="video_items">
            <a href='view.php?index=<?php echo $i;?>'>
              <img src=<?php echo $pic;?> alt="">
            
            <div class="details flex">
              <div class="img">
                <img src=<?php echo $chpic;?> alt="">
              </div>
              <div class="heading">
                <p><?php echo $ttl;?></p>
                <span><?php echo $ch;?> <i class="fa fa-circle-check"></i> </span>
                <br>
                <span>100000.7M .1 Week ago</span>
              </div>
            </div>
            </a>
          </div>
          <?php } 
  
        }
      } ?>
    </section>
  </main>

  <script src="js/main.js" charset="utf-8"></script>

</body>

</html>