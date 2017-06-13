@extends('layouts.app')

@section('content')

  <button id="myButton1" onclick="window.location.href='/home'"
  class="btn btn-info tttt" type="button" name="button"> Back </button>
        <div class="col-md-8 col-md-offset-2"> 
        <h3>Edit Username</h3>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default tttt">
                <div class="panel-heading panelheadd">{{$user->name}} {{$user->lastname}}</div>

                <div class = "panel-body">

                <form class = "" method = "get" action = "{{URL('user/'.$user->id.'/uname')}}">
                  <input name="_method" type="hidden" value="PATCH">

                  <p>Username </p>
                  <input style="width:250px" type= "text" class = "form-control" name="email" value = "{{$user->email}}" required><br>

                <button style="float: right" type="submit" class="btn btn-primary">Edit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
            </div>
        </div>

@endsection

