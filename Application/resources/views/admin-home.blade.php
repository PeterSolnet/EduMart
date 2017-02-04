@extends('layouts.master')
@section('PageTitle','Admin Dashboard')
@section('icon','menu-icon fa fa-tachometer')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="widget-box">
                                    <div class="widget-body">
                                        <div class="widget-main padding-6">
                                             <a href="#">
                                                 <div class="alert alert-info align-center">Create Role</div>
                                             </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <div class="widget-box">
                                    <div class="widget-body">
                                        <div class="widget-main padding-6">
                                            <a href="#">
                                                <div class="alert alert-info align-center">Create Permission</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <div class="widget-box">
                                    <div class="widget-body">
                                        <div class="widget-main padding-6">
                                            <a href="#">
                                                <div class="alert alert-info align-center">Create School</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3">
                                <div class="widget-box">
                                    <div class="widget-body">
                                        <div class="widget-main padding-6">
                                            <div class="alert alert-info"> Hello World! </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </div>
@endsection
