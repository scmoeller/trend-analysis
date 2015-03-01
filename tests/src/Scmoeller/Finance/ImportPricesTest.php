<?php

namespace Scmoeller\Finance;

use PHPUnit_Framework_TestCase;

require_once __DIR__ . '/../../../../src/Scmoeller/Finance/ImportPrices.php';
require_once __DIR__ . '/../../../../src/Scmoeller/Finance/Money.php';

/**
 * Description of ImportPricesTest
 *
 * @author stefan
 */
class ImportPricesTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }
    
    public function testExecute()
    {
        $expectedPrices = [
            '2014-01-02' => [
                'open'      => new Money(15.45, 'EUR'),
                'high'      => new Money(15.48, 'EUR'),
                'low'       => new Money(15.15, 'EUR'),
                'close'     => new Money(15.17, 'EUR'),
                'volume'    => 2951700
            ],
            '2014-01-03' => [
                'open'      => new Money(15.18, 'EUR'),
                'high'      => new Money(15.44, 'EUR'),
                'low'       => new Money(15.09, 'EUR'),
                'close'     => new Money(15.41, 'EUR'),
                'volume'    => 2245000
            ],
            '2014-01-06' => [
                'open'      => new Money(15.21, 'EUR'),
                'high'      => new Money(15.40, 'EUR'),
                'low'       => new Money(15.05, 'EUR'),
                'close'     => new Money(15.26, 'EUR'),
                'volume'   => 2748500
            ],
            '2014-01-07' => [
                'open'      => new Money(15.24, 'EUR'),
                'high'      => new Money(15.64, 'EUR'),
                'low'       => new Money(15.18, 'EUR'),
                'close'     => new Money(15.60, 'EUR'),
                'volume'    => 2787000
            ]
        ];

        $import = new ImportPrices(__DIR__ . '/../../../fixture', 'prices.csv');
        
        $actualPrices = $import->execute();
        
        $this->assertEquals($expectedPrices, $actualPrices);
    }
    
    
}
