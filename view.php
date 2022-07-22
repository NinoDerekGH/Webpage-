<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="images/png" rel="icon" href="images/LGO3.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"
        integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>Play Video - Mixer</title>
</head>

<body>
    <header class="header">
        <div class="header_container">
            <div class="none"> </div>
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>


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
                        <a href="#" class="nav_link navtop">
                            <i class="fa-solid fa-thumbs-up nav_icon"></i>
                            <span class="nav_name">Like</span>
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
                                    <a href="#" class="nav_dropdown-item">Piolo Pacual</a>
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

    <div class="container play-container">
        <div class="row">
            <div class="play-video">
                <?php
                include('php/links.inc.php'); // $data(array from txtfile),$arr_(2d array of $data)
                ?>
                <?php
                
                $i = $_GET['index'];//index
                $vid= $arr_[$i][0];
                $ttl= $arr_[$i][1];
                $ch= $arr_[$i][2];
                $chpic = $arr_[$i][4];
                $pic= $arr_[$i][3];

                ?>
                <iframe src="https://www.youtube.com/embed/<?php echo $vid; ?>?&rel=1&playlist=<?php echo $vid?>&loop=1" allow="autoplay"frameborder="0" ></iframe>
                <div class="tags">
                    <a href="#">#Technoblade</a> <a href="#">#RestInPeace</a>
                </div>
                <h3><?php echo $ttl;?></h3>
                <div class="play-video-info">
                    <p>5,548,101 views &bull; July 7, 2022</p>
                    <div>
                        <button type="button"><i class="fa-regular fa-thumbs-up"></i>924K</button>
                        <button type="button"><i class="fa-regular fa-thumbs-down"></i>Dislike</button>
                        <button type="button"><i class="fa-regular fa-share-from-square"></i>Share</button>
                        <button type="button"><i class="fa-regular fa-square-plus"></i>Save</button>
                    </div>
                </div>
                <hr>
                <div class="publisher">
                    <img src=<?php echo $chpic;?>>
                    <div>
                        <p><?php echo $ch;?></p>
                        <span>2.79M subscribers</span>
                    </div>
                    <button type="button">Subscribe</button>
                </div>
                <div class="vid-description">
                    <p>https://stjude.org/donate/donate-to-s...
                    </p>
                    <p>https://curesarcoma.org/donate/</a>
                    <p>https://giving.mskcc.org</p>
                    <hr>
                    <h4>50,000 comments</h4>
                    <div class="add-comment">
                        <img src="http://unsplash.it/36/36?gravity=center">
                        <input type="text" placeholder="Write comment">
                    </div>
                    <div class="old-comment">
                        <img src="http://unsplash.it/36/36?gravity=center">
                        <div>
                            <h3>Piolo Pascual <span>2 days ago</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, neque?</p>
                            <div class="comment-action">
                                <button type="button"><i class="fa-regular fa-thumbs-up"></i></button>
                                <span>1</span>
                                <button type="button"><i class="fa-regular fa-thumbs-down"></i></button>
                                <span>10</span>
                                <span>REPLY</span>
                                <a href="#">All replies</a>
                            </div>
                        </div>
                    </div>

                    <div class="old-comment">
                        <img src="http://unsplash.it/36/36?gravity=center">
                        <div>
                            <h3>Piolo Pascual <span>2 days ago</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore labore quod aperiam nobis
                                hic dolorem porro iure vitae rem perferendis natus neque repudiandae id exercitationem
                                corrupti nesciunt, tenetur modi ut fugiat iusto voluptates. Illum vero consequatur
                                deleniti quisquam accusamus iure!</p>
                            <div class="comment-action">
                                <button type="button"><i class="fa-regular fa-thumbs-up"></i></button>
                                <span>1</span>
                                <button type="button"><i class="fa-regular fa-thumbs-down"></i></button>
                                <span>10</span>
                                <span>REPLY</span>
                                <a href="#">All replies</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="right-sidebar">

                 <?php for($t=0;$t<count($data);$t++){



                    if($i!=$t){?>
                        <div class="side-video-list">
                            <a href="view.php?index=<?php echo $t;?>" class="small-thumbnail"><img src=<?php echo $arr_[$t][3] ;?>>
                            </a>
                        <div class="vid-info">
                            <p style="font-weight:750;color:#fff;"><?php echo $arr_[$t][1] ;?></p>
                            <p style="font-weight:100;font-size:13px;color:#717171;"><?php echo $arr_[$t][2] ;?> <br> 15M Views</p>
                            
                        </div>
                </div>
                    <?php }
                 }?>   
                
 
               
            </div>
        </div>
    </div>

    <script src="js/main.js" charset="utf-8"></script>
</body>

</html>