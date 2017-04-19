@extends('layouts.main')

@section('dashboard_active')
  active
@stop

@section('navbar')
  @include('admin.navbar')
@endsection

@section('content')
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
    <h1 class="page-header">
        Dashboard <small>Statistics Overview</small>
    </h1>
    <ol class="breadcrumb">
        <li class="active">
            <i class="fa fa-dashboard"></i> Dashboard
        </li>
    </ol>
</div>
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-comments fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">{{$numOfUsers}}</div>
                    <div>Users Registered!</div>
                </div>
            </div>
        </div>
        <a href="{{route('all_users')}}">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-green">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">12</div>
                    <div>New Tasks!</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-dropbox fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div>Go to Dropbox!</div>
                </div>
            </div>
        </div>
        <a href="https://www.dropbox.com/sh/zjuen830lpqum59/AAABOTQdYnzHBz6wpF_mbPQKa?dl=0">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6">
    <div class="panel panel-red">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-support fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge">13</div>
                    <div>Support Tickets!</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>
</div>
</div>
</div>
@endsection
