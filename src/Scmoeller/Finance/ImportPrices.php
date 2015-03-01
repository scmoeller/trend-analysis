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
        if (($handle = fopen($this->directory . '/' . $this->fileName, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                print_r($data);
            }
        }
    }
}
