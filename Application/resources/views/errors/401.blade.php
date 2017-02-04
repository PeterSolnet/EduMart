@extends('layouts.login_template')
@section('title','Unauthorized Access')
@section('icon','menu-icon fa fa-tachometer')
@section('content')
<div class="row">
    <div class="col-md-offset-2 col-sm-offset-2 col-md-10">
        <h3>Unauthorized Access!</h3>
<span>
    You have no authorization to the page requested.
</span>
        <a href="{{ url('/login') }}" class="navbar-brand col-md-offset-2 col-sm-offset-2">
            <small>
                Return to Login
            </small>
        </a>
    </div>
</div>
@endsection
