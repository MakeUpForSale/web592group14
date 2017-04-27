<!doctype html>
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
if(!file_exists($userpic)){        return "user.png";    }    
return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);   
} 
 
?>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>MakeUpForSale::Homepage</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <link rel="stylesheet"
href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body role="document">
<header class="page-header text-center">
<h1>Website LOGO</h1>
<?php
 readfile("gs://$appid/header.html");
?>
</header>
<div class="container">
<div class="col-sm-3">
<?php panel_include("User","user.php"); ?>
<?php panel_include("Menu","menu.php"); ?>
</div>
<div class="col-sm-9">
<?php panel_include($title,"work8_body.php" ,"primary"); ?>
</div>
</div>
 <footer class="text-center page-footer">
<?php
 readfile("gs://$appid/footer.html");
 echo "<br><a href='?p=edit&file=header.html' class='btn btn-default'>แก้ไข header</a>";
 echo "<a href='?p=edit&file=footer.html' class='btn btn-default'>แก้ไข footer</a>";
?>
 </footer>
 <br>
<center><a href="main.php"><img src="images/17.png" title="กลับไปหน้าแรก" height='70' width='70'></a></center>
</body>
</html>
