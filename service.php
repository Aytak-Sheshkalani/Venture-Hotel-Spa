<?php
include 'Classes/Template.php';
$template = new Template();
$template->initialize_page(
    "Venture Hotel & Spa",
    "
  	<link rel=\"stylesheet\" href=\"assets/sheets/servicestyle.css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\" />",
    "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\" ></script>
    <script src=\"assets/js/index.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
    "
);
$template->start_template();
?>




 <main>
	    <div class="header">
		<img src="assets/Images/Services1.jpg" style="width: 100%;" alt="Service">
			 <div class="centered"><h1 style="font-size: 50px;"><b>Services</b></h1></div>
</div>
		</div>
<div class="row">
  <div class="column">
    <img src="assets/Images/massage.jpg" alt="massage" style="width:100%">
	<h2 style="padding-top: 10px;"><b>Massage Therapy</b></h2>
    <p>The Spa at Venture Hotel Toronto offers 16 spacious treatment rooms, two steam rooms and a luxury salon with hair, manicure and pedicure stations.<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
  <div class="column">
    <img src="assets/Images/restaurant.jpg" alt="Forest" style="width:100%">
	  <h2 style="padding-top: 10px;"><b>Restaurant</b></h2>
    <p>There's something about the atmosphere of a hotel bar or restaurant that is distinctly different from standalone dining options. <br>packages</p>
    <button id="button-service">MORE</button>
  </div>
  <div class="column">
    <img src="assets/Images/valentine.jpg" alt="Mountains" style="width:100%">
	  <h2 style="padding-top: 10px;"><b>Valentine's Packages</b></h2>
    <p> These the best places for Valentine's Day Getaways in Ontario. ... There are many hotels catering to romantic packages for couples.<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
</div>

<div class="row">
  <div class="column">
    <img src="assets/Images/drinks.jpg" alt="massage" style="width:100%">
	<h2 style="padding-top: 10px;"><b>Alcoholic Drinks</b></h2>
    <p> Well, actually there is: plopping into bed with a delicious, handcrafted cocktail. You don't feel like sitting in the hotel bar<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
  <div class="column">
    <img src="assets/Images/boards.jpg" alt="Forest" style="width:100%">
	  <h2 style="padding-top: 10px;"><b>charcuterie boards</b></h2>
    <p>cheese charcuterie board stay enhancement kennebunkport resort collection hotel ·<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
  <div class="column">
    <img src="assets/Images/bike.jpg" alt="Mountains" style="width:100%">
	  <h2 style="padding-top: 10px;"><b>Bike Tour</b></h2>
    <p>Adventure in a way that works for you. With 80+ guided bicycle tours across North America,<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
</div>
	

	</main>

	
	
	
    

<?php
$template->finish_template();
?>