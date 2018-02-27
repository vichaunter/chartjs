<?php
/**
 * Created by PhpStorm.
 * User: Victor
 * Date: 24/02/2018
 * Time: 11:44
 */

namespace VicHaunter\ChartJS\Factories;

class ChartFactory {
    
    const CHARTJS_VERSION = '2.7.1';
    
    private $version = null;
    private $htmlMode;
    
    //chart config
    protected $type;
    
    protected $chartID;
    protected $scheme;
    
    protected $options;
    protected $data;
    
    protected function getUniqueID() {
        $id = microtime();
        usleep(1);
        $id .= microtime();
        //TODO: find optimal way to retrieve uniq id
        return preg_replace("/[^0-9]/", "", $id);
    }
    
    public function getID(){
        return $this->chartID;
    }
    protected function setUniqueID($chartID = null){
        $this->chartID = $chartID ? $chartID : $this->getUniqueID();
    }
    
    public function setVersion( $version ) {
        $this->version = $version;
    }
    
    public function htmlMode($set = false){
        $this->htmlMode = $set;
    }
    
    public function getJsFileUrl( $custom = null, $loadBundle = true, $html = false ) {
        $url = null;
        if ($custom) {
            $url = $custom;
        }
        $ver = $this->version ? $this->version : self::CHARTJS_VERSION;
        if (!$url && $loadBundle == true) {
            $url = "https://cdn.jsdelivr.net/combine/npm/chart.js@{$ver}/dist/Chart.min.js,npm/chart.js@{$ver}/dist/Chart.bundle.min.js";
        }
        if (!$url) {
            $url = "https://cdn.jsdelivr.net/npm/chart.js@{$ver}/dist/Chart.min.js";
        }
        if ($html) {
            $result = '<script src="'.$url.'"></script>';
        } else {
            $result = $url;
        }
        
        return $result;
    }
    
    public function getCode(){
        $code = [];
        
        $code['type'] = $this->type;
        $code['data'] = $this->data;
        if($this->options) $code['options'] = $this->options;
        
        return json_encode($code);
    }
    
    /**
     * Return full html script with correct format
     *
     * Can be set if needs or not script tags
     *
     * @return string
     */
    public function getHtmlScript($tags = true){
        $script = "";
        if($tags){
            $script .= "<script>";
        }
        
        
        $script .= 'new Chart(document.getElementById("'.$this->getID().'"), '.$this->getCode().');';
        
        
        if($tags){
            $script .= "</script>";
        }
        return $script;
    }
    
    public function getHtmlCanvas(){
        return "<canvas id=\"{$this->getID()}\"></canvas>";
    }
    
    public function getHtml($tags = true){
        return $this->getHtmlCanvas()."\n".$this->getHtmlScript($tags);
    }
    
    public function addOption( $name, $values){
        $setOption = 'set'.ucfirst($name);
        if(method_exists($this->options, $setOption)) {
            $this->options->$setOption($values);
        }else{
            throw new \ChartJSOptionsException("Option {$name} not exists");
        }
    }


//    public function setDataLabels(array $labels){
//        $this->data['labels'] = $labels;
//    }
    
    protected function mapColors(array $data,array $colors){
        $previousColor = $colors[0];
        return array_map(function($data,$color) use (&$previousColor) {
            if($color){ $previousColor = $color; }
            return $previousColor;
        }, $data, $colors);
    }
}