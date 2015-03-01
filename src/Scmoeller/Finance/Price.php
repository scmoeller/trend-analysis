<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

use DateTime;

/**
 * Description of Price
 *
 * @author stefan
 */
class Price
{
    /**
     * @var DateTime 
     */
    private $date;
    
    /**
     * @var Money 
     */
    private $amount;
   
    public function __construct(DateTime $date, Money $amount)
    {
        $this->setDate($date);
        
        $this->setAmount($amount);
    }
    
    public function getDate()
    {
        return $this->date;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    protected function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    protected function setAmount(Money $amount)
    {
        $this->amount = $amount;
    }
}
