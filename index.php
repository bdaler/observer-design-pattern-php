<?php
require 'vendor/autoload.php';

use App\Login;
use App\Handlers\Logger;
use App\Handlers\Mailer;


$login = new Login();

$login->attach([new Logger(),new Mailer()]);
$login->register();


