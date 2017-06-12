@extends('includes.master')

@section('contents')

<div class="jumbotron">
    <h1>Jumbotron</h1>
    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <p><a class="btn btn-primary btn-lg">Learn more</a></p>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Panel primary</h3>
            </div>
            <div class="panel-body">
                Panel content
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Panel success</h3>
            </div>
            <div class="panel-body">
                Panel content
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Panel warning</h3>
            </div>
            <div class="panel-body">
                Panel content
            </div></div>
    </div>
</div>

@endsection