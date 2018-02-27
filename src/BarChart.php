<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:01
 */

namespace VicHaunter\ChartJS;
use VicHaunter\ChartJS\Factories\BarChartFactory;

class BarChart extends BarChartFactory {
    
//    const SCHEME_VERTICAL = 'vertical';
//    const SCHEME_HORIZONTAL = 'horizontal';
//    const SCHEME_MULTI_AXIS = 'multiAxis';
//    const SCHEME_STACKED = 'stacked';
//    const SCHEME_STACKED_GROUPS = 'stackedGroups';
//
//    private $scheme = 'vertical';
    
    
    public function __construct( $scheme = null, $chartID = null ) {
        $this->type = 'bar';
        parent::__construct($scheme, $chartID);
    }
    

}