<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Scmoeller\Finance;

/**
 * Description of ImportPrices
 *
 * @author stefan
 */
class ImportPrices 
{
    private $directory;
    
    private $fileName;
    
    public function __construct($directory, $fileName) 
    {
        $this->directory = $directory;
        
        $this->fileName = $fileName;
    }
    
    public function execute() 
    {
        $prices = [];
        
        if (($handle = fopen($this->directory . '/' . $this->fileName, "r")) !== FALSE) {
            $i = 0;
            
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                if ($i == 0) {
                    $i++;
                    
                    continue;
                }
                
                $date = preg_replace('/(\d{2})\.(\d{2})\.(\d{2})/', '20$3-$2-$1', $data[0]);
                
                $open = str_replace(",", ".", $data[1]);
                
                $high = str_replace(",", ".", $data[2]);
                
                $low = str_replace(",", ".", $data[3]);
                
                $close = str_replace(",", ".", $data[4]);
                
                $prices[$date] = [
                    'open'      => new Money(floatval($open), 'EUR'),
                    'high'      => new Money(floatval($high), 'EUR'),
                    'low'       => new Money(floatval($low), 'EUR'),
                    'close'     => new Money(floatval($close), 'EUR'),
                    'volume'    => (int) $data[5]
                ];                
            }
            
            return $prices;
        }
    }
}
