<?php

use Scmoeller\Finance\ImportPrices;

require_once './src/Scmoeller/Finance/ImportPrices.php';

$dir = __DIR__;

$fileName = 'Kurse_LHA.csv';

$impPrices = new ImportPrices($dir, $fileName);

$prices = $impPrices->execute();

//print_r($prices);

