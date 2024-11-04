<?php error_reporting(0); 
include '../function.php';
 //echo'<pre>';print_r($_REQUEST);echo'</pre>';



if($_REQUEST['eid']){
    $n = $_REQUEST['eid'] - 1;
   $filename  = "../ads_/$n.txt";
   if (file_exists($filename)){
       unlink($filename);
    echo "File exist.";
}else{
    echo "File does not exist.";
    
    file_put_contents($filename, 'CodeHap.com');
}


}

if($_REQUEST['event'] == "pageEdit"){
    
  if($demoMode){die("<div style='color:red;padding:5px;'>Error: Not Allowed in Demo Mode</div>");}
    
$post_content = $_REQUEST['post_content'];
$eventId = $_REQUEST['eventId'];
$path = "../ads/$eventId";
$myfile = fopen($path, "w") or die("Unable to open file!");
fwrite($myfile, $post_content);
fclose($myfile);
}