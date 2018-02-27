<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24/02/2018
 * Time: 11:43
 */
namespace VicHaunter\ChartJS\Factories;

class BubbleChartFactory extends ChartFactory {
    
    public function __construct($scheme = null, $chartID = null) { //scheme should be only set on start to mantain data integrity
        if($scheme){
            $this->scheme = $scheme;
        }
        $this->setUniqueID($chartID);
        
        $this->data = new BubbleChartDataFactory();
    }
    
    public function getData(){
        /** @var $this->data BubbleChartDataFactory */
        return $this->data;
    }
    
    public function getOptions(){
        if(!$this->options){
            $this->options = new BubbleChartOptionsFactory();
        }
        return $this->options;
    }
}