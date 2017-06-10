<html>
    <head>
        <title>mgxpics</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery-3.2.1.min.js"></script>
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
            <div class="img-wrapper">
                <div class="image">
                    <img src="images/img.jpg" alt="">
                </div>
            </div>

            <div class="img-wrapper">
                <div class="image">
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
<div class="img-wrapper">
                <div class="image">
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
<div class="img-wrapper">
                <div class="image">
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
<div class="img-wrapper">
                <div class="image">
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
<div class="img-wrapper">
                <div class="image">
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
<div class="img-wrapper">
                <div class="image">
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
<div class="img-wrapper">
                <div class="image">
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
<div class="img-wrapper">
                <div class="image">
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>
<div class="img-wrapper">
                <div class="image">
                    <img src="images/header2.jpg" alt="">
                </div>
            </div>

        </div>

        <footer>
            <div class="content">
                <div class="col-footer">
                    <ul>
                        <li>aze</li>
                        <li>aze</li>
                        <li>aze</li>
                        <li>aze</li>
                    </ul>
                </div>

                <div class="col-footer">
                    <ul>
                        <li>aze</li>
                        <li>aze</li>
                        <li>aze</li>
                        <li>aze</li>
                    </ul>
                </div>

                <div class="col-footer">
                    <ul>
                        <li>aze</li>
                        <li>aze</li>
                        <li>aze</li>
                        <li>aze</li>
                    </ul>
                </div>
            </div>
        </footer>

        <script>
            $(document).ready(function() {
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