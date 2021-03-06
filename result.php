<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="Images/hotel.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="login-style.css" />
    <title>Venture Hotel & Spa</title>
</head>

<body>

    <header>
        <div class="logo-container">
            <a href="./index.html">
                <img src="logo1.png" alt="Hotel" class="logo-img" />
            </a>
        </div>

        <div class="menu-container">
            <ul>
                <a href="./Contact.html">
                    <li class="active">Contact</li>
                </a>
                <a href="./Services.html">
                    <li>Services</li>
                </a>
                <a href="./Booking.html">
                    <li>Booking</li>
                </a>
            </ul>
        </div>
    </header>
    
    <main>

        <div class="container-feedback">
            <img src="Images/check.png" alt="check.png" id="submit-image">
            <h2 style="text-align: center; padding-top: 30px;">Thank you for submitting your feedback.</h1>
            <h4 style="text-align: center;">We really appreciate your feedback.</h3>
</br>
        </div>

        </br>
        <div class="login">

            <form action="login-f.php" method="post">

                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <label><b>Username</b></label>
                    <input type="text" name="uname" id="uname" placeholder="Username">
                    <br><br>
                    <label><b>Password</b></label>
                    <input type="Password" name="password" id="password" placeholder="Password">
                    <br><br>
                    <button type="submit">Login</button>

            </form>
        </div>

        <h2>If you are admin you can login to see feedbacks</h2><br>
   
    </main>

    <div class="footer ">


        <footer>
            <div class="container ">
                <div class="row ">
                    <div class="col-sm-6 col-md-3 item ">
                        <h3>Contact Information</h3>
                        <ul>
                            <li>
                                <a href=#>Address: 105 King St E,</a>
                            </li>
                            <li>
                                <a href=#>Kitchener, ON N2G 2K8</a>
                            </li>
                            <li><a href=#>Reservation: (234) 378-7110</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item ">
                        <ul>
                            <li><a href="Booking.html ">Booking</a></li>
                            <li><a href="Services.html ">Services</a></li>
                            <li><a href="Contact.html ">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item ">
                    </div>
                    <div class="col-sm-6 col-md-3 item ">
                        <h3>Help</h3>
                        <ul>
                            <li>
                                <a href="# "></a>
                            </li>
                            <li>
                                <a href="# "><img style="width: 20px; " src="Images/question-mark.png "></a>
                            </li>
                            <li>
                                <a href="# "></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col item social " style="padding: 10px; "><a href="# "><i class="icon ion-social-facebook "></i></a><a href="# "><i class="icon ion-social-twitter "></i></a><a href="# "><i class="icon ion-social-instagram "></i></a></div>
                </div>
                <p class="copyright ">AHA Moments Corporate?? 2022</p>
            </div>
        </footer>
    </div>

    <script type="module " src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js "></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
</body>

</html>