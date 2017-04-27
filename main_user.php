<?php
  use google\appengine\api\users\User;    
  use google\appengine\api\users\UserService;    
  global $user,$userdata,$appid; 
  
  $user  = UserService::getCurrentUser();    
  if($user){        
  $uid = $user->getUserId();        
  $userfile  = "gs://$appid/user_$uid.json";        
  $userdata = array();        
  if(file_exists($userfile)){            
          
  $filedata = file_get_contents($userfile);           
  $userdata = json_decode($filedata,true);         
  }else{        $userdata['nick']=$user->getNickname();     
  }             
  $url = UserService::createLogoutUrl('/main.php');        

  echo "<img src='".userpic($uid)."' width='200'><br>";      
  echo $userdata['nick'];        
  echo "<br><a href='main.php?p=edituser'>Edit User</a>";   
  echo "<br><a href='$url'>Logout</a>";   
    }else{      $url = UserService::createLoginUrl('/main.php');     
	echo "<a href='$url'>Login or Register</a>";    
	}  
?> 
