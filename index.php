<html>
    <head>
        <title>mgxpics</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.localscroll-1.2.7-min.js"></script>
        <script src="js/jquery.scrollTo-1.4.2-min.js"></script>
        <script src="js/viewportchecker.js"></script>

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
                        <p>beetle</p>
                    </span>
                    <img src="images/img.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
            <div class="img-wrapper" data-av-animation="fadeIn">
                <div class="image">
                    <span>
                        <p>rails</p>
                    </span>
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>




        </div>

        <section class="we">
            <h3>Who are we ?</h3>

            <div class="desc-wrapper">
                <div class="mathilde">
                    <img src="images/mathilde.jpg" alt="">
                    <p class="name">Mathilde</p>
                    <p>Mathilde 🌞 G💘</p>
                </div>
            </div>

            <div class="desc-wrapper">
                <div class="gabriel">
                    <img src="images/gabriel.jpg" alt="">
                    <p class="name">Gabriel</p>
                    <p>Gab💥🌊 16 yo | chtx📍| jean gi📚 | basketball🏀 | M.</p>
                </div>
            </div>

        </section>

        <footer>
            <div class="content">
                <div class="col-footer">
                    <h3>Instagram</h3>
                    <ul>
                        <li>@mgxpics</li>
                        <li>@gaby_2k</li>
                        <li>@mathilde_pclt</li>
                    </ul>
                </div>

                <div class="col-footer">
                    <h3>Facebook</h3>
                    <ul>
                        <li>MGXpics</li>
                    </ul>
                </div>

                <div class="col-footer">
                    <h3>Copyrights</h3>
                    <ul>
                        <li>Made in France</li>
                        <li>2017 © All rights reserved</li>
                    </ul>
                </div>
            </div>
        </footer>

        <script>
            jQuery('.img-wrapper').addClass("hidden").viewportChecker({
                classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
                offset: 100
            });

            $(document).ready(function() {
                $(".we").parallax("50%", 0.1);
                $(".header .image").parallax("50%", 0.1);
                
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