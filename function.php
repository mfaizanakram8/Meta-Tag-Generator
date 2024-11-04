<?php

$servername = "localhost";
$username = "paste_here";
$password = "paste_here";
$dbname = "paste_here";

$demoMode = true; // true || false
$host = $_SERVER['HTTP_HOST'];
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


   $default_title = 'Meta tag generator || Preview, edit, and generate meta tags with the Meta Tag Generator';
   $default_description = 'With This Meta Tags, you can edit and experiment with your content, and then preview how your webpage will look on Google, Facebook, Twitter, and many other search engines!';
   $default_image = "http://$host/images/default.jpg";
   $default_url = $current_url;
   $default_icon = "https://codehap.com/favicon/apple-icon-60x60.png";


$themeColour  = "#2A81FB";


$home = false;
date_default_timezone_set('Asia/Kolkata');
 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


 

$request = explode("/", $_SERVER['REQUEST_URI']);
$request = array_filter($request);



$sql = "SELECT * FROM settings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
  $setting[] =  $row;
  }
} 


function getCanonicalUrl()
{
     global $current_url;
    $url = str_replace("www.", "", $current_url);
    $url = rtrim($url, "/");
    return $url;
}


function codetags($file)
{       $file = str_replace("1.php", "Ads Code Sidebar", $file);
    $file = str_replace("2.php", "Ads Code After Header", $file);
    $file = str_replace("3.php", "Ads Code After H1 Title", $file);
    $file = str_replace("4.php", "Ads Code under search box", $file);
    $file = str_replace("5.php", "Ads Code Before Footer", $file);
    $file = str_replace("6.php", "Code Head Section", $file);

    return $file;
}


function codehap_contents($url)
{
    $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}


function cleanurl($string, $separator = '-')
{
    $string = str_replace("/"," 1codehap1 ",$string);


    $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
    $special_cases = array(
        '&' => 'and',
        "'" => ''
    );
    $string = preg_replace('/\s+/', ' ', $string);
    $string = strtolower($string);
    $string = trim($string);
    $string = mb_strtolower(trim($string) , 'UTF-8');
    $string = str_replace(array_keys($special_cases) , array_values($special_cases) , $string);
    $string = preg_replace($accents_regex, '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'));
    $string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
    $string = preg_replace("/[$separator]+/u", "$separator", $string);

    $string = str_replace("-1codehap1-","/",$string);


    return $string;
}


 function u($text){

return ucwords($text);

 }

 

?>