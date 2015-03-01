<?php

use Scmoeller\Finance\CalculateTrend;

$prices = [
    'date' => new DateTime('2014-01-02')
];

$calcTrend = new CalculateTrend($prices);

$trend = $calcTrend->execute();
