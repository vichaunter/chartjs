<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:36
 */

namespace VicHaunter\ChartJS\Factories;

class BarChartDataFactory extends ChartCommonDataFactory implements \JsonSerializable {
    

    public function jsonSerialize() {
        return [
            'labels' => $this->labels,
            'datasets' => $this->datasets,
        ];
    }
    
    public function setLabels(array $labels){
        $this->labels = $labels;
        return $this;
    }
    
    public function addLabel($label){
        $this->labels[] = (string) $label;
        return $this;
    }
    
    public function newDataset(){
        return $this->datasets[] = new BarChartDatasetFactory();
    }
    
}