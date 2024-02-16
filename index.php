<?php

use DiDom\Document;

require_once 'vendor/autoload.php';
require_once 'src/RepairLinkShop.php';

$parser = new RepairLinkShop();

//$data = $parser->getVinInfo("1FMYU01B72KC19127");

$data = $parser->html();

xprint($data);