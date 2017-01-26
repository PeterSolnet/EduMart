@extends('layouts.master')
@section('title','Dashboard')
@section('icon','menu-icon fa fa-tachometer')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    {{Auth::user()->school_id}}
                </div>
            </div>
        </div>
    </div>
@endsection
