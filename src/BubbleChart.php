<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:01
 */

namespace VicHaunter\ChartJS;

use VicHaunter\ChartJS\Factories\BubbleChartFactory;

class BubbleChart extends BubbleChartFactory {
    
    public function __construct( $scheme = null, $chartID = null ) {
        $this->type = 'bubble';
        parent::__construct($scheme, $chartID);
    }
    

}