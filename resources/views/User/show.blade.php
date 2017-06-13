@extends('layouts.app')

@section('content')


<button id="myButton11" onclick="window.location.href='/user'"
class="btn btn-info tttt" type="button" name="button"> Back </button>

<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  
<div class="panel-heading panelheadd" style="font-size: 20px;">Evaluate Employee</div>

{{-- <div id="" class="row">
  <h3 id="listH3">Evaluate Employee

</h3> --}}


<div id="evalbox" class="">


<form class="" method="post" action="{{route('user.store')}}">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div id="desQ" class="">
    <h4>Name</h4>
    <h5 style="margin-left: 30px;">{{$users->name}} {{$users->lastname}}</h5>

    <input type="hidden" name="user_id" value="{{$users->id}}">
    <input type="hidden" name="comment_name" value="{{Auth::user()->name}} {{Auth::user()->lastname}}">

    <h4 style="display: inline;">Score</h4>
    <div style="display: inline;">
        <input type="radio" name="point" value="1" checked> 1
        <input type="radio" name="point" value="2"> 2
        <input type="radio" name="point" value="3"> 3
        <input type="radio" name="point" value="4"> 4
        <input type="radio" name="point" value="5"> 5  
    </div> 
    <br><br>

    
    <div id="commentbox" class="panel panel-default">
      <div class="panel-heading panelheadd">Comment</div>
      <div class = "panel-body">

        <textarea rows="10" name = "comment" class = "form-control"  required></textarea><br>
        <button style="float: right" type="submit" class="btn btn-primary buttonComment">Submit</button>

      </div>
      </div>
  </div>
</form>
</div>
</div>
</div>

@stop



<style media="screen">

#desQ{
  margin-left: 10px;
  margin-right: 10px;
}
</style>
