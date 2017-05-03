<?php
 $appid = "your_appid.appspot.com";
 $page = $_GET['p'];
 if($page=='') $page='main';
 $title = $page;
 function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
 include($file);
}else{
 echo "ไม่พบไฟล์ $file ";
}
echo "</div>";
echo "</div>";
 }
 use google\appengine\api\cloud_storage\CloudStorageTools; 
 
function userpic($uid){    
global $appid;      
$userpic="gs://$appid/{$uid}.jpg";    
if(!file_exists($userpic)){        
return "user.png";    }    
return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);   
} 
 
?>
<html lang="th">
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>MakeUpForSale::Homepage</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
<link rel="stylesheet"
href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>
 
    <header class="site-header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="top-header-left">
                            
                        </div> 
                    </div> 
                    <div class="col-md-6 col-sm-6">
                        <div class="social-icons">
                            <a href="https://accounts.google.com/SignUp?service=mail&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default">Sign Up</a> |
                            <a href="main_user.php">Log In</a>
                            <div class="clearfix"></div>
                        </div> <!-- /.social-icons -->
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-header -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-8">
                        <div class="logo">
                            <img src="logo.png"></img>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-7 col-sm-6 col-xs-4">
                        <div class="main-menu">
                            <a href="#" class="toggle-menu">
                                <i class="fa fa-bars"></i>
                            </a>
                            <ul class="menu">
                                <li><a href="main.php">Home</a></li>
                                <li><a href="\product\index.php">Catalogs</a></li>
                                <li><a href="#">About</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="list-menu">
                            <ul>
                                <li><a href="\product\index.php">Shop</a></li>
                                <li><a href="product-detail.html">Details</a></li>
                                <li><a href="contact.html">About</a></li>
                            </ul>
                        </div> <!-- /.list-menu -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-5">
                        <div class="notification">
                            <span>Makeup For Sale</span>
                        </div>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-nav -->
    </header> <!-- /.site-header -->

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product-holder">
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/1.png" alt="Product Title" ">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">Kooler Shirt</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$30.00</span>
                                <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/2.jpg" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">Koolest Shirt</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$45.00</span>
                                <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                        <div class="clearfix"></div>
                    </div> <!-- /.product-holder -->
                </div> <!-- /.col-md-5 -->
				<div class="col-md-4">
                    <div class="product-holder">
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/3.jpg" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">Kooler Shirt</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$30.00</span>
                                <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/4.png" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">Koolest Shirt</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$45.00</span>
                                <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                        <div class="clearfix"></div>
                    </div> <!-- /.product-holder -->
                </div> <!-- /.col-md-5 -->
				<div class="col-md-4">
                    <div class="product-holder">
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/5.jpg" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">Kooler Shirt</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$30.00</span>
                                <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/6.jpg" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">Koolest Shirt</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$45.00</span>
                                <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                        <div class="clearfix"></div>
                    </div> <!-- /.product-holder -->
                </div> <!-- /.col-md-5 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->


    
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


</body>
</html>
