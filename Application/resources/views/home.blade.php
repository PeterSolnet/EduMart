@extends('layouts.master')
@section('title','Dashboard')
@section('icon','menu-icon fa fa-tachometer')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <a href="#">{{Auth::user()->school_id}}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
