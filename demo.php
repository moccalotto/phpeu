<?php

use Moccalotto\Eu\CountryInfo;

require 'vendor/autoload.php';

$info = new CountryInfo();

var_dump($info->isEuMember('DK')); // bool(true)

var_dump($info->vatRate('DK'));    // int(25)
