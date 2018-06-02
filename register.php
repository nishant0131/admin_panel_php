<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        http://cynoteck.com
        http://twitter.com/techie_nishant
    -->
    <meta charset="utf-8">
    <title>Administrator Portal | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Nishant Sharma">

    <!-- The styles -->
    <link id="bs-css" href="assets/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/charisma-app.css" rel="stylesheet">
    <link href='assets/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='assets/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='assets/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='assets/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='assets/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='assets/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='assets/css/jquery.noty.css' rel='stylesheet'>
    <link href='assets/css/noty_theme_default.css' rel='stylesheet'>
    <link href='assets/css/elfinder.min.css' rel='stylesheet'>
    <link href='assets/css/elfinder.theme.css' rel='stylesheet'>
    <link href='assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='assets/css/uploadify.css' rel='stylesheet'>
    <link href='assets/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="assets/bower_components/jquery/jquery.min.js"></script>
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Portal</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please register with your Email, Name and Password.
            </div>
            <?php if(isset($_SESSION['error'])){?>
                <div class="alert alert-danger" role="alert" id="error_msg">
                 <?php echo $_SESSION['error']   ?>
                </div>
                <?php unset($_SESSION['error']); } 
                if(isset($_SESSION['success'])) {?>
                    <div class="alert alert-success" role="alert" id="success_message">
                    <?php echo $_SESSION['success']   ?>
                    </div>
                <?php unset($_SESSION['success']); } ?>
            <div class="alert alert-danger" role="alert" id="error_message" style="display:none"></div>
            <form class="form-horizontal" action="connection/handler.php" method="post">
                <fieldset>
               
                <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="First Name" name="f_name">
                    </div>
                 
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Last Name" name="l_name">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Address" name="address">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="City" name="city">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Country" name="country">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="number" class="form-control" placeholder="Mobile No." name="mobile_no">
                    </div>


                    <!-- <div class="input-prepend">
                        <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                    </div>
                    <div class="clearfix"></div> -->

                    <p class="center col-md-4">
                        <input type="hidden" name="registration" id="registration"/>
                        <button type="submit" class="btn btn-primary" value="register" name="registration">Register</button>
                        <a class="remember" href="./login.php">Login</a>
                    </p>
                  </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->
<!-- front-end validation-->
<script src="assets/js/validation.js"></script>

<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="assets/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='assets/bower_components/moment/min/moment.min.js'></script>
<script src='assets/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='assets/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="assets/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="assets/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="assets/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="assets/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="assets/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="assets/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="assets/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="assets/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="assets/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="assets/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="assets/js/charisma.js"></script>


</body>
</html>
