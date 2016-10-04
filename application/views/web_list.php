<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="../css/demo.css" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" href="../css/sticky-navigation.css" />
    <script src="../js/jquery.min.js"></script>
    <script src="../js/responsiveslides.min.js"></script>
    <!------ js ------>
    <!---- start-smoth-scrolling---->
    <!-- <script type="text/javascript" src="../js/move-top.js"></script>
     <script type="text/javascript" src="../js/easing.js"></script>-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!---- start-smoth-scrolling---->
    <script>
        $(function() {

            // grab the initial top offset of the navigation
            var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;

            // our function that decides weather the navigation bar should have "fixed" css position or not.
            var sticky_navigation = function(){
                var scroll_top = $(window).scrollTop(); // our current vertical position from the top

                // if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
                if (scroll_top > sticky_navigation_offset_top) {
                    $('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0 });
                } else {
                    $('#sticky_navigation').css({ 'position': 'relative' });
                }
            };

            // run our function on load
            sticky_navigation();

            // and run it again every time you scroll
            $(window).scroll(function() {
                sticky_navigation();
            });

            // NOT required:
            // for this demo disable all links that point to "#"
            $('a[href="#"]').click(function(event){
                event.preventDefault();
            });

        });
    </script>


</head>
<body>
<?php include 'test.html';?>
<div class="blog" id="blog">
    <h3>BLOG</h3>
    <small></small>
    <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam est metus, cursus quis tincidunt sit amet, varius sit amet lorem</i></p>
    <div class="container">
        <div class="blog-top" class="top-sec">
            <div class="blog-img">
                <img src="../img/img1.jpg" alt="" class="img-responsive" />
            </div>
            <div class="img-desc">
                <h4>MY PUPPY MUSTACHE</h4>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                <span></span>
                <div class="icons">
                    <a href="#"><span class="img1"> </span></a>
                    <a href="#"><span class="img2"> </span></a>
                    <a href="#"><span class="img3"> </span></a>
                </div>
                <a class="date" href="#">Mar 20</a>
                <div class="caption">
                    <a href="#"><img src="../img/link.png" alt=""/></a>
                </div>
                <div class="dmnd"></div>
            </div>
        </div>
        <div class="blog-top" id="top-sec">
            <div class="blog-img">
                <img src="../img/img2.jpg" alt="" class="img-responsive" />
            </div>
            <div class="img-desc" >
                <h4>MUSIC LIVE CONCERT</h4>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                <span></span>
                <div class="icons">
                    <a href="#"><span class="img1"> </span></a>
                    <a href="#"><span class="img2"> </span></a>
                    <a href="#"><span class="img3"> </span></a>
                </div>
                <a class="date" href="#">Apr 05</a>
                <div class="caption">
                    <a href="#"><img src="../img/link.png" alt=""/></a>
                </div>
                <div class="dmnd"></div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="blog-top" class="bottom-sec">
            <div class="img-desc blog-sec" >
                <h4>ROAD TO DREAMS</h4>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                <span></span>
                <div class="icons">
                    <a href="#"><span class="img1"> </span></a>
                    <a href="#"><span class="img2"> </span></a>
                    <a href="#"><span class="img3"> </span></a>
                </div>
                <a class="date" href="#">Mar 24</a>
                <div class="caption2">
                    <a href=""><img src="../img/link.png" alt=""/></a>
                </div>
                <div class="dmnd2"></div>
            </div>
            <div class="blog-img img-sec">
                <img src="../img/img3.jpg" alt="" class="img-responsive" />
            </div>
        </div>

        <div class="blog-top" class="bottom-sec">
            <div class="img-desc blog-sec" >
                <h4>ROAD TO DREAMS</h4>
                <span></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                <span></span>
                <div class="icons">
                    <a href="#"><span class="img1"> </span></a>
                    <a href="#"><span class="img2"> </span></a>
                    <a href="#"><span class="img3"> </span></a>
                </div>
                <a class="date" href="#">Mar 11</a>
                <div class="caption2">
                    <a href=""><img src="../img/link.png" alt=""/></a>
                </div>
                <div class="dmnd2"></div>
            </div>
            <div class="blog-img img-sec">
                <img src="../img/img4.jpg" alt="" class="img-responsive" />
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="load">
            <form action="look/list_web" method="get">
                <input   type="submit" value="Load More"/></form></div>

    </div>
</div>
</body>
</html>