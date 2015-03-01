<?php

namespace Scmoeller\Finance;

/**
 * Description of TradingDay
 *
 * @author stefan
 */
class TradingDay
{
    /**
     * @var DateTime 
     */
    private $date;
    
    /**
     * @var Price
     */
    private $open;
    
    /**
     * @var Price 
     */
    private $high;
    
    /**
     * @var Price 
     */
    private $low;
    
    /**
     * @var Price 
     */
    private $close;
    
    /**
     * @var integer 
     */
    private $volume;
    
    public function __construct(Price $open, Price $high, Price $low, Price $close, $volume)
    {
        
    }
    
    protected function validate(Price $open, Price $high, Price $low, Price $close) 
    {
        if (
            $high->getAmount() > $open->getAmount() &&
            $high->getAmount() > $low->getAmount() &&
            $high->getAmount() > $close->getAmount()
        ) {
            
        }
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getOpen()
    {
        return $this->open;
    }

    public function getHigh()
    {
        return $this->high;
    }

    public function getLow()
    {
        return $this->low;
    }

    public function getClose()
    {
        return $this->close;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    protected function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    protected function setOpen(Price $open)
    {
        $this->open = $open;
    }

    protected function setHigh(Price $high)
    {
        $this->high = $high;
    }

    protected function setLow(Price $low)
    {
        $this->low = $low;
    }

    protected function setClose(Price $close)
    {
        $this->close = $close;
    }

    protected function setVolume($volume)
    {
        $this->volume = $volume;
    }
}
