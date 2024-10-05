

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Home</title>
        <!--icon-->
        <link rel="icon" href="img/logo.png" type="image/x-icon">
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    
        <!--  ====        bootstrap  ==== -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!--  ==== fonts  ==== -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <!--  ==== font awsome  ==== -->
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <!--Bootstrap CSS  -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <!-- ===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./css/navbar.css">      
        <!-- ===== CSS ===== -->
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
    margin-top: 40% !important;
   color: #fff;
   position: fixed;
   text-align: center;

}
.btn1{
   width: 150px !important;
   height: 50px;
   border-radius: 50px;
   color: #fff;
   background:#01171f;
   border:none;
   cursor: pointer !important;


}
.btn1 a{
    text-decoration: none;
    color: #fff;
}
</style>
<body>
<?php

include 'onther page/header.php';

?>

<div class="contaner">
<!-- <video  src="vid/backgroung.mp4" autoplay loop></video> -->
<video  autoplay lood muted class="vid">
    <source  src="vid/backgroung.mp4" type="video/mp4">
</video>
<div class="info">
     <button class="btn1"  type="button"><a href="plane.php">Start</a></button><br><br>
    <p>A journey into space is a journey into the unknown.</p>
</div>
   
</div>
<script>const body = document.querySelector("body"),
        nav = document.querySelector("nav"),
        modeToggle = document.querySelector(".dark-light"),
        searchToggle = document.querySelector(".searchToggle"),
        sidebarOpen = document.querySelector(".sidebarOpen"),
        siderbarClose = document.querySelector(".siderbarClose");
  
        let getMode = localStorage.getItem("mode");
            if(getMode && getMode === "dark-mode"){
              body.classList.add("dark");
            }
  
  
  
  // js code to toggle search box
          searchToggle.addEventListener("click" , () =>{
          searchToggle.classList.toggle("active");
        });
   
        
  //   js code to toggle sidebar
  sidebarOpen.addEventListener("click" , () =>{
      nav.classList.add("active");
  });
  
  body.addEventListener("click" , e =>{
      let clickedElm = e.target;
  
      if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
          nav.classList.remove("active");
      }
  });
  
  const help = document.getElementById('help');
  
  help.addEventListener('click', () => {
    window.scrollTo({
      top: 702,
      behavior: 'smooth'
    });
  });
  
  
  
  </script>
  <script>
        let filter = document.getElementById('filter');
        let Morefilters = document.getElementById('Morefilters');
    
        filter.style.display = 'none';
        Morefilters.style.cursor = 'pointer';
    
        Morefilters.onclick = () => {
          if (filter.style.display === 'none') {
            filter.style.display = 'flex';
          } else {
            filter.style.display = 'none';
          }
        };
    
var modal_wrapper = document.querySelector(".modal_wrapper");
var shadow = document.querySelector(".shadow");
var btn_done = document.querySelector(".btn_done");


btn_done.addEventListener("click", function(){
	modal_wrapper.classList.add("active");
})

shadow.addEventListener("click", function(){
	modal_wrapper.classList.remove("active");
})

    
</script>
   <!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->
</body>
</html>