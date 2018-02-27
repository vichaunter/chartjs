<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24/02/2018
 * Time: 11:53
 */

namespace VicHaunter\ChartJS\Factories;

class ChartCommonDataFactory {
    
    protected $labels = [];
    protected $datasets = [];
    

    
    public function setLabels(array $labels){
        $this->labels = $labels;
        return $this;
    }
    
    public function addLabel($label){
        $this->labels[] = (string) $label;
        return $this;
    }
    
    public function newDataset(){
        return $this->datasets[] = new ChartCommonDatasetFactory();
    }
}