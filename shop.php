<!DOCTYPE HTML>
<html>

<head>
  <title> DJ Flaucy | Official Page </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"> </script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <script> 
   $(document).ready(function(){
     $(".music-item").mouseenter(function(){
       $(".play-button").fadeIn(); 
     });  
   }); 
  </script> 

  </head>
  
  <body data-spy="scroll" data-target=".navbar" data-offset="0"> 
    <div class = "container-fluid"> 
       <div class = "row"> 
         <div class = "col-xs-12"> 
            <div class = "header-logo">  
            <div id="myCarousel" class="carousel slide vertical" data-ride="carousel" data-interval="10000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                      <img class = "img-fluid" src="images/thumbnail_image.jpg" alt="Image Load Error" style="height: 132px; width: 100%;">
                    </div>
                    <div class="item">
                      <img class = "img-fluid" src="images/thumbnail_image2.jpg" alt="Image Load Error" style="height: 132px; width: 100%;">
                    </div>
                    <div class="item">
                      <img class = "img-fluid" src="images/thumbnail_image3.jpg" alt="Image Load Error" style="height: 132px; width: 100%;">
                    </div>
                </div>
            </div>  

            </div> 
         </div> 
       </div> 
       <div class = "navigation-bar">
       <nav class = "navbar navbar-inverse"> 
        <ul class = "nav navbar-nav">
          <li class = "nav-item"><a class = "nav-links" href="home.php">Home</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="about.php">About</a></li>
          <li class = "nav-item"><a class = "nav-links" href="index.php">News</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="music.php">Music</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="video.php">Videos</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="photo.php">Photos</a></li> 
          <li class = "nav-item"><a class = "nav-links" href="games.php">Games</a></li>     
          <li class = "nav-item"><a class = "nav-links" href="games.php">Shop</a></li>   
         </ul> 
       </nav> 
      </div>
   </div> 
  </body> 
</html> 