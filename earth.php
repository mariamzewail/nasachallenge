<?php

include 'onther page/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">      
        <!-- ===== CSS ===== -->
    <title>Earth</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Madimi+One&family=Ojuju:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

*{
    font-family: "Rubik", sans-serif;
 margin: 0;
 padding: 0;
 box-sizing: border-box;  
 scroll-behavior: smooth;
}

/*start*/

.contaner{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;
}
.vid{
        background-repeat: no-repeat;
background-size: cover;
width: 107.5%;
margin: 0;
    padding: 0;
    /* position: fixed; */


    }
    body::-webkit-scrollbar{
    display: none;
}
.info{
    /* margin-top: 40% !important; */
   color: #fff;
   position: fixed;
   text-align: left;

}
.info img{
    width: 85%;
    margin-top: 90px;
    margin-left: -90px;


}
.info .lol{
 height: 330px !important;
    width: 562px !important;
    margin-top: -33% !important;
    margin-left: 16% !important;
}}
</style>
<body>
<div class="contaner">
<!-- <video  src="vid/backgroung.mp4" autoplay loop></video> -->
<video  autoplay lood muted class="vid">
    <source  src="vid/Earth.mp4" type="video/mp4">
</video>
<div class="info">
    <div >
<img src="img/inf.png" alt="" srcset="">
<div class="lol" style="height:350px;width:550px;font:35px/40px Georgia, Garamond, Serif;overflow:auto;">
Earth is the third planet from the Sun and the only known planet to support life. It has a 
                                            diameter of about 12,742 km and a mass of approximately 5.97 × 10^24 kg. Earth orbits the Sun 
                                            at an average distance of 149.6 million km, completing one revolution in 365.26 days. It has one 
                                            natural satellite, the Moon, and a diverse atmosphere primarily composed of nitrogen and oxygen. 
</dive>
</div>

</div>
   
</div>
</body>
</html>