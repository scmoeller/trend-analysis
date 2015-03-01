<?php

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
    
    /**
     * Erzeugt einen Geldbetrag.
     * 
     * @param float $amount Betrag
     * @param string $currency Währung
     * @throws \InvalidArgumentException
     * @throws \DomainException
     */
    public function __construct($amount, $currency) 
    {
        $this->setAmount($amount);
        
        $this->setCurrency($currency);
    }
    
    /**
     * Gibt den Betrag.
     * 
     * @return float Betrag
     */
    public function getAmount() 
    {
        return $this->amount;
    }

    /**
     * Setzt den Betrag.
     * 
     * @param float $amount Betrag
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
    
    /**
     * Gibt die Währung.
     * 
     * @return string Währung
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Setzt die Währung.
     * 
     * @param string $currency Währung
     * @throws DomainException
     */
    protected function setCurrency($currency)
    {
        if (strlen($currency) >= 3) {
             $this->currency = $currency;
        } else {
            throw new DomainException;
        }
    }
}
