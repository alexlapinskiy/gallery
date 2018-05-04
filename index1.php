<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php                                                                                //include file with variables
        include_once "variable_file.php";
        /*define('titleconst',"Image Gallery");*/
     ?>
    <title><?php echo titleconst ?></title>

    <!-- Bootstrap -->
    <link href="pub/bootstrap.css" rel="stylesheet">
    <link href="pub/main.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

 <body>
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