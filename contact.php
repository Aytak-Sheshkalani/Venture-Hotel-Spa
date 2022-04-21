<?php
/*general template*/
include 'Classes/Template.php';
$template = new Template();
$template->initialize_page(
    "Venture Hotel & Spa",
    "
    <link rel=\"icon\" href=\"assets/Images/hotel.png\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\" />
    <link rel=\"stylesheet\" href=\"style.css\" />
    "


    
    );
    $template->start_template();
    ?>
    <main>

        <div id="contact-form">

            <h4 style="padding-top: 20px; text-align: center; font-family: Georgia; "><i><u>Contact Us</u></i></h4>

            <form action="contactForm.php" method="post" style="padding: 50px 150px 50px 50px;">

                <div>
                    <label for="name">Full Name <span style="color: red;">*</span></label></br>
                    <input type="text" id="name" name="name" placeholder="Enter your name here"></br>
                    </br>

                    <label for="phone">Phone <span style="color: red;">*</span></label></br>
                    <input type="text" id="phone" name="phone" placeholder="e.g 999-9999-9999"></br>
                    </br>

                    <label for="email">Email <span style="color: red;">*</span></label></br>
                    <input type="text" id="email" name="email" placeholder="someone@example.com"></br>
                    </br>

                    <label for="comments">Comments <span style="color: red;">*</span></label></br>
                    <textarea name="comments" id="comments" placeholder="Enter comments here" rows="10"></textarea>
                    </br>
                    </br>
                    <button id="button-s" type="submit">Submit</button>
                </div>

            </form>



    </main>


    <?php
    $template->finish_template();
    ?>