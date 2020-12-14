<?php
require_once("./vendor/autoload.php");

use Geotag\Geotag;

$geotaggedSample = "./assets/images/ilajna1-geotag.jpg";
$geotag = new Geotag($geotaggedSample);

print_r($geotag->read());

?>