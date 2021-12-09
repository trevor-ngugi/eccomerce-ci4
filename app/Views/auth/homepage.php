<!DOCTYPE html>
<html>

<head>
    <title>home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width ,inital-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="<?php echo base_url('css/styles.css') ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url('js/jquery.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/22de2a47bc.js"></script>
</head>

<body>
    <h1>users home page</h1>
    <?php
    $session = session();
    $user_details = $session->get('user_details');
    // echo "<pre>";print_r($user_details);die;
    $firstname = $user_details[0];
    $lastname = $user_details[1];
    $fullname = $firstname . " " . $lastname;
    // echo "welcome $fullname";

    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Witty outfitters</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">children</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">pets</a>
                </li>
            </ul>
        </div>
    </nav>
<!-- suppose to show the categories -->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <img src="<?php echo base_url('images/pic1.jpeg'); ?>" alt="image from splash">
            </div>
            <div class="col-sm">
                <img src="<?php echo base_url('images/pic1.jpeg'); ?>" alt="image from splash">
            </div>
            <div class="col-sm">
                <img src="<?php echo base_url('images/pic1.jpeg'); ?>" alt="image from splash">
            </div>
        </div>
    </div>
    <br>
<!-- card description -->
    <p <span style="text-decoration:  underline; text-align: left;"></span>show all</p>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card" >
                    <img src="<?php echo base_url('images/pic1.jpeg'); ?>" alt="image from splash">
                    <div class="card-body">
                        <p class="card-text">description</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="<?php echo base_url('images/pic1.jpeg'); ?>" alt="image from splash">
                    <div class="card-body">
                        <p class="card-text">description</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <img src="<?php echo base_url('images/pic1.jpeg'); ?>" alt="image from splash">
                    <div class="card-body">
                        <p class="card-text">description.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" >
                    <img src="<?php echo base_url('images/pic1.jpeg'); ?>" alt="image from splash">
                    <div class="card-body">
                        <p class="card-text">description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- toggle button -->
    <br>
    <button id="images_toggle_btn" class="btn btn-primary">toggle image show</button>
    <br>
    <div id="images_div">
        <img src="<?php echo base_url('images/pic1.jpeg'); ?>" alt="image from splash">
        <br>
        <img src="<?php echo base_url('images/pic2.jpeg'); ?>" alt="boy">
    </div>
    <!-- footer -->
    <i class="fa fa-instagram" aria-hidden="true"></i>
    <i class="fa fa-facebook-official" aria-hidden="true"></i>
    <i class="fa fa-pinterest" aria-hidden="true"></i>
    <i class="fa fa-youtube-play" aria-hidden="true"></i>
    <i class="fa fa-spotify" aria-hidden="true"></i>
    <!-- scripts -->
    <script type="text/javascript" src="<?php echo base_url('js/main.js') ?>"></script>

</body>

</html>