<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

/**
 * Description of CalculateTrend
 *
 * @author stefan
 */
class CalculateTrend 
{
    private $prices;
    
    public function __construct(array $prices) 
    {
        $this->prices = $prices;
    }
    
    public function execute() 
    {
        
    }
}
