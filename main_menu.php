<ul class="nav nav-pills nav-stacked"> 
<?php   use google\appengine\api\users\User;   
use google\appengine\api\users\UserService;   
global $user;   global $appid,$page,$title; 
 
  $menufile="gs://$appid/menu.txt";   
  if(!file_exists($menufile)){  
  file_put_contents($menufile,"home=หน้าหลัก=home");     
  }   $data = file($menufile);   $title = $page;   
  foreach($data as $line){     
  $s = trim($line);     
  if($s!=''){       
  list($key,$value,$icon) = explode("=",$s);       
  $active="";       
  if($key==$page){  
  $active="class='active'";              
  $title=$value;          
  }       
  if($icon!=''){  
  $icon="<span class='glyphicon glyphicon-$icon'></span>";  }            
  echo "<li $active><a href='main.php?p=$key'>$icon $value</a>";     
  }   
  }   
  if (UserService::isCurrentUserAdmin()){      
  $active='';      
  if($page=='edit'){          
  $active="class='active'";          
  $title="File Edit";      }      
  echo "<li $active><a href= main.php?p=edit&file=menu.txt'>Edit Menu</a>";   } 
  ?>  
  </ul> 
