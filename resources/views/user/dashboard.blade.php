@extends('layouts.base')

@section('breadcrumb')
<h1>
    Dashboard
    <small>Overview</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
</ol>
@endsection
@section('css')
<!-- fullCalendar -->
<link rel="stylesheet" href="{!! asset('bower_components/fullcalendar/dist/fullcalendar.min.css') !!}">
<link rel="stylesheet" href="{!! asset('bower_components/fullcalendar/dist/fullcalendar.print.min.css') !!}" media="print">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $data3 }}</h3>
                <p>Kader</p>
            </div>
            <div class="icon">
                <i class="fa fa-user-md"></i>
            </div>
            <a href="{{ route('kader.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $data4 }}</h3>
                <p>Pengguna</p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="{{ route('pengguna.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $data1 }}</h3>
                <p>Ibu</p>
            </div>
            <div class="icon">
                <i class="fa fa-female"></i>
            </div>
            <a href="{{ route('ibu.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ $data2 }}</h3>
                <p>Anak</p>
            </div>
            <div class="icon">
                <i class="fa fa-child"></i>
            </div>
            <a href="{{ route('anak.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>

@endsection