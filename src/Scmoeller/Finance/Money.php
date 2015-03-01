<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

use DomainException;
use InvalidArgumentException;

/**
 * Description of Money
 *
 * @author stefan
 */
class Money 
{
    /**
     * Betrag
     * 
     * @var float 
     */
    private $amount;
    
    /**
     * Währung
     * 
     * @var string 
     */
    private $currency;
    
    public function __construct($amount, $currency) 
    {

        
        if (strlen($currency) < 3) {
            
        }
    }
    
    public function getAmount() 
    {
        return $this->amount;
    }

    /**
     * 
     * @param float $amount
     * @throws DomainException
     * @throws InvalidArgumentException
     */
    protected function setAmount($amount) 
    {
        if (is_float($amount)) {
            if ($amount > 0) {
                $this->amount = $amount;
            } else {
                throw new DomainException;
            }
        } else {
            throw new InvalidArgumentException;
        }
    }
}
