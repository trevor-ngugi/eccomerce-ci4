<!DOCTYPE html>
<html>
    <head>
        <title>home page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width ,inital-scale=1">
    </head>
    <body>
        <h1>users home page<h1>
        <?php
        $session=session();
        $user_details=$session->get('user_details');
       // echo "<pre>";print_r($user_details);die;
       $firstname=$user_details[0];
       $lastname=$user_details[1];
       $fullname=$firstname." ".$lastname;
       echo "welcome $fullname";
        
        ?>
    </body>
</html>