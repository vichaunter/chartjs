<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:01
 */

namespace VicHaunter\ChartJS;
use VicHaunter\ChartJS\Factories\PieChartFactory;

class DoughnutChart extends PieChartFactory {
    
    public function __construct( $scheme = null, $chartID = null ) {
        $this->type = 'doughnut';
        parent::__construct($scheme, $chartID);
    }
    

}