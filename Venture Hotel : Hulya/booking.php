<?php
/*file specific includes*/
require_once '../Venture-Hotel-Spa-main/Classes/Attractions.php';
$attractions = new Attraction();
$attractions->fetch_all_attractions();
/*general template*/
include '../Venture-Hotel-Spa-main/Classes/Template.php';
$template = new Template();
$template->initialize_page(
    "Venture Hotel & Spa",
    "<link rel=\"stylesheet\" href=\"assets/sheets/index.css\" />
	<link rel=\"stylesheet\" href=\"assets/sheets/bookingstyle.css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\" />",
    "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\" ></script>
    <script src=\"assets/js/index.js\"></script>
	<script src=\"assets/js/slide.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
    "
);
$template->start_template();
?>




<main>
		 <div class="container-l1">
        <div class="item-l1">
            <p>Stay Dates (10 Nights)</p><br>
            <p style="font-size: medium;">Sun, Apr 3, 2022 - Wed, Apr 13, 2022</p>
        </div>
        <div class="item-l1">
            <p>Rooms & Guests</p><br>
            <button style="float: right; padding: 6px 40px; ">EDIT</button>
            <p style="font-size: medium;">1Room: 2 Adult/Room</p>
        </div>
    </div>
		<div class="slide">
	    <div class="left">
			<div class="container">
	
			  <div class="mySlides">
			  <div class="numbertext">1 / 6</div>
			  <img src="../Venture-Hotel-Spa-main/assets/Images/1.png" style="width:75%">
			  </div>

			  <div class="mySlides">
				<div class="numbertext">2 / 6</div>
				<img src="../Venture-Hotel-Spa-main/assets/Images/2big.png" style="width:75%">
			  </div>

			  <div class="mySlides">
				<div class="numbertext">3 / 6</div>
				<img src="../Venture-Hotel-Spa-main/assets/Images/3big.png" style="width:75%">
			  </div>

			  <a class="prev" onclick="plusSlides(-1)">❮</a>
			  <a class="next" onclick="plusSlides(1)">❯</a>

			  <div class="caption-container">
				<p id="caption"></p>
			  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="../Venture-Hotel-Spa-main/assets/Images/1sml.png" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="../Venture-Hotel-Spa-main/assets/Images/2.png" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="../Venture-Hotel-Spa-main/assets/Images/3.png" style="width:100%" onclick="currentSlide(3)">
    </div>
	  
</div>
</div>

</div>
	
<div class="right"><br>
<h2> City View </h2>
<h3>2 Queen Beds, City View, Guest Room</h3>
<br><p>Check in: Wednesday, April 6, 2022<br>
Check out: Thursday, April 7, 2022<br>
Room(s): 1<br>
Guest(s) per room: 2</p>
<p style="color: red"> EDIT </p>
	
</div>	
</div>
		
	</main>
<div class="separator">  DETAILS:  </div>
<div class="details">
	<div class="textrow">
  <div class="textcolumn">
    <h2>Room Highlights</h2>
    <p>Guaranteed<br>
	   During your stay date<br>
	   2 Queen Beds</p>
	  <br>
	  <h2>Room Features</h2>
     <p>Guaranteed<br>
	   360sqft/32sqm
	   Air-conditioned<br>
	   This room is non-smoking<br>
	   Connecting rooms are available (for some rooms)</p>
  </div>
  <div class="textcolumn2" >
    <h2>Hotel Highlights</h2>
    <p>This hotel has a smoke-free policy<br>
	   Hotel was built in 1990<br>
	   Rooms were renovated in 2017</p>
  </div>
</div>
</div>
<button id="button-service">Book Now</button>
	
	


<?php
$template->finish_template();
?>