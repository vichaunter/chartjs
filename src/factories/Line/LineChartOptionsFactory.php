<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:36
 */

namespace VicHaunter\ChartJS\Factories;

class LineChartOptionsFactory extends ChartCommonOptionsFactory {
    
    
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
        'hoverBorderWidth'
    ];
    
    
    /**
     * SET OPTIONS
     */
    
    public function setBegintAtZero($xAxis = false,$yAxis = false){
        if($xAxis) $this->xAxisBeginAtZero = $xAxis;
        if($yAxis) $this->yAxisBeginAtZero = $yAxis;
    }

    public function setLegendDisplay($value){
        $this->legendDisplay = $value;
    }
    
//    public function addLegend($display = true, $position = 'top', $fullWidth = true, $reverse = false, $onClick = null, $onHover = null){
//        $this->options['legend']['display'] = $display;
//        $this->options['legend']['position'] = $position;
//        $this->options['legend']['fullWidth'] = $fullWidth;
//        $this->options['legend']['reverse'] = $reverse;
//        if($onClick) $this->options['legend']['onClick'] = $onClick;
//        if($onHover) $this->options['legend']['onHover'] = $onHover;
//    }
    
    public function setLegendLabel($text, $fillStyle, $hidden, $lineCap, $lineDash, $lineDashOffset, $lineJoin, $lineWidth, $strokeStyle, $pointStyle){
        $data = [];
        if($text) $data['text'] = $text;
        if($fillStyle) $data['fillStyle'] = $fillStyle;
        if($hidden) $data['hidden'] = $hidden;
        if($lineCap) $data['lineCap'] = $lineCap;
        if($lineDash) $data['lineDash'] = $lineDash;
        if($lineDashOffset) $data['lineDashOffset'] = $lineDashOffset;
        if($lineJoin) $data['lineJoin'] = $lineJoin;
        if($lineWidth) $data['lineWidth'] = $lineWidth;
        if($strokeStyle) $data['strokeStyle'] = $strokeStyle;
        if($pointStyle) $data['pointStyle'] = $pointStyle;
        
        $this->options['legend']['labels'][] = $data;
    }
    
}