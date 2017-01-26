@extends('layouts.login_template')
@section('title','Access Denied')
@section('icon','menu-icon fa fa-tachometer')
@section('content')
<div class="row">
    <div class="col-md-offset-2 col-sm-offset-2 col-md-10">
        <h1>Access Denied!!!</h1>

            <a href="{{ url('/') }}" class="navbar-brand col-md-offset-2 col-sm-offset-2">
                <small>
                    Return to Login
                </small>
            </a>
    </div>
</div>
@endsection
