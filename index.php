<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("lib/headutls.php");?>
</head>
<body>
<?php require_once("navbar.php");?>

<div class="jumbotron">
    <div class="container">
        <h3 class="col-md-6 col-md-offset-3 leadtag"><a href="#">RoanhorseConsulting.com</a> coming soon.</h3>
        <h3 class="col-md-6 col-md-offset-3 leadtag">@vrroanhorse<span class="fa fa-twitter" aria-hidden="true"></span></h3>
    </div>
</div>

<!--==================================================
                   Carousel
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
                    <h3 class="leadtag-carousel">RoanhorseConsulting.com coming soon.</h3>
                    <h3 class="leadtag-carousel">@vrroanhorse<span class="fa fa-twitter" aria-hidden="true"></span></h3>
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

<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">This is where cool stuff goes.<br> <span class="text-muted">Really cool stuff ;).</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="thisIsWhereAnImageGoes">
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading">I know what you like. <br> <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="thisIsWhereAnImageGoes">
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">And most importantly. <br> <span class="text-muted">SQUAD.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="thisIsWhereAnImageGoes">
    </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

<footer>

    <div class="container">
        <div class="row" id="footerRow">
            <div class="col-md-6">
                <p>&copy; 2016 Roanhorse Consulting Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </div>

            <div class="col-md-1">

                <a href="#" target="_blank">
                    <i class="fa fa-twitter someicons" aria-hidden="true"></i>

                </a><a href="#" target="_blank">
                    <i class="fa fa-facebook someicons" aria-hidden="true"></i></a>
            </div><a href="" target="_blank"></a>

                <p class="pull-right"><a href="#">Back to top</a></p>

        </div><a href="" target="_blank"></a>
    </div><a href="" target="_blank"></a>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>
</html>