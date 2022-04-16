<?php
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
    <video autoplay muted loop id="myVideo">
        <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
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
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="image_container">
                    <img src="https://via.placeholder.com/350x150" class="d-block " alt="1">
                    <img src="https://via.placeholder.com/350x150" class="d-block " alt="2">
                    <img src="https://via.placeholder.com/350x150" class="d-block " alt="3">
                </div>
            </div>
            <div class="carousel-item ">
                <div class="image_container">
                    <img src="https://via.placeholder.com/350x150" class="d-block " alt="12">
                    <img src="https://via.placeholder.com/350x150" class="d-block " alt="22">
                    <img src="https://via.placeholder.com/350x150" class="d-block " alt="33">
                </div>
            </div>
            <div class="carousel-item ">
                <div class="image_container">
                    <img src="https://via.placeholder.com/350x150" class="d-block " alt="13">
                    <img src="https://via.placeholder.com/350x150" class="d-block " alt="24">
                    <img src="https://via.placeholder.com/350x150" class="d-block " alt="35">
                </div>
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
            <div class="text-container bg-dark text-white shadow-sm mx-auto p-md-5">
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

<div class="modal" tabindex="-1" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Please choose a date</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/action_page.php">
                    <div class="date-container">
                        <div>
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="From"  id='from_date'
                                    disabled />
                                <input type="hidden" name="from_date" id="from_date_hidden" />
                                <label for="From" class="form__label">Arrive Date:</label>
                            </div>
                            <div type="text" id="from"></div>
                        </div>
                        <div>
                            <div class="form__group field">
                                <input type="input" class="form__field" placeholder="To" id='to_date'
                                    disabled />
                                <input type="hidden" name="to_date" id="to_date_hidden" />
                                <label for="To" class="form__label">Depart Date:</label>
                            </div>
                            <div type="text" id="to" ></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-info">Check Availability</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php
$template->finish_template();
?>