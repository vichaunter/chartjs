<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 21/02/2018
 * Time: 20:59
 */


final class ChartJSTest extends PHPUnit_Framework_TestCase {
    
    public function testVersions() {
        $c = new \VicHaunter\ChartJS\ChartJS();
        
        $this->assertEquals(
            'https://cdn.jsdelivr.net/combine/npm/chart.js@'.\VicHaunter\ChartJS\ChartJS::CHARTJS_VERSION.'/dist/Chart.min.js,npm/chart.js@'.\VicHaunter\ChartJS\ChartJS::CHARTJS_VERSION.'/dist/Chart.bundle.min.js',
            $c->getJsFileUrl(),
            'Base version dont match'
        );
        
        $c->setVersion('1.1.1');
        $this->assertEquals(
            'https://cdn.jsdelivr.net/combine/npm/chart.js@1.1.1/dist/Chart.min.js,npm/chart.js@1.1.1/dist/Chart.bundle.min.js',
            $c->getJsFileUrl(),
            'Custom version fails after setVersion'
            );
    
        $this->assertEquals(
            'https://this.is/myurl.js',
            $c->getJsFileUrl('https://this.is/myurl.js'),
            'Custom url fails on getJsFileUrl'
        );
    
        
        $this->assertEquals(
            'https://cdn.jsdelivr.net/npm/chart.js@1.1.1/dist/Chart.min.js',
            $c->getJsFileUrl(null,false),
            'Avoid loading Bundle file fails on getJsFileUrl'
        );
    
    
    
    }
    
    public function testUniqueID(){
        $c = new \VicHaunter\ChartJS\ChartJS();
        $d = new \VicHaunter\ChartJS\ChartJS();
        $this->assertNotEquals($c->getID(), $d->getID());
    }
    
}