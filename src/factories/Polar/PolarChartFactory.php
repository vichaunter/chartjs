<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24/02/2018
 * Time: 11:43
 */
namespace VicHaunter\ChartJS\Factories;

class PolarChartFactory extends ChartFactory {
    
    public function __construct($scheme = null, $chartID = null) { //scheme should be only set on start to mantain data integrity
        if($scheme){
            $this->scheme = $scheme;
        }
        $this->setUniqueID($chartID);
        
        $this->options = new PolarChartOptionsFactory();
        $this->data = new PolarChartDataFactory();
    }
    
    public function getData(){
        /** @var $this->data PieChartDataFactory */
        return $this->data;
    }
    
    public function getOptions(){
        /** @var $this->options PieChartOptionsFactory  */
        return $this->options;
    }
}