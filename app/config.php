<?php

/* initialization */
include_once('core/routes.php');
include_once('core/controller.php');
include_once('core/render.php');
include_once('core/model.php');

$route = $_GET['url'] ?? "";
new Routes($route);

?>
