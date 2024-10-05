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
    <title>Venus</title>
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
width: 100%;
height: 160%;
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

</style>
<body>
<div class="contaner">
<!-- <video  src="vid/backgroung.mp4" autoplay loop></video> -->
<img src="img/team_poster.png" class="vid"  alt="" srcset="">

   
</div>
</body>
</html>