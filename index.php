<?php

require_once('src/app.php');
$app = new Application();
$app->run();

//switch ($errors->isAllowedPage($_GET['page']??'')) {
//    case 'form':
//        require('view/form.php');
//        break;
//    case 'submit':
//        require('src/help_files/process.php');
//        break;
//    case 'login':
//        require('view/login.php');
//        break;
//        case 'logout':
//        require('src/help_files/logout.php');
//        break;
//    case 'processLogin':
//        require('src/help_files/processLogin.php');
//        break;
//    case 'register':
//        require('view/register.php');
//        break;
//    case 'processRegister':
//        require('src/help_files/processRegister.php');
//        break;
//    case 'removeImage':
//        require('src/help_files/removeImage.php');
//        break;
//    default:
//        require('view/index.php');
//}

