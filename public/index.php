<?php

require_once dirname(__DIR__).'/vendor/autoload.php';
use App\kernel;
use Kint;


$kernel = new Kernel();
kint::dump($kernel);