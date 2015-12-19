<?php header('Content-Type: text/html; charset=UTF-8'); 
//header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
//header("Cache-Control: post-check=0, pre-check=0", false);
//header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
//header("Pragma: no-cache"); // HTTP/1.0
//header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
include_once("config/tail.php");
//$str = exec('start /B D:\Script\scpinfrubber_get.bat');

$test="C:\proscp\logerr.log";
$l=1;
echo "Hello, ";
//system("ls -l");


$text = tailCustom($test, $l);
echo $text;
echo "world!\n";


//system("cmd /c D:\project_sps0019\scpinfcif33_get.bat");
//system("cmd /c D:\project_sps0019\scpinfcif33_send.bat");

 //system("cmd /c D:\project_sps0019\scpinfrubber_get.bat");
//system("cmd /c D:\project_sps0019\scpinfrubber_send.bat");



echo "<hr>";
if($text!='0') {
    echo '<html>
    <head>
        <meta http-equiv="refresh" content="5;url=reload_file.php" />
    </head>
    <body>HI</body></html>';
}else{
    echo "read file = 0";
}
?>

<!--<script type="text/javascript">-->
<!--        $(function(){-->
<!--		/*$( "#list_file" ).empty();-->
<!--		$( "#list_file" ).load( "model/get_file.php?1555");-->
<!--		$( "#log_detail" ).load( "model/process_status.php" );-->
<!--		$('#submit').removeAttr('disabled');-->
<!--		*/-->
<!--		$( "#list_file" ).load( "model/get_file.php");-->
<!--		$('#loading').remove();-->
<!--		-->
<!--		});-->
<!-- </script>-->