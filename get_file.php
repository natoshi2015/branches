<?php header('Content-Type: text/html; charset=UTF-8'); 
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Pragma: no-cache"); // HTTP/1.0
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	  //require("../config/connSQL2012_new.php"); 
/*
@ Create by : Pattanakiat 
@ Detail    : 
@ DBMain : 
-- Last modify : 25 03 2014
*/
/*
$load=$_GET['f'];

if ($reload='reload'){
echo $load;
$str = exec('start /B D:\Script\scpinfss40_get.bat'); 
}
*/
//system("cmd /c D:\SSOProcess\zipReport.bat");
$dir = 'D:\Script\Data\FromCBS';
//echo $str.'<br>';
$files = scandir($dir);
$valuefile = "";
//rsort($files);   order by date ล่าสุด
$extensions = array("DAT");
$ullist="";
// Loop through each filename of scandir
function getFileExtension($filename)
  {
      $path_info = pathinfo($filename);
      return $path_info['extension'];
  }

foreach ($files as $filename) {
     // Construct a full path
     $filepath = $dir.'/'.$filename;
     // Is it a file? If so, get the extension using some function you created
     if(is_file($filepath)) {
          $ext = getFileExtension($filename);
		  
          // Is the file extension not included in the array of forbidden extensions?
          // Since it is not included, execute code to list the file or whatever
          if (in_array($ext,$extensions)) {
               // Code for files not excluded
			  
            $result[]= $filename;
			$valuefile=substr($filename, 0, -4);
		    $ullist.="<li class='list-group-item'><input type='radio' name='list' value=".$valuefile.">  : ".$filename." </li>";
		
          }
     }
}
	if($valuefile==""){
	$ullist.="<li class='list-group-item'>ไม่มีไฟล์ข้อมูล</li>";
	}

//echo json_encode($result);
echo "<ul id='ul_list'>".$ullist."</ul>";
?>
<script type="text/javascript">
        $(function(){
	var $radiostype = $('input:radio[name=list]');
    if($radiostype.is(':checked') === false) {
        $radiostype.filter(':first').attr('checked', true);
		}
		});
 </script>