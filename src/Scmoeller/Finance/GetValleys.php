<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

/**
 * Description of GetValleys
 *
 * @author stefan
 */
class GetValleys
{
    /**
     * @var array Preise
     */
    private $prices;
    
    /**
     *
     * @var string 
     */
    private $priceType;
    
    public function __construct(array $prices, $priceType)
    {
        $this->prices = $prices;
        
        $this->priceType = $priceType;
    }
    
    public function execute()
    {
        $i = 0;
        
        foreach ($this->prices as $date => $prices) {
            if ($i == 0) {
                $i++;
                
                continue;
            }
            
            if ($prices[$this->priceType]) {
                
            }
        }
    }
}
