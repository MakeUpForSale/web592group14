<?php
 global $appid;
 use google\appengine\api\users\UserService;
 if (!UserService::isCurrentUserAdmin()){
 echo "For Admin only";
 return;
 }
 $file = $_REQUEST['file'];
 $filename = "gs://$appid/$file";
 if($_POST["file"] && $_POST["filedata"]){
 file_put_contents($filename,$_POST["filedata"]);
 $page=substr($file,0,-5);
 if($file=='menu.txt') $page='home';
?>
 บันทึกเรียบร้อย ไปที่หน้า <a href='main.php?p=<?=$page?>' id='pagelink'><?=$page?></a>
 <script>
 window.setTimeout(function(){pagelink.click()},1000);
 </script>
<?php
 return;
 }
 $filedata = "";
 if(file_exists($filename)){
 $filedata = file_get_contents($filename);
 }
?>
<form method="post" action="">
<div class="form-group">
 <label for="file">File Name</label>
 <input class="form-control" type='text' name='file' value="<?=$file?>">
</div>
<div class="form-group">
 <label for="filedata">File Data</label>
 <textarea class="form-control" name='filedata' rows=15><?= htmlspecialchars($filedata) ?></textarea>
</div>
<button class="btn btn-primary"> Save </button>
</form>
