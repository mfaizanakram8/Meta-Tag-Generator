<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google" content="notranslate" />
<link rel="icon" href="/favicon/favicon.ico">
<title><?php echo u($title) ;?></title>
<meta name="description" content="<?php echo u($description) ;?>" />
<link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
<meta name="distribution" content="global"/>
<meta name="language" content="en" />

 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
 
  

<script src="ckeditor/ckeditor.js"></script>

<style>.codehap_container{
max-width:95%;
margin:auto;
}

body{font-family: 'Poppins', sans-serif;

background: #fefefe;
}

</style>

</head><body>

<section id="svg">
         <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>

               <symbol id="icon-spinner" viewBox="0 0 32 32">
                  <path d="M32 12h-12l4.485-4.485c-2.267-2.266-5.28-3.515-8.485-3.515s-6.219 1.248-8.485 3.515c-2.266 2.267-3.515 5.28-3.515 8.485s1.248 6.219 3.515 8.485c2.267 2.266 5.28 3.515 8.485 3.515s6.219-1.248 8.485-3.515c0.189-0.189 0.371-0.384 0.546-0.583l3.010 2.634c-2.933 3.349-7.239 5.464-12.041 5.464-8.837 0-16-7.163-16-16s7.163-16 16-16c4.418 0 8.418 1.791 11.313 4.687l4.687-4.687v12z"></path>
               </symbol>


               <symbol id="icon-play" viewBox="0 0 32 32">
                  <path d="M6 4l20 12-20 12z"></path>
               </symbol>
               <symbol id="icon-stop" viewBox="0 0 35 35">
                  <path d="M4 4h24v24h-24z"></path>
               </symbol>

            </defs>
         </svg>
      </section>

      <?php $bace_paths = explode("/",$_SERVER['PHP_SELF']);
      $bace_path = $bace_paths[1]; ?>
   
      
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/<?=$bace_path?>/index.php">
        
        
        
        <svg  height="30" width="30" version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="317.000000pt" height="261.000000pt" viewBox="0 0 317.000000 261.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,261.000000) scale(0.100000,-0.100000)"
fill="#fff" stroke="none">
<path d="M1140 2484 c-77 -20 -208 -84 -298 -146 -77 -53 -310 -277 -412 -397
-204 -239 -277 -378 -314 -601 -45 -267 90 -532 429 -844 287 -264 417 -346
643 -407 116 -30 195 -34 292 -15 209 43 416 187 663 461 58 65 113 117 135
127 128 59 192 87 225 98 20 8 37 18 37 22 0 4 3 7 8 6 4 -1 18 3 32 9 180 77
435 188 470 206 l45 22 3 85 c4 110 -1 125 -40 140 -18 7 -98 41 -178 75 -80
35 -169 73 -199 85 -129 50 -142 59 -162 108 -74 175 -154 289 -313 447 -203
202 -319 301 -443 378 -213 131 -453 186 -623 141z m754 -614 c0 -14 -13 -70
-28 -124 -21 -79 -24 -101 -14 -107 7 -5 16 -9 20 -9 4 0 114 -46 245 -101
131 -56 272 -115 313 -131 93 -37 104 -41 160 -66 25 -11 86 -36 135 -57 135
-55 132 -52 134 -132 0 -37 -2 -85 -5 -106 -6 -36 -10 -41 -73 -69 -36 -16
-82 -36 -101 -43 -19 -7 -64 -26 -100 -43 -36 -16 -105 -46 -155 -67 -49 -20
-113 -48 -142 -61 -28 -13 -54 -24 -57 -24 -3 0 -29 -11 -58 -24 -166 -77
-311 -134 -323 -129 -12 4 -15 28 -15 117 0 61 4 116 8 123 4 7 61 34 127 61
134 56 255 108 336 145 30 13 77 32 104 41 28 9 61 23 75 31 l25 14 -40 16
c-39 16 -162 68 -410 173 -66 28 -142 59 -170 69 l-50 19 -5 104 c-6 116 -5
118 -51 -65 -16 -66 -34 -131 -38 -145 -5 -14 -18 -59 -29 -100 -12 -41 -42
-149 -67 -240 -45 -159 -65 -230 -106 -370 -10 -36 -28 -99 -40 -140 -12 -41
-26 -80 -30 -86 -10 -12 -196 -11 -209 2 -5 5 0 40 11 79 50 175 113 400 220
785 39 140 82 293 96 340 25 85 67 233 85 302 6 20 18 39 27 42 9 2 57 4 106
3 89 -2 90 -2 89 -27z m-693 -135 c-1 -77 -7 -124 -14 -131 -13 -12 -125 -59
-377 -158 -226 -89 -286 -117 -269 -126 8 -5 84 -36 169 -69 85 -34 162 -66
171 -70 9 -5 78 -35 155 -66 76 -31 145 -62 152 -67 9 -8 12 -43 10 -132 -3
-115 -4 -121 -23 -118 -27 5 -142 49 -185 72 -19 10 -46 21 -60 25 -23 7 -132
54 -280 122 -30 14 -86 38 -125 53 -38 16 -131 55 -205 88 l-135 59 0 109 0
109 65 32 c36 17 112 50 169 73 57 23 111 46 120 50 9 5 54 25 101 44 85 35
259 108 440 185 52 22 101 39 109 38 12 -2 14 -24 12 -122z"/>
</g>
</svg>
        
        
        
        
        
        
        
        
        Admin Panel</a>
    
    <?php if(isset($_SESSION["loggedin"])){ ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         

    
 <li class="nav-item">
          <a class="nav-link text-white" href="/<?=$bace_path?>/list-page.php">Page</a>
        </li>
     
                <li class="nav-item">
          <a class="nav-link text-white" href="/<?=$bace_path?>/code_ads.php">Code's</a>
        </li>
        
        
          
        
        
        <li class="nav-item">
          <a class="nav-link text-white" href="/" target="_blank">View Site</a>
        </li>
        
        
      </ul>
    
    <span class="navbar-text">
      <a class="nav-link" href="/<?=$bace_path?>/logout.php" role="button">Log Out</a>
      </span>
      
      </div>
      
       <?php } ?>
       
  </div>
</nav>
      
      
<div class="mt-3 container-fluid">