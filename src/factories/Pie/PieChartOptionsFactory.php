<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:36
 */

namespace VicHaunter\ChartJS\Factories;

class PieChartOptionsFactory extends ChartCommonOptionsFactory implements \JsonSerializable {
    
    
    
    public function jsonSerialize() {
        $options = [];
        if($this->beginAtZero) $options['scale']['ticks']['beginAtZero'] = $this->beginAtZero;
        if($this->beginAtZeroMax) $options['scale']['ticks']['max'] = $this->beginAtZeroMax;
        
        return $options;
    }
    
    public function setBegintAtZero($bool = true, $max = null){
        $this->beginAtZero = $bool;
        if($max) $this->beginAtZeroMax = (int) $max;
    }
    
}