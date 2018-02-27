<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:36
 */

namespace VicHaunter\ChartJS\Factories;

class PolarChartDatasetFactory extends ChartCommonDatasetFactory implements \JsonSerializable {
    
    public function jsonSerialize() {
        $data = [];
        if ($this->label) {
            $data['label'] = $this->label;
        }
        if ($this->backgroundColor) {
            $data['backgroundColor'] = $this->backgroundColor;
        }
        if ($this->borderColor) {
            $data['borderColor'] = $this->borderColor;
        }
        if ($this->borderWidth) {
            $data['borderWidth'] = $this->borderWidth;
        }
        if ($this->hoverBackgroundColor) {
            $data['hoverBackgroundColor'] = $this->hoverBackgroundColor;
        }
        if ($this->hoverBorderColor) {
            $data['hoverBorderColor'] = $this->hoverBorderColor;
        }
        if ($this->hoverBorderWidth) {
            $data['hoverBorderWidth'] = $this->hoverBorderWidth;
        }
        if ($this->data) {
            $data['data'] = $this->data;
        }
        
        return $data;
    }
    
    public function setLabel( $string ) {
        $this->label = $string;
        
        return $this;
    }
    
    public function setBackgroundColor( $hexColor ) {
        $this->backgroundColor = $hexColor;
        
        return $this;
    }
    
    public function setBorderColor( $hexColor ) {
        $this->borderColor = $hexColor;
        
        return $this;
    }
    
    public function setBorderWidth( $int ) {
        $this->borderWidth = (int)$int;
        
        return $this;
    }
    
    public function setHoverBackgroundColor( $hexColor ) {
        $this->hoverBackgroundColor = $hexColor;
        
        return $this;
    }
    
    public function setHoverBorderColor( $hexColor ) {
        $this->hoverBorderColor = $hexColor;
        
        return $this;
    }
    
    public function setHoverBorderWidth( $int ) {
        $this->hoverBorderWidth = (int)$int;
        
        return $this;
    }
    
    
    public function setData( array $data ) {
        $this->data = $data;
        
        return $this;
    }
    
    public function addData( $data ) {
        $this->data[] = (string)$data;
        
        return $this;
    }
    
}