<?php

$id = $_REQUEST['image_id'];

deleteImage($id);

header('Location: /');