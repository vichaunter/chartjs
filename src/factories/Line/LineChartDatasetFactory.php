<?php
/**
 * Created by PhpStorm.
 * User: vicha
 * Date: 22/02/2018
 * Time: 19:36
 */

namespace VicHaunter\ChartJS\Factories;

class LineChartDatasetFactory extends ChartCommonDatasetFactory implements \JsonSerializable {
    
    public function jsonSerialize() {
        $data = [];
        if ($this->label) {
            $data['label'] = $this->label;
        }
        if ($this->xAxisID) {
            $data['xAxisID'] = $this->xAxisID;
        }
        if ($this->yAxisID) {
            $data['yAxisID'] = $this->yAxisID;
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
        if ($this->borderDash) {
            $data['borderDash'] = $this->borderDash;
        }
        if ($this->borderDashOffset) {
            $data['borderDashOffset'] = $this->borderDashOffset;
        }
        if ($this->borderCapStyle) {
            $data['borderCapStyle'] = $this->borderCapStyle;
        }
        if ($this->borderJoinStyle) {
            $data['borderJoinStyle'] = $this->borderJoinStyle;
        }
        if ($this->cubicInterpolationMode) {
            $data['cubicInterpolationMode'] = $this->cubicInterpolationMode;
        }
        if ($this->fill) {
            $data['fill'] = $this->fill;
        }
        if ($this->lineTension) {
            $data['lineTension'] = $this->lineTension;
        }
        if ($this->pointBackgroundColor) {
            $data['pointBackgroundColor'] = $this->pointBackgroundColor;
        }
        if ($this->pointBorderColor) {
            $data['pointBorderColor'] = $this->pointBorderColor;
        }
        if ($this->pointBorderWidth) {
            $data['pointBorderWidth'] = $this->pointBorderWidth;
        }
        if ($this->pointRadius) {
            $data['pointRadius'] = $this->pointRadius;
        }
        if ($this->pointStyle) {
            $data['pointStyle'] = $this->pointStyle;
        }
        if ($this->pointHitRadius) {
            $data['pointHitRadius'] = $this->pointHitRadius;
        }
        if ($this->pointHoverBackgroundColor) {
            $data['pointHoverBackgroundColor'] = $this->pointHoverBackgroundColor;
        }
        if ($this->pointHoverBorderColor) {
            $data['pointHoverBorderColor'] = $this->pointHoverBorderColor;
        }
        if ($this->pointHoverBorderWidth) {
            $data['pointHoverBorderWidth'] = $this->pointHoverBorderWidth;
        }
        if ($this->pointHoverRadius) {
            $data['pointHoverRadius'] = $this->pointHoverRadius;
        }
        if ($this->showLine) {
            $data['showLine'] = $this->showLine;
        }
        if ($this->spanGaps) {
            $data['spanGaps'] = $this->spanGaps;
        }
        if ($this->steppedLine) {
            $data['steppedLine '] = $this->steppedLine;
        }
        
        return $data;
    }
    
    public function setLabel( $string ) {
        $this->label = $string;
        
        return $this;
    }
    
    public function setXAxisID( $string ) {
        $this->xAxisID = $string;
        
        return $this;
    }
    
    public function setYAxisID( $string ) {
        $this->yAxisID = $string;
        
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
    
    //array??
    public function setBorderDash( $int ) {
        $this->borderDash = (int)$int;
        
        return $this;
    }
    
    public function setBorderDashOffset( $int ) {
        $this->borderDashOffset = (int)$int;
        
        return $this;
    }
    
    public function setBorderCapStyle( $string ) {
        $this->borderCapStyle = $string;
        
        return $this;
    }
    
    public function setBorderJoinStyle( $string ) {
        $this->borderJoinStyle = $string;
        
        return $this;
    }
    
    public function setCubicInterpolationMode( $string ) {
        $this->cubicInterpolationMode = $string;
        
        return $this;
    }
    
    public function setFill( $boolStr ) {
        $this->fill = $boolStr;
        
        return $this;
    }
    
    public function setLineTension( $int ) {
        $this->lineTension = (int)$int;
        
        return $this;
    }
    
    public function setPointBackgroundColor( $hexColor ) {
        $this->pointBackgroundColor = $hexColor;
        
        return $this;
    }
    
    public function setPointBorderColor( $hexColor ) {
        $this->pointBorderColor = $hexColor;
        
        return $this;
    }
    
    public function setPointBorderWidth( $int ) {
        $this->pointBorderWidth = (int)$int;
        
        return $this;
    }
    
    public function setPointRadius( $int ) {
        $this->pointRadius = (int)$int;
        
        return $this;
    }
    
    public function setPointStyle( $string ) {
        $this->pointStyle = $string;
        
        return $this;
    }
    
    public function setPointHitRadius( $int ) {
        $this->pointHitRadius = (int)$int;
        
        return $this;
    }
    
    public function setPointHoverBackgroundColor( $hexColor ) {
        $this->pointHoverBackgroundColor = $hexColor;
        
        return $this;
    }
    
    public function setPointHoverBorderColor( $hexColor ) {
        $this->pointHoverBorderColor = $hexColor;
        
        return $this;
    }
    
    public function setPointHoverBorderWidth( $int ) {
        $this->pointHoverBorderWidth = (int)$int;
        
        return $this;
    }
    
    public function setPointHoverRadius( $int ) {
        $this->pointHoverRadius = (int)$int;
        
        return $this;
    }
    
    public function setShowLine( $bool ) {
        $this->showLine = $bool;
        
        return $this;
    }
    
    public function setSpanGaps( $bool ) {
        $this->spanGaps = $bool;
        
        return $this;
    }
    
    public function setSteppedLine( $boolStr ) {
        $this->steppedLine = $boolStr;
        
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