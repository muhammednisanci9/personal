<!DOCTYPE html>
<html>
<head>
  <title></title>

  <style type="text/css">
.slider-container{
  position: relative;
  margin-top: 60px;
}
.slider-child{
  display: flex;
  flex-direction: row;
}
.slider-text-container{
  width: 60%;
  height: 60vh;
  background: #222;
  color: #fff;
  padding: 50px;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.slider-baslik{
  font-family: CinzelDecorative-Bold;
  font-size: 3em;
  margin-bottom: 20px;
}
.slider-link{
  padding: 10px;
  border: 3px solid rgb(255,255,255,.5);
  display: inline-block;
  color: #fff;
  text-decoration: none;
  width: 10px;
  margin-top: 20px;
}
.slider-img{
  width: 40%;
}
.slider-img img{
  width: 100%;
  position: relative;
  height: 60vh;
  object-fit: cover;
}
.urundetay-slider{
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

  /* slider başlangıç */
.slidercontainer {
  height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
}
#slider-img{
  width: 550px;
  padding: 0 50px;
  max-height: 300px;
}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* ileri & geriious buttons */
.geri, .ileri {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -28px;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  user-select: none;
  color: black;
}

/* Position the "ileri button" to the right */
.ileri {
  right: 0;
}

/* On hover, add a black background color with a little bit see-through */
.geri:hover, .ileri:hover {
  background-color: rgba(0,0,0,0.8);
}


/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 8px;
  width: 8px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: block;
  transition: background-color 0.6s ease;
  margin-bottom: 5px;
}

.active, .dot:hover {
  background-color: #717171;
}
.active {
  height: 16px;
  border-radius: 20px;
}

  </style>

</head>
<body>


          <div class="urundetay-slider">
            <div class="slideshow-container">

              <div class="slidercontainer fade">
                <img src="image/hizmet/h1.jpg" id="slider-img">
              </div>

              <div class="slidercontainer fade">
                <img src="image/hizmet/h2.jpg" id="slider-img">
              </div>

              <div class="slidercontainer fade">
                <img src="image/hizmet/h3.jpg" id="slider-img">
              </div>

              <div class="slidercontainer fade">
                <img src="image/hizmet/h1.jpg" id="slider-img">
              </div>


              <a class="geri" onclick="plusSlides(-1)">&#10094;</a>
              <a class="ileri" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center" class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> 
            </div>
            </div>


            <script type="text/javascript">
              <script type="text/javascript" >
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("slidercontainer");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "flex";  
      dots[slideIndex-1].className += " active";
    }
  </script>
            </script>
</body>
</html>