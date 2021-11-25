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
</head>

<body>
    <h1>users home page<h1>
            <?php
            $session = session();
            $user_details = $session->get('user_details');
            // echo "<pre>";print_r($user_details);die;
            $firstname = $user_details[0];
            $lastname = $user_details[1];
            $fullname = $firstname . " " . $lastname;
            echo "welcome $fullname";

            ?>
            <br>
            <button id="images_toggle_btn" class="btn btn-primary">toggle image show</button>
            <br>
            <div id="images_div">
                <img src="<?php echo base_url('images/pic1.jpeg'); ?>" alt="image from splash">
                <br>
                <img src="<?php echo base_url('images/pic2.jpeg'); ?>" alt="boy">
            </div>
            <script type="text/javascript" src="<?php echo base_url('js/main.js') ?>"></script>
</body>

</html>