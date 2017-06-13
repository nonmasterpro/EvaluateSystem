@extends('layouts.app')

@section('content')

  <button id="myButton11" onclick="window.location.href='/home'"
  class="btn btn-info tttt" type="button" name="button"> Back </button>

<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  
<div class="panel-heading panelheadd" style="font-size: 20px;">Report</div>

<h4 id="listH3" style="margin-left: 20px;">Chart Report - {{Auth::user()->name}} {{Auth::user()->lastname}}</h4>



  <div id="chartdiv"></div>
  <h6 style="text-align: center;font-weight: bold;font-size: 13px;">Evaluation Score</h6>
 
</div>
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading panelheadd" style="font-size: 20px;">Comments</div>

@foreach($reports as $key => $report)
<div class="panel panel-default cardd">
<h5 style="display: inline;" >{{$report->comment_name}}</h5>
<p style="display: inline;" class="commentnum" >Comment : {{$key+1}}</p>
<h5 class="" >Score : {{$report->point}}</h5>

{{-- <textarea style="width: 900px;margin-left: 15px;" rows="3" name = "comment" class = "form-control">{{$report->comment}}</textarea> --}}
<div class="panel commentt">
<p style="margin-left: 10px;">{{$report->comment}}</p>
</div>
</div>

<hr>
@endforeach
</div>
</div>

</div>
</div>
</div>
</div>
@stop

<style media="screen">

body { background-color: #000; color: #fff; }
#chartdiv {
  width   : 100%;
  height    : 300px;
  font-size : 11px;
} 
.commentt{
  border: inset;
  height: 100px;
  margin-left: 10px;
  margin-right: 10px;
  background-color: #DFDFDF!important; 
}
.commentname{
  margin-left: 10px; 
  background-color: #7DD9DE;
  border: outset ;
  border-radius: 5px;
  padding: 5px 5px;
  margin-right: 300px;
  text-align: center;
}
.scoree{
  background-color: #FFD021;
  border: outset;
  border-radius: 5px;
  padding: 5px 5px;
  margin-left: 270px!important;
  margin-right: 100px;
  margin-top: -41px!important;
  text-align: center;
}
.cardd{
  margin: 20px 20px 20px 20px;
  /*background-color: #EF6924!important;*/
  border: white!important;

}
.commentnum{
  color: grey;
  font-size: 10px;
  float: right;
}



</style>

<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/none.js"></script>


<script>

var p = [{{$result}},{{$result2}},{{$result3}},{{$result4}},{{$result5}}];
var point = ['1','2','3','4','5'];
var json = [];
$(point).each(function(index, el) {
    json.push({'country': el,'visits': p[index] })
});
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "none",
  "dataProvider": json,
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0,
    "title": "Amount"
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "export": {
    "enabled": true
  }

} );
$( document ).ready(function() {
  $('a[href*="http://www.amcharts.com/javascript-charts/"]').remove();
    });
$( document ).ready(function() {
  $('a[href*="http://www.amcharts.com/javascript-charts/"]').remove();
    });

</script>
