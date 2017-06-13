@extends('layouts.app')

@section('content')

  <button id="myButton11" onclick="window.location.href='/home'"
  class="btn btn-info tttt" type="button" name="button"> Back </button>

@if(session()->has('message'))
<input type="hidden" class="btn btn-primary" id="modal" data-toggle="modal" href='#modal-id'>
<div class="modal fade" id="modal-id">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" >Status</h4>
      </div>
      <div class="modal-body">
            <h3 style="color: green; text-align: center" class ="alert alert-succress">{{session()->get('message')}}</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endif


<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  
<div class="panel-heading panelheadd" style="font-size: 20px;">List of employees</div>


@if(sizeof($users)==1)

<h3>There are no data</h3>

@else

<table class="table table-striped tablee">
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Status</th>
<th class="actionCol">Action</th>


</tr>


@foreach($users as $user)
@if($user->id!=Auth::user()->id)
<tr>
  <td>{{$user->name}}</td>
  <td>{{$user->lastname}}</td>

  <td>
    @foreach($reportuser as $report)
    @if($report->user_id==$user->id)
    {{$p}} <i style="color: green" class="fa fa-check-circle" aria-hidden="true"></i><?php break; ?>
    @endif
    @endforeach
  </td>

  <td>
    <a href="{{route('user.show',$user->id)}}" class="btn btn-primary " id="evalbut">Evaluate</a>
  </td>

    {{-- <a href="{{route('user.show',$user->id)}}" class="btn btn-primary " id="evalbut">Evaluate</a> --}}
</tr>
@endif
@endforeach
</table>
@endif
</div>
</div>
</div>
</div>
@stop

<style media="screen">

.tablee{
width: 100%!important;
}
/*.actionCol:last-child{
  width:10px;
}*/

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
  
$(function(){
    $('#modal').click();
});


</script>
