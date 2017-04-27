<?php    
use google\appengine\api\users\UserService;    
global $appid,$page,$title,$userdata; 
$fbfile = "gs://$appid/$page.json";    
$fbdata = array(); 
 
if(file_exists($fbfile)){                
$fbjson = file_get_contents($fbfile);         
$fbdata = json_decode($fbjson, true);        
echo "<hr>";            
foreach($fbdata as $fb){    
$text = htmlspecialchars($fb['feedback']);     
$time=date("d/m/Y H:i:s",$fb['time']); 
 
               $pic = userpic($fb['user']); 
 
   echo "<div class='row'>";    
   echo "<div class='col-xs-1'><img src='$pic' width='48'></div>";    
   echo "<div class='col-xs-10'>";                
   echo "<a href='#'>$fb[name]</a><br>$text <br>";    
   echo "<a href='#'>ถกูใจ</a> $time<hr>";    
   echo "</div>";    echo "</div>";        
   }           
   }        
   $user  = UserService::getCurrentUser();    
   if($user){        
   include("main_feedback_add.php");          
   }    
   ?>
