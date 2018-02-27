<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24/02/2018
 * Time: 11:54
 */

namespace VicHaunter\ChartJS\Factories;

class ChartCommonDatasetFactory {
    
    const POINT_STYLE = [
        'circle',
        'cross',
        'crossRot',
        'dash',
        'line',
        'rect',
        'rectRounded',
        'rectRot',
        'star',
        'triangle',
    ];
    
    protected $label;
    protected $xAxisID;
    protected $yAxisID;
    protected $backgroundColor;
    protected $borderColor;
    protected $borderWidth;
    protected $borderSkipped;
    protected $hoverBackgroundColor;
    protected $hoverBorderColor;
    protected $hoverBorderWidth;
    
    protected $borderDash;
    protected $borderDashOffset;
    protected $borderCapStyle;
    protected $borderJoinStyle;
    protected $cubicInterpolationMode;
    protected $fill;
    protected $lineTension;
    protected $pointBackgroundColor;
    protected $pointBorderColor;
    protected $pointBorderWidth;
    protected $pointRadius;
    protected $pointStyle;
    protected $pointHitRadius;
    protected $pointHoverBackgroundColor;
    protected $pointHoverBorderColor;
    protected $pointHoverBorderWidth;
    protected $pointHoverRadius;
    protected $showLine;
    protected $spanGaps;
    protected $steppedLine;

    protected $hoverRadius;
    protected $hitRadius;
    protected $radius;
    
    protected $data = [];
    
}