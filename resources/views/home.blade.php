@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading panelheadd">Home</div>

                <div class="row">
                <div class="col-md-6" >
                <div class="container-fluid"><br>   
                    <div class="panel-head" >
                    <i class="fa fa-user" aria-hidden="true"></i> Information  
                    </div><br>
                    <p style="margin-left: 20px;">First Name: {{$user->name}}</p>
                    <p style="margin-left: 20px;">Last Name: {{$user->lastname}}</p>
                    {{-- <p style="margin-left: 20px;">Username: {{$user->email}}</p> --}}

                </div>
                </div>

                <div class="col-md-6" >
                <div class="container-fluid"><br>   
                    <div class="panel-head" >
                    <i class="fa fa-user" aria-hidden="true"></i> Profile  
                    </div><br>
                    {{-- <p style="margin-left: 20px;">First Name: {{$user->name}}</p> --}}
                    {{-- <p style="margin-left: 20px;">Last Name: {{$user->lastname}}</p> --}}
                    <p style="margin-left: 20px;">Username: {{$user->email}}</p>

                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-12" >
                <div class="container-fluid"><br>   
                    <div class="panel-head" >
                    <i class="fa fa-bar-chart" aria-hidden="true"></i> Chart  
                    </div>
                        @if($result==0&&$result2==0&&$result3==0&&$result4==0&&$result5==0)
                        <br><p style="margin-left: 20px;">There are no data</p>
                        @else
                        <div id="chartdiv"></div>
                        <h6 style="text-align: center;">Amount of evaluate scores</h6>
                        @endif
                </div>
                </div>
                </div><br>

            </div>
        </div>
    </div>
</div>
@endsection

<style>
    body { background-color: #000; color: #fff; }
#chartdiv {
  width   : 100%;
  height    : 250px;
  font-size : 11px;
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
    json.push({'title': el,'value': p[index] })
});

// var chart = AmCharts.makeChart( "chartdiv", {
//   "type": "serial",
//   "theme": "none",
//   "dataProvider": json,
//   "valueAxes": [ {
//     "gridColor": "#FFFFFF",
//     "gridAlpha": 0.2,
//     "dashLength": 0,
//     "title": "Amount"
//   } ],
//   "gridAboveGraphs": true,
//   "startDuration": 1,
//   "graphs": [ {
//     "balloonText": "[[category]]: <b>[[value]]</b>",
//     "fillAlphas": 0.8,
//     "lineAlpha": 0.2,
//     "type": "column",
//     "valueField": "visits"
//   } ],
//   "chartCursor": {
//     "categoryBalloonEnabled": false,
//     "cursorAlpha": 0,
//     "zoomable": false
//   },
//   "categoryField": "country",
//   "categoryAxis": {
//     "gridPosition": "start",
//     "gridAlpha": 0,
//     "tickPosition": "start",
//     "tickLength": 20
//   },
//   "export": {
//     "enabled": true
//   }

// } );
// $( document ).ready(function() {
//   $('a[href*="http://www.amcharts.com/javascript-charts/"]').remove();
//     });
// $( document ).ready(function() {
//   $('a[href*="http://www.amcharts.com/javascript-charts/"]').remove();
//     });

</script>


<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "dataProvider": json,
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
    "enabled": true
  }
} );
</script>
