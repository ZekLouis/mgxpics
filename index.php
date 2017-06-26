<?php
  session_start();
?>
<html>
    <head>
        <title>mgxpics</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="images/mgxpics.png" />
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.localscroll-1.2.7-min.js"></script>
        <script src="js/jquery.scrollTo-1.4.2-min.js"></script>

    </head>

    <body>
        <div class="header-wrap">
            <div class="header">
                <div class="image"></div>
                <div class="content">
                    <h1>mgxpics</h1>
                    <div class="divider"></div>
                    <h2>photograph lovers</h2>
                </div>
            </div>
        </div>

        <div id="navbar">
            <span class="left">mgxpics</span>
            <span class="right">
                <a href="https://instagram.com/mgxpics"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://facebook.com/mgxpics"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </span>
        </div>

        <div class="global">
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>bee</p>
                    </span>
                    <img src="content/images/bee.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>flower</p>
                    </span>
                    <img src="content/images/flower1.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>flower</p>
                    </span>
                    <img src="content/images/flower2.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>insect</p>
                    </span>
                    <img src="content/images/insecte.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>forest</p>
                    </span>
                    <img src="content/images/forest.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>squirrel</p>
                    </span>
                    <img src="content/images/squirrel.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>station</p>
                    </span>
                    <img src="content/images/station1.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>station</p>
                    </span>
                    <img src="content/images/station2.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>station</p>
                    </span>
                    <img src="content/images/station3.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>sun</p>
                    </span>
                    <img src="content/images/sun.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>sunset</p>
                    </span>
                    <img src="content/images/sunset1.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>sunset</p>
                    </span>
                    <img src="content/images/sunset2.jpg" alt="">
                </div>
            </div>
        </div>

        <h3 class="we-title">who are we</h3>

        <section class="we">

            <div class="desc-wrapper">
                <div class="mathilde">
                    <img src="images/mathilde.jpg" alt="">
                    <p class="name">Mathilde</p>
                    <p>My name is Mathilde, I'm 16, I study in a High school, I am a French girl, I live in Châteauroux , I have practised dancing since 2013, I like photography and I take photos with my IPhone 5s or Nikon P610 and to edit my pictures I use Photoshop.</p>
                </div>
            </div>

            <div class="desc-wrapper">
                <div class="gabriel">
                    <img src="images/gabriel.jpg" alt="">
                    <p class="name">Gabriel</p>
                    <p>My name is Gabriel, I am 16. I am French, I live in Châteauroux. I like BasketBall and I have played it since 2009. I am a student in a High school. I adore photography. I usually take photos with my phone but I bought a camera, a Nikon D5300. I study ICT.</p>
                </div>
            </div>

        </section>

        <footer>
            <div class="content">
                <div class="col-footer">
                    <h3>instagram</h3>
                    <ul>
                        <li><a href="https://instagram.com/mgxpics">@mgxpics</a></li>
                        <li><a href="https://instagram.com/gaby_2k">@gaby_2k</a></li>
                        <li><a href="https://instagram.com/mathildec_pclt">@mathildec_pclt</a></li>
                    </ul>
                </div>

                <div class="col-footer">
                    <h3>facebook</h3>
                    <ul>
                        <li><a href="https://facebook.com/mgxpics">MGXpics</a></li>
                    </ul>
                </div>

                <div class="col-footer">
                    <h3>copyrights</h3>
                    <ul>
                        <li>Made in France</li>
                        <li>2017 © All rights reserved</li>
                    </ul>
                </div>

                <div class="visits">
                  <?php
                    $json = json_decode(file_get_contents("stats.json"));
                    if(!isset($_SESSION['visit']) && $_SESSION['visit']!==true){
                      $json->{"visits"}++;
                      file_put_contents("stats.json",json_encode($json));
                    }
                    $_SESSION['visit']=true;
                    echo $json->{"visits"}.' visits';
                  ?>

                </div>
            </div>
        </footer>

        <script>

            $(document).ready(function() {
                if(window.innerWidth>1030){
                    $(".we").parallax("50%", 0.1);
                    $(".header .image").parallax("50%", 0.1);
                }

                var height = window.innerHeight;
                $(window).scroll(function () {
                    if ($(window).scrollTop() > height) {
                        $('#navbar').addClass('fixed');
                    }
                    if ($(window).scrollTop() < height+1) {
                        $('#navbar').removeClass('fixed');
                    }
                });
            });
        </script>
    </body>
</html>
