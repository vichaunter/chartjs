<?php

namespace VicHaunter\ChartJS;

class ChartJS {
    
    const CHARTJS_VERSION = '2.7.1';
    
    private $version = null;
    private $htmlMode;
    
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
            "https://cdn.jsdelivr.net/npm/chart.js@{$ver}/dist/Chart.min.js";
        }
        if ($html) {
            $result = '<script src="'.$url.'"></script>';
        } else {
            $result = $url;
        }
        
        return $result;
    }
    
    
    
}
