<?php
include '../Venture-Hotel-Spa-main/Classes/Template.php';
$template = new Template();
$template->initialize_page(
    "Venture Hotel & Spa",
    "<link rel=\"stylesheet\" href=\"assets/sheets/index.css\" />
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
    <p>This hotel has many special massage<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
  <div class="column">
    <img src="assets/Images/restaurant.jpg" alt="Forest" style="width:100%">
	  <h2 style="padding-top: 10px;"><b>Restaurant</b></h2>
    <p>This hotel has many special massage<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
  <div class="column">
    <img src="assets/Images/valentine.jpg" alt="Mountains" style="width:100%">
	  <h2 style="padding-top: 10px;"><b>Valentine's Packages</b></h2>
    <p>This hotel has many special massage<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
</div>

<div class="row">
  <div class="column">
    <img src="assets/Images/drinks.jpg" alt="massage" style="width:100%">
	<h2 style="padding-top: 10px;"><b>Alcoholic Drinks</b></h2>
    <p>This hotel has many special massage<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
  <div class="column">
    <img src="assets/Images/boards.jpg" alt="Forest" style="width:100%">
	  <h2 style="padding-top: 10px;"><b>charcuterie boards</b></h2>
    <p>This hotel has many special massage<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
  <div class="column">
    <img src="assets/Images/bike.jpg" alt="Mountains" style="width:100%">
	  <h2 style="padding-top: 10px;"><b>Bike Tour</b></h2>
    <p>This hotel has many special massage<br>packages</p>
    <button id="button-service">MORE</button>
  </div>
</div>
	

	</main>

	
	
	
    

<?php
$template->finish_template();
?>