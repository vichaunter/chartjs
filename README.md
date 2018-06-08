# php-chartjs

Usage example
---

First of all is needed load the js file from cdn, for this you can retrieve like this:
````
        $chartJS = new ChartFactory();
        $jsUrl = $chartJS->getJsFileUrl();
````
Load at the end of page, before other chart scripts

<script src="{$chartJS}"></script>

NOTE: you can getJsFileUrl from any new XXXChart(); if you don't need to load from another file in template.

Then you will generate the chart:
````
        $statsByDate = Customers::getDataList(); //in this case return [total,day]
        
        $barChart = new BarChart();
        $barChartData = $barChart->getData();
//        $barChartOptions = $barChart->getOptions(); // you can configure colors, sizes, etc.
    
        foreach($statsByDate as $day){
           $barChartData->newDataset()
                        ->setLabel($date['day'])
                        ->addData($date['total']);
        }
        
        $barChartHtmlCanvas = $barChart->getHtmlCanvas();
        $barChartHtmlScript = $barChart->getHtmlScript();
````

And add canvas in body where chart should appear, and script after previous $chartJS was included in page.
