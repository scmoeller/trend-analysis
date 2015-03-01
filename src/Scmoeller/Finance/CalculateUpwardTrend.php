<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

use DomainException;

/**
 * Description of CalculateUpwardTrend
 *
 * @author stefan
 */
class CalculateUpwardTrend
{
    /**
     *
     * @var array
     */
    private $prices;
    
    public function __construct(array $prices)
    {
        if (count($prices) >= 4) {
            $this->prices = $prices;
        } else {
            throw new DomainException;
        }
    }
    
    public function execute()
    {
        
    }
}
