<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("lib/headutls.php");?>
</head>
<body>
<?php require_once("navbar.php");?>

<div class="jumbotron">
    <div class="container">
        <h3 class="col-md-6 col-md-offset-3 leadtag">RoanhorseConsulting.com coming May 2016</h3>
        <h3 class="col-md-6 col-md-offset-3 leadtag">@vrroanhorse<span class="fa fa-twitter" aria-hidden="true"></span></h3>
    </div>
</div>

<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="lib/images/cloudsDovetail.jpg" alt="firstSlide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Headline.</h1>
                    <p>This is where words go.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">click me</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="lib/images/mojave.jpg" alt="secondSlide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another Headline.</h1>
                    <p>More words go here.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">click me again</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="lib/images/mountainSkies.jpg" alt="thirdSlide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more headline.</h1>
                    <p>Another word or two.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">click me once more</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    
</div><!-- /.carousel -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>
</html>