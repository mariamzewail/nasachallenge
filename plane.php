<?php

include 'onther page/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- ===== CSS ===== -->
   <link rel="icon" href="img/logo.png" type="image/x-icon">
   <link rel="stylesheet" href="./css/navbar.css">      
   <link rel="stylesheet" href="css/plane.css">
        <!-- ===== CSS ===== -->
  <title>Solar System</title>
</head>
<body class="opening hide-UI view-2D zoom-large data-close controls-close">
  <div id="navbar">
    <a id="toggle-data" href="#data"><i class="icon-data"></i>Data</a>
    <a id="toggle-controls" href="#controls"><i class="icon-controls"></i>Controls</a>
  </div>
  <div id="data">
    <a class="sun" title="sun" href="#sunspeed">Sun</a>
    <a class="mercury" title="mercury" href="#mercuryspeed">Mercury</a>
    <a class="venus" title="venus" href="#venusspeed">Venus</a>
    <a class="earth active" title="earth" href="#earthspeed">Earth</a>
    <a class="mars" title="mars" href="#marsspeed">Mars</a>
    <a class="jupiter" title="jupiter" href="#jupiterspeed">Jupiter</a>
    <a class="saturn" title="saturn" href="#saturnspeed">Saturn</a>
    <a class="uranus" title="uranus" href="#uranusspeed">Uranus</a>
    <a class="neptune" title="neptune" href="#neptunespeed">Neptune</a>
  </div>
  <div id="controls">
    <label class="set-view">
      <input type="checkbox">
    </label>
    <label class="set-zoom">
      <input type="checkbox">
    </label>
    <label>
      <input type="radio" class="set-speed" name="scale" checked>
      <span>Speed</span>
    </label>
    <label>
      <input type="radio" class="set-size" name="scale">
      <span>Size</span>
    </label>
    <label>
      <input type="radio" class="set-distance" name="scale">
      <span>Distance</span>
    </label>
  </div>
  <div id="universe" class="scale-stretched">
    <div id="galaxy">
      <div id="solar-system" class="earth">
        <div id="mercury" class="orbit" onclick="mercury();">
          <div class="pos" onclick="mercury();">
            <div class="planet" onclick="mercury();">
              <dl class="infos" >
                <dt>Mercury</dt>
                <dd><span></span></dd>
              </dl>
            </div>
          </div>
        </div>
        <div id="venus" class="orbit">
          <div class="pos" onclick="Venus();">
            <div class="planet" onclick="Venus();">
              <dl class="infos">
                <dt>Venus</dt>
                <dd><span></span></dd>
              </dl>
            </div>
          </div>
        </div>
        <div id="earth" class="orbit">
          <div class="pos">
            <div class="orbit">
              <div class="pos">
                <div class="moon"></div>
              </div>
            </div>
            <div class="planet" onclick="earth();">
              <dl class="infos">
                <dt>Earth</dt>
                <dd><span></span></dd>
              </dl>
            </div>
          </div>
        </div>
        <div id="mars" class="orbit">
          <div class="pos" onclick="Mars();">
            <div class="planet" onclick="Mars();">
              <dl class="infos" onclick="Mars();">
                <dt>Mars</dt>
                <dd><span></span></dd>
              </dl>
            </div>
          </div>
        </div>
        <div id="jupiter" class="orbit">
          <div class="pos" onclick="Jypiter();">
            <div class="planet" onclick="Jypiter();">
              <dl class="infos" onclick="Jypiter();">
                <dt>Jupiter</dt>
                <dd><span></span></dd>
              </dl>
            </div>
          </div>
        </div>
        <div id="saturn" class="orbit">
          <div class="pos" onclick="Saturn();">
            <div class="planet" onclick="Saturn();">
              <div class="ring"></div>
              <dl class="infos" onclick="Saturn();">
                <dt>Saturn</dt>
                <dd><span></span></dd>
              </dl>
            </div>
          </div>
        </div>
        <div id="uranus" class="orbit">
          <div class="pos" onclick="Uranus();">
            <div class="planet" onclick="Uranus();">
              <dl class="infos" onclick="Uranus();">
                <dt>Uranus</dt>
                <dd><span></span></dd>
              </dl>
            </div>
          </div>
        </div>
        <div id="neptune" class="orbit">
          <div class="pos" onclick="Neptune();">
            <div class="planet" onclick="Neptune();">
              <dl class="infos" onclick="Neptune();">
                <dt>Neptune</dt>
                <dd><span></span></dd>
              </dl>
            </div>
          </div>
        </div>
        <div id="sun">
          <dl class="infos">
            <dt>Sun</dt>
            <dd><span></span></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script type="text/javascript">
    if (typeof jQuery == 'undefined') { 
      document.write(unescape("%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
  </script>
  <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66f5d0484cbc4814f7df853b/1i8o3b6lh';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

</script>
  <script src="js/prefixfree.min.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
