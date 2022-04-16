<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/hotel.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="assets/sheets/style.css" />
    <?php
        print($header);
    ?>
    <title><?php echo $title; ?></title>
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <!-- start typing you code here -->
    <main>
        <?php
        print($content);
        ?>
    </main>
    <?php
    include 'includes/footer.php';
    ?>
    <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Please choose a date</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/booking.php">
                        <div class="date-container">
                            <div>
                                <div class="form__group field">
                                    <input type="input" class="form__field" placeholder="From" id='from_date'
                                        disabled />
                                    <input type="hidden" name="from_date" id="from_date_hidden" />
                                    <label for="From" class="form__label">Arrive Date:</label>
                                </div>
                                <div type="text" id="from"></div>
                            </div>
                            <div class="vl"></div>
                            <div>
                                <div class="form__group field">
                                    <input type="input" class="form__field" placeholder="To" id='to_date' disabled />
                                    <input type="hidden" name="to_date" id="to_date_hidden" />
                                    <label for="To" class="form__label">Depart Date:</label>
                                </div>
                                <div type="text" id="to"></div>
                            </div>
                        </div>
                        <div class="text-center m-3">
                            <button type="submit" class="btn btn-outline-info">Check Availability</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <?php
        print($footer);
        ?>
</body>

</html>