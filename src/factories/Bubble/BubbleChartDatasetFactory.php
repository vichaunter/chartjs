<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:36
 */

namespace VicHaunter\ChartJS\Factories;

class BubbleChartDatasetFactory extends ChartCommonDatasetFactory implements \JsonSerializable {
    
    public function jsonSerialize() {
        $data = [];
        if($this->label) $data['label'] = $this->label;
        if($this->backgroundColor) $data['backgroundColor'] = $this->backgroundColor;
        if($this->borderColor) $data['borderColor'] = $this->borderColor;
        if($this->borderWidth) $data['borderWidth'] = $this->borderWidth;
        if($this->hoverBackgroundColor) $data['hoverBackgroundColor'] = $this->hoverBackgroundColor;
        if($this->hoverBorderColor) $data['hoverBorderColor'] = $this->hoverBorderColor;
        if($this->hoverBorderWidth) $data['hoverBorderWidth'] = $this->hoverBorderWidth;
        if($this->hoverRadius) $data['hoverRadius'] = $this->hoverRadius;
        if($this->hitRadius) $data['hitRadius'] = $this->hitRadius;
        if($this->pointStyle) $data['pointStyle'] = $this->pointStyle;
        if($this->radius) $data['radius'] = $this->radius;
       
        if($this->data) $data['data'] = $this->data;
        return $data;
    }
    
    
    public function setLabel($string){
        $this->label = $string;
        return $this;
    }
    public function setBackgroundColor($hexColor){
        $this->backgroundColor = $hexColor;
        return $this;
    }
    public function setBorderColor($hexColor){
        $this->borderColor = $hexColor;
        return $this;
    }
    public function setBorderWidth($int){
        $this->borderWidth = (int)$int;
        return $this;
    }
    public function setHoverBackgroundColor($hexColor){
        $this->hoverBackgroundColor = $hexColor;
        return $this;
    }
    public function setHoverBorderColor($hexColor){
        $this->hoverBorderColor = $hexColor;
        return $this;
    }
    public function setHoverBorderWidth($int){
        $this->hoverBorderWidth = $int;
        return $this;
    }
    public function setHoverRadius($int){
        $this->hoverRadius = $int;
        return $this;
    }
    public function setHitRadiush($int){
        $this->hitRadius = $int;
        return $this;
    }
    public function setPointStyle($string){
        $this->pointStyle = $string;
        return $this;
    }
    public function setRadius($int){
        $this->radius = $int;
        return $this;
    }
    
    /**
     * Array of arrays
     * [
     *      ['x' => 22,'y' => 22,'r' => 22],
     *      ['x' => 22,'y' => 22,'r' => 22],
     *      ['x' => 22,'y' => 22,'r' => 22]
     * ]
     *
     * @param array $data
     *
     * @return $this
     */
    public function setData(array $data){
        $this->data = $data;
        return $this;
    }
//TODO handle way to add each row as bubble in same array key
//    public function newDataRow(){
//        return $this->data[] = [];
//    }
    
    public function addData($data){
        $this->data[] = (string) $data;
        return $this;
    }
    

    
}