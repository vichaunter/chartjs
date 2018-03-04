<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:36
 */

namespace VicHaunter\ChartJS\Factories;

class BarChartOptionsFactory extends ChartCommonOptionsFactory {
    
    const ALLOWED = [
        'label',
        'xAxisID',
        'yAxisID',
        'backgroundColor',
        'borderColor',
        'borderWidth',
        'borderSkipped',
        'hoverBackgroundColor',
        'hoverBorderColor',
        'hoverBorderWidth',
    ];
//    type
//    data
//        labels []
//        datasets []
//            label
//            backgroundColor []
//            data []
//    options []
//        legend []
//            display
//        title []
//            display
//            text

    
    /**
     * SET OPTIONS
     */
    public function setBegintAtZero( $xAxis = true, $yAxis = true ) {
        $this->xAxisBeginAtZero = $xAxis;
        $this->yAxisBeginAtZero = $yAxis;
    }
    
    public function setLegendDisplay( $value ) {
        $this->options['legend']['display'] = $value;
    }
    
    public function xAxesRotation( $max = null, $min = null, $autoSkip = null ) {
        if (isset($max)) {
            $this->xAxesRotationMax = $max;
        }
        if (isset($min)) {
            $this->xAxesRotationMin = $min;
        }
        if ($autoSkip != null) {
            $this->xAxesRotationAutoSkip = $autoSkip;
        }
    }
//    public function addLegend($display = true, $position = 'top', $fullWidth = true, $reverse = false, $onClick = null, $onHover = null){
//        $this->options['legend']['display'] = $display;
//        $this->options['legend']['position'] = $position;
//        $this->options['legend']['fullWidth'] = $fullWidth;
//        $this->options['legend']['reverse'] = $reverse;
//        if($onClick) $this->options['legend']['onClick'] = $onClick;
//        if($onHover) $this->options['legend']['onHover'] = $onHover;
//    }
    public function setLegendLabel( $text, $fillStyle, $hidden, $lineCap, $lineDash, $lineDashOffset, $lineJoin, $lineWidth, $strokeStyle, $pointStyle ) {
        $data = [];
        if ($text) {
            $data['text'] = $text;
        }
        if ($fillStyle) {
            $data['fillStyle'] = $fillStyle;
        }
        if ($hidden) {
            $data['hidden'] = $hidden;
        }
        if ($lineCap) {
            $data['lineCap'] = $lineCap;
        }
        if ($lineDash) {
            $data['lineDash'] = $lineDash;
        }
        if ($lineDashOffset) {
            $data['lineDashOffset'] = $lineDashOffset;
        }
        if ($lineJoin) {
            $data['lineJoin'] = $lineJoin;
        }
        if ($lineWidth) {
            $data['lineWidth'] = $lineWidth;
        }
        if ($strokeStyle) {
            $data['strokeStyle'] = $strokeStyle;
        }
        if ($pointStyle) {
            $data['pointStyle'] = $pointStyle;
        }
        $this->legendLabels[] = $data;
    }
    
}