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
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="main.css">
  <script>
            $(document).ready(function(){
                                // Get titles from the DOM
                var titleMain  = $("#animatedHeading");
                var titleSubs  = titleMain.find("slick-active");

                $("#animatedHeading").slick({
                    autoplay: false,
                    arrows: false,
                    dots: false,
                    slidesToShow: 3,
                    centerPadding: "10px",
                    draggable: false,
                    infinite: true,
                    pauseOnHover: false,
                    swipe: false,
                    touchMove: false,
                    vertical: true,
                    speed: 1000,
                    autoplaySpeed: 5000,
                    useTransform: true,
                    slidesToScroll: -1,
                    cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
                    adaptiveHeight: true,
                  });

                  // On init
                  $(".slick-dupe").each(function(index, el) {
                    $("#animatedHeading").slick('slickAdd', "<div>" + el.innerHTML + "</div>");
                  });

                  // Manually refresh positioning of slick
                  $("#animatedHeading").slick('slickPlay');

            });    
            </script> 
  </head>
  
  <body> 
    <div class = "container-fluid"> 
       <div class = "row"> 
         <div class = "col-xs-12"> 
            <div class = "header-logo">  
            <!--BEGINNING OF CAROUSEL--> 
            <div class="hero__title" id="animatedHeading">
              <div class="slick-dupe">
                 <span class="hero__title-misc  |  animate">  
                    <img class = "img-fluid img-rounded" src="images/thumbnail_image.jpg" alt="Image Load Error" style="height: 132px; width: 100%;">
                 </span>
              </div>
              <div class="slick-dupe">
                 <span class="hero__title-misc  |  animate">  
                    <img class = "img-fluid img-rounded" src="images/thumbnail_image2.jpg" alt="Image Load Error" style="height: 132px; width: 100%;">
                 </span>
              </div>
              <div class="slick-dupe">
                 <span class="hero__title-misc  |  animate">  
                    <img class = "img-fluid img-rounded" src="images/thumbnail_image3.jpg" alt="Image Load Error" style="height: 132px; width: 100%;">
                 </span>
              </div>
            </div>
            <!--END OF CAROUSEL -->
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
    