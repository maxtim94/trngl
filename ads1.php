<?php
session_cache_limiter("none");
session_start();

@include_once($_SERVER['DOCUMENT_ROOT'].'/conf/ini.php');

$inPath = 'm/';
$ads_url = '***'; 
$airport_url = '***'; 
$ads_id= '*****_2017_od';
$ads_stat_id = 97; 
$stat_id = 17;
@include($_SERVER['DOCUMENT_ROOT'].'/inc/ver01s01.php');

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>***** Wi-fi</title>
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/device.js"></script>
</head>

<body>
<?php
  /*
   * ver01s02.php:
   * Piwik Tracker Code
   */
  @include($_SERVER['DOCUMENT_ROOT'].'/inc/ver01s02.php');
  ?><script>
  $(document).ready(function(){
    if (device.mobile() && !device.ipad()) {
      $("head").append($("<link rel='stylesheet' href='css/style.css' type='text/css' media='screen' />"));
    } else {
      $("head").append($("<link rel='stylesheet' href='css/stylep.css' type='text/css' media='screen' />"));
    };
  });
</script>

<div id="wrap"> <img id="loading" src="images/loading.gif">
  <div class="content">
    <img src="images/pwtv.png" id="wt">
    <div class="prewait" id="prewait">
      <div id="wait">
        <div id="timer">10</div>
        <img src="images/pw.png" id="wr"> </div>
    </div>
    <div id="vertical">
      <div id="slider2v" class="worksheet">
      <img id="bgv" src="images/*****_v.jpg">
      <a id="linkv" href="<?php echo $ads_url; ?>" onClick="goUrl('<?php echo $ads_url;?>'); return false;">
        <img id="btn1v" src="images/btn1v.png">
      </a>
      <div id="menuAllv">
      <img src="images/menu1.png">
        <a class="url" href="<?php echo $airport_url; ?>" onClick="goUrl('<?php echo $airport_url;?>'); return false;">
          <div class="menuItem" id="airportv"></div>
        </a>
        <a class="url" href="<?php echo $orig_href; ?>" onClick="goUrl('<?php echo $orig_href; ?>'); return false;">
          <div class="menuItem" id="internetv"></div>
        </a>
      </div>
      </div>
    </div>

    <div id="horizontal">
      <div id="slider2" class="worksheet">
        <img id="bgh" src="images/*****_m.jpg">
      <a id="linkh" href="<?php echo $ads_url; ?>" onClick="goUrl('<?php echo $ads_url;?>'); return false;">
        <img id="btn1h" src="images/btn1.png">
      </a>
      <div id="menuAll">
        <a class="url" href="<?php echo $airport_url; ?>" onClick="goUrl('<?php echo $airport_url;?>'); return false;">
          <div class="menuItem" id="airport"></div>
        </a>
        <a class="url" href="<?php echo $orig_href; ?>" onClick="goUrl('<?php echo $orig_href; ?>'); return false;">
          <div class="menuItem" id="internet"></div>
        </a>
      </div>
      </div>
    </div>

    <div id="pc">
      <div id="slider2p" class="worksheet">

      <img id="bg" src="images/*****_back.jpg">


      <a class="url" href="<?php echo $ads_url; ?>" onClick="goUrl('<?php echo $ads_url;?>'); return false;">
        <img id="btn1p" src="images/btn1.png">
      </a>


      <div id="menuAllp">
        <a class="url" href="<?php echo $airport_url; ?>" onClick="goUrl('<?php echo $airport_url;?>'); return false;">
          <div class="menuItem" id="airportp"></div>
        </a>
        <a class="url" href="<?php echo $orig_href; ?>" onClick="goUrl('<?php echo $orig_href; ?>'); return false;">
          <div class="menuItem" id="internetp"></div>
        </a>
      </div>
    </div>
    </div>

  </div>
</div>

<script src="js/jquery.transform2d.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.rotate.js"></script>
<script src="js/sf.js"></script>
<script src="js/animation.js"></script>
<script src="js/resize.js"></script>


</body>
</html>
<?php

@include($_SERVER['DOCUMENT_ROOT'].'/inc/ver01s03.php');