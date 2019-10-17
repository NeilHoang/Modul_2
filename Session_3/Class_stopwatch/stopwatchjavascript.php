<?php

class StopWatch
{
    private $startTime;
    private $endTime;
    
    function __construct()
    {
        $this->startTime;
        $this->endTime;
    }
    
    public function getStartTime()
    {
        return $this->startTime;
    }
    
    public function getEndTime()
    {
        return $this->endTime;
    }
    
    public function start()
    {
        $this->startTime = date("Y-M-d-h:i:s");
    }
    
    public function end()
    {
        $this->endTime = date("Y-M-d-H:i:s");
    }
    
    public function getElapsedTime()
    {
        $this->startTime = date_parse_from_format('Y-M-d-H:i:s', $this->startTime);
        $time_stamp = mktime($this->endTime['hour'], $this->endTime['minute'], $this->endTime['second'], $this->endTime['month']
            , $this->endTime['day'], $this->endTime['year']);
        echo $time_stamp . "<br>";
        echo $this->endTime;
        return ($this->end() - $time_stamp);
    }
}
$objStopWatch = new StopWatch();
echo $objStopWatch->getElapsedTime();
