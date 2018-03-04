<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24/02/2018
 * Time: 11:54
 */

namespace VicHaunter\ChartJS\Factories;

class ChartCommonOptionsFactory implements \JsonSerializable {
    
    
    protected $legendLabels;
    protected $legendDisplay;
    
    protected $xAxisBeginAtZero;
    protected $yAxisBeginAtZero;
    
    protected $xAxesRotationMax;
    protected $xAxesRotationMin;
    protected $xAxesRotationAutoSkip;
    
    public function jsonSerialize() {
        $options = [];
        $xTicks = [];
        
        if ($this->legendDisplay) {
            $options['legend']['display'] = $this->legendDisplay;
        }
        if ($this->xAxisBeginAtZero) {
            $xTicks['beginAtZero'] = $this->xAxisBeginAtZero;
        }
        if ($this->yAxisBeginAtZero) {
            $options['scales']['yAxes']['ticks']['beginAtZero'] = $this->yAxisBeginAtZero;
        }
        if (isset($this->xAxesRotationMax)) {
            $xTicks['maxRotation'] = $this->xAxesRotationMax;
        }
        if (isset($this->xAxesRotationMin)) {
            $xTicks['minRotation'] = $this->xAxesRotationMin;
        }
        if ($this->xAxesRotationAutoSkip) {
            $xTicks['autoSkip'] = $this->xAxesRotationAutoSkip;
        }
        
        if($this->legendLabels){
            $options['legend']['labels'] = $this->legendLabels;
        }
        
        if(count($xTicks) > 0){
            $options['scales']['xAxes']['ticks'] = $xTicks;
        }
        
        return $options;
    }
    
}