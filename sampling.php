<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row1 > .column1 {
  padding: 0 8px;
}

.row1:after {
  content: "";
  display: table;
  clear: both;
}

.column1 {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal1 {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content1 {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close1 {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides1 {
  display: none;
}

.cursor1 {
  cursor: pointer;
}

/* Next & previous buttons */
.prev1,
.next1 {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next1 {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev1:hover,
.next1:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext1 {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container1 {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo1 {
  opacity: 0.6;
}

.active1,
.demo1:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow1:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<body>

<h2 style="text-align:center">Lightbox</h2>

<div class="row1">
  <div class="column1">
    <img src="https://cdn.pixabay.com/photo/2015/04/19/08/32/marguerite-729510__480.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow1 cursor1">
  </div>
  <div class="column1">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqiwa0S35Erm3_C_sNVKv9BstnqakzmdcbEQ&usqp=CAU.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow1 cursor1">
  </div>
  <div class="column1">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiku_sp-Pq_Yb_iKrlowG3yiDWjzhB5MAdDw&usqp=CAU.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow1 cursor1">
  </div>
  <div class="column1">
    <img src="https://cdn.shopify.com/s/files/1/0035/2754/0782/articles/International_Flower_Day_2048x.jpeg?v=1579365491.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow1 cursor1">
  </div>
</div>

<div id="myModal1" class="modal1">
  <span class="close1 cursor1" onclick="closeModal()">&times;</span>
  <div class="modal-content1">

    <div class="mySlides1">
      <div class="numbertext1">1 / 4</div>
      <img src="https://cdn.pixabay.com/photo/2015/04/19/08/32/marguerite-729510__480.jpg" style="width:100%">
    </div>

    <div class="mySlides1">
      <div class="numbertext">2 / 4</div>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqiwa0S35Erm3_C_sNVKv9BstnqakzmdcbEQ&usqp=CAU.jpg" style="width:100%">
    </div>

    <div class="mySlides1">
      <div class="numbertext1">3 / 4</div>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiku_sp-Pq_Yb_iKrlowG3yiDWjzhB5MAdDw&usqp=CAU.jpg" style="width:100%">
    </div>
    
    <div class="mySlides1">
      <div class="numbertext1">4 / 4</div>
      <img src="https://cdn.shopify.com/s/files/1/0035/2754/0782/articles/International_Flower_Day_2048x.jpeg?v=1579365491.jpg" style="width:100%">
    </div>
    
    <a class="prev1" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next1" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container1">
      <p id="caption1"></p>
    </div>


    <div class="column1">
      <img class="demo cursor1" src="https://cdn.pixabay.com/photo/2015/04/19/08/32/marguerite-729510__480.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column1">
      <img class="demo cursor1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqiwa0S35Erm3_C_sNVKv9BstnqakzmdcbEQ&usqp=CAU.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>
    <div class="column1">
      <img class="demo cursor1"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiku_sp-Pq_Yb_iKrlowG3yiDWjzhB5MAdDw&usqp=CAU.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column1">
      <img class="demo cursor1" src="https://cdn.shopify.com/s/files/1/0035/2754/0782/articles/International_Flower_Day_2048x.jpeg?v=1579365491.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal1").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal1").style.display = "none";
}

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
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption1");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
