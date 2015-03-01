<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

require_once __DIR__ . '/../../../../src/Scmoeller/Finance/Money.php';

use PHPUnit_Framework_TestCase;

/**
 * Description of MoneyTest
 *
 * @author stefan
 */
class MoneyTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    public function testConstruct()
    {
        $money = new Money(13.25, 'EUR');
        
        $this->assertEquals(13.25, $money->getAmount());
        
        $this->assertEquals('EUR', $money->getCurrency());
    }
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testConstructAmountNotFloat()
    {
        $money = new Money('13.25', 'EUR');
    }
    
    /**
     * @expectedException \DomainException
     */
    public function testConstructAmountLt1()
    {
        $money = new Money(-13.20, 'EUR');
    }
    
    /**
     * @expectedException \DomainException
     */
    public function testConstructCurrencyLenLt3()
    {
        $money = new Money(13.20, 'EU');
    }
}
