<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <?php                                                                                       //Add constant for title
        define('titleconst',"Image Gallery");
     ?>
    <title><?php echo titleconst ?></title>


    <!-- Bootstrap -->
    <link href="pub/bootstrap.css" rel="stylesheet">
    <link href="pub/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


 <body>
    <?php                                                                           // Add link`s to image as variables
        $first_img="http://farm6.staticflickr.com/5614/15602332537_bae1aaccd8_m.jpg";
        $second_img="http://farm8.staticflickr.com/7496/15959236842_6dbcb5b4c8_m.jpg";
        $third_img="http://farm8.staticflickr.com/7404/12868632153_b0a5718c22_m.jpg";
        $fourth_img="http://farm4.staticflickr.com/3864/14420515212_9999c800b4_m.jpg";
        $fifth_img="http://farm8.staticflickr.com/7489/15241066224_8864806ffd_m.jpg";
        $sixth_img="http://farm8.staticflickr.com/7412/8732133694_0c7e400022_m.jpg";
        $seventh_img="http://farm4.staticflickr.com/3745/8971419780_cb88b22947_m.jpg";
        $eighth_img="http://farm9.staticflickr.com/8366/8483546751_86494ae914_m.jpg";
        $ninth_img="http://farm9.staticflickr.com/8481/8215602321_69d9939b8b_m.jpg";
    ?>


 <div id="allimg">                                              <!-- Rewrite this part of code for link`s-variables -->
     <div id="img123">
         <img  src="<?php echo $first_img?>">
         <img id="img2" src="<?php echo $second_img?>">
         <img  src="<?php echo $third_img?>">
     </div>

     <div id="img456">
         <img  src="<?php echo $fourth_img?>">
         <img id="img5" src="<?php echo $fifth_img?>">
         <img  src="<?php echo $sixth_img ?>">
     </div>

     <div id="img789">
         <img  src="<?php echo $seventh_img ?>">
         <img id="img8" src="<?php echo $eighth_img?>">
         <img  src="<?php echo $ninth_img?>">
     </div>
 </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
</body>


</html>