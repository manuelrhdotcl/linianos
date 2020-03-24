<?php
require_once "vendor/autoload.php";

use Linianos\Iterator;
use Linianos\Linio;
use Linianos\Response;

$sequencer = new Iterator(1, 100, 1);
$linio     = new Linio($sequencer);
$linio->process();
$dataArray  = $linio->toArray();

$response  = new Response($dataArray);
echo $response->toChallenge();
