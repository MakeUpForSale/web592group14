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
                                <h5><a href="#">PRIMER</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$30.00</span>
                                <p>ไพรเมอร์ จะทำหน้าที่เตรียมผิวก่อนแต่งหน้า โดยทำหน้าที่กระชับรูขุมขน ทำให้รูขุมขนดูเล็กลง ผิวดูกระชับขึ้นทำให้การลงรองพื้นดูเนียนเรียบ ป้องกันผิวหน้าหมองคล้ำระหว่างวัน และทำให้เครื่องสำอางติดทนนานยิ่งขึ้น</p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/2.jpg" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">LIPSTICK</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$45.00</span>
                                <p>ลิปสติก คือ เครื่องสำอางที่ใช้แต่งริมฝีปาก มักเป็นสีแดงหรือสีชมพู ทำให้ริมฝีปากสวยงาม และปกปิดความบกพร่องของริมฝีปาก</p>
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
                                <h5><a href="#">EYESHADOW</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$30.00</span>
                                <p>เครื่องสำอางค์ที่ใช้ปัดทาบนเปลือกตาใต้คิ้ว เพื่อให้เกิดมิติความลึกของตาในแต่ละข้าง นอกจากนั้นแล้วยังทำให้ดูแล้วเด่น มีเสน่ห์อีกด้วย อายแชโดว์ มีหลายชนิด และมีสีสันต่างๆ มากมาย โดยปกติแล้วจะทำมาจากแป้ง และไมก้า ในบางครั้งอาจจะพบอายแชโดว์ในรูปของเหลว ดินสอ ได้เช่นกัน</p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/4.png" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">EYELINER</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$45.00</span>
                                <p>อายไลเนอร์ (Eyeliner) เป็นเครื่องสำอางที่ใช้เขียนบริเวณรอบดวงตา เพื่อสร้างความหลากหลายให้กับดวงตา ทั้งดวงตาแบบหวาน ลึกลับ โฉบเฉียว หรือมีสเน่ห์น่าค้นหา อีกทั้งยังช่วยทำให้ดวงตาดูโตขึ้นมากกว่าปกติ ซึ่งอายไลเนอร์นี้มีประวัติการใช้งานคู่กับคุณสาวๆ มาอย่างยาวนาน นับย้อนไปตั้งแต่สมัยอียิปต์โบราณ และยุคเมโสโปเตเมียกันเลยทีเดียว</p>
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
                                <h5><a href="#">BLUSH</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$30.00</span>
                                <p>บลัชออน คือเครื่องสำอางที่ช่วยเพิ่มสีสันบริเวณแก้ม และยังช่วยสร้างมิติของใบหน้าให้ดูเล็กลงหรือเรียวงามขึ้น นอกจากนี้ยังทำให้ใบหน้าดูนวลเนียน ทำให้สีสันบนใบหน้าดูเด่นชัดขึ้น</p>
                            </div> <!-- /.product-content -->
                        </div> <!-- /.product-item-2 -->
                        <div class="product-item-2">
                            <div class="product-thumb">
                                <img src="images/6.jpg" alt="Product Title">
                            </div> <!-- /.product-thumb -->
                            <div class="product-content overlay">
                                <h5><a href="#">POWDER</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$45.00</span>
                                <p>แป้งฝุ่น: 
คือ แป้งชนิดที่มีเนื้อละเอียดบางเบาเหมือนฝุ่นละอองเล็กๆ เหมาะสำหรับทาทับลงบนผิวหน้าหลังจากการรองพื้น หรือทาคอนซีลเลอร์ไว้ แป้งฝุ่นมีคุณสมบัติ ช่วยให้ผิวดูนวลเนียนเป็นธรรมชาติยิ่งขึ้น และช่วยดูดซับความมันหลังการแต่งหน้าได้เป็นอย่างดี ควรใช้แป้งฝุ่นสีเดียวกันกับผิวเรา (ควรทดลองสีก่อนซื้อที่ Counter) เราใช้แป้งฝุ่นเพื่อทำให้รองพื้นติดทนนานมากขึ้นและการแต่งหน้าก็จะดูสวย สมบูรณ์แบบ </p>
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
