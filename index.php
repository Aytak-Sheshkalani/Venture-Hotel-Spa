<?php
/*file specific includes*/
require_once 'Classes/Attractions.php';
$attractions = new Attraction();
$attractions->fetch_all_attractions();
/*general template*/
include 'Classes/Template.php';
$template = new Template();
$template->initialize_page(
    "Venture Hotel & Spa",
    "<link rel=\"stylesheet\" href=\"assets/sheets/index.css\" />
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




<div class="section1">
    <video autoplay muted loop>
        <source src="assets/videos/index-demo.mp4"
            type="video/mp4">
    </video>
    <div class="reservation">
        <div class="description">
            Experience luxury at our iconic Venture Hotel beachfront property. Book now at our official site.
        </div>
        <div class="reserveBtnContainer">
            <button type="button" class="btn btn-primary reserveBtn" onclick="showModal()">Book Now</button>
        </div>
    </div>
    <div class="menuContainer">
        <ul>
            <li>
                <a href="#">Gallery</a>
            </li>
            <li>
                <a href="#">Gift Cards</a>
            </li>
            <li>
                <a href="#">About Us</a>
            </li>
        </ul>
    </div>
</div>
<div class="section2">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
            for($j=0; $j<ceil($attractions->get_attraction_count()/3);$j++){
            ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $j; ?>" class="active"
                aria-current="true" aria-label="Slide <?php echo ($j+1); ?>"></button>
            <?php } ?>
        </div>
        <div class="carousel-inner">
                <?php 
                $activeItemClass ='active';
                for($i = 0; $i < $attractions->get_attraction_count(); $i+=3){ 
                        echo '<div class="carousel-item '.$activeItemClass.'">
                                <div class="image_container">'; 
                        for($j=0; $j<3;$j++){
                            $attraction = @$attractions->attractions[$i+$j];    
                            if($attraction)
                                echo '<img src="'.$attraction['attraction_image'].'" class="d-block gallery-item galleryImg" alt="'.$attraction['attraction_name'].'">';
                        }
                        echo '</div></div>';   
                        $activeItemClass = ''; 
                    }
                ?>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="section3 d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 ">
    <div class="image-container col-md-5 text-center text-white overflow-hidden">
        <img src="assets/images/ceo.jpg" class="ceo_image" />
    </div>
    <div class="text-wrapper me-md-3 pt-3 px-3 pt-md-5 px-md-5 col-md-7 text-center overflow-hidden">
        <div>
            <div class="my-3 p-3">
                <h2 class="display-5">Our Story</h2>
            </div>
            <div class="text-container bg-dark text-white shadow-sm mx-auto p-5">
                <p>
                    With individual brands and many hotels internationally, Venture Hotel Group is
                    one of the largest, most dynamic hotel groups in the world. We take pride in our company's strong
                    heritage of design and innovation and have earned a reputation for award-winning hotel experiences
                    and
                    exceptional service. Most importantly, our guests, owners, and business partners know they can
                    expect
                    genuine hospitality and honest partnership from us.

                    Our portfolio includes Venture hotels,and Spas. Each of our hotels is a unique blend of design and
                    style.
                    our distinctive hotel brands embodies our modern vision of hospitality in its own way. We focus on
                    delivering individualized guest service, offering stylish designs that reflect each unique location
                    authentically, and creating vibrant social scenes in our hotels' welcoming public spaces.

                    At Venture Hotel Group, we're leading the charge to create positive innovations in a changing
                    travel industry. We're committed to doing business responsibly, in part through employment programs,
                    career development opportunities, and transparent sustainability efforts. Our highest priority is
                    the
                    health, safety, and security of our guests, employees, and business partners worldwide. To learn
                    more,
                    read about our latest protocols designed to address the coronavirus (COVID-19).
                </p>
            </div>
        </div>
    </div>
</div>


<div id="imageModal" class="imageModal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>



<?php
$template->finish_template();
?>