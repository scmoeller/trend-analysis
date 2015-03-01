<?php

require_once 'Money.php';

use Scmoeller\Finance\Money;

$linkedList = new SplDoublyLinkedList();

$price1 = [
    '2014-01-02' => [
        'open'      => new Money(15.45, 'EUR'),
        'high'      => new Money(15.48, 'EUR'),
        'low'       => new Money(15.15, 'EUR'),
        'close'     => new Money(15.17, 'EUR'),
        'volume'    => 2951700
    ]
];

$linkedList->push($price1);

$price2 = [
    '2014-01-03' => [
        'open'      => new Money(15.18, 'EUR'),
        'high'      => new Money(15.44, 'EUR'),
        'low'       => new Money(15.09, 'EUR'),
        'close'     => new Money(15.41, 'EUR'),
        'volume'    => 2245000
    ]
];

$linkedList->push($price2);

$price3 = [
    '2014-01-06' => [
        'open'      => new Money(15.21, 'EUR'),
        'high'      => new Money(15.40, 'EUR'),
        'low'       => new Money(15.05, 'EUR'),
        'close'     => new Money(15.26, 'EUR'),
        'volume'   => 2748500
    ]
];

$linkedList->push($price3);

$linkedList->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

for ($linkedList->rewind(); $linkedList->valid(); $linkedList->next()) {
    $currentPrice = $linkedList->current();
    
    print_r($currentPrice);
}

