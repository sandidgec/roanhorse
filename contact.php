<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("lib/headutls.php");?>
</head>
<body>
<?php require_once("navbar.php");?>

<img src="lib/images/mojave.jpg" height="500px" width="1349px" class="mojave">

<form class="form-horizontal" method="post">
    <h1 class="text-center header"><span>Contact me</span></h1>

    <div class="form-group">
        <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user fa-2x"></i></span>
        <div class="col-md-8">
            <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user fa-2x"></i></span>
        <div class="col-md-8">
            <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-envelope-o fa-2x"></i></span>
        <div class="col-md-8">
            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-phone-square fa-2x"></i></span>
        <div class="col-md-8">
            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-pencil-square-o fa-2x"></i></span>
        <div class="col-md-8">
            <textarea class="form-control" id="message" name="message" placeholder="Enter your massage here." rows="7"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary btn-md">Submit</button>
        </div>
    </div>
</form>

</body>
</html>