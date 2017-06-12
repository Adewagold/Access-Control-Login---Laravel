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

<table class="table table-striped table-hover ">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Student</th>
        <th>C Officer</th>
        <th>Super Admin</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td><input type="checkbox" {{$user->hasRole('Student') ? 'checked' : ''}} name='role_student'></td>
        <td><input type="checkbox" {{$user->hasRole('CO') ? 'checked' : ''}} name='role_CO' ></td>
        <td><input type="checkbox" {{$user->hasRole('SA') ? 'checked' : ''}} name='role_SA'></td>
        {{csrf_field()}}
        <td><button class="btn btn-primary">Assign Role</button></td>
    </tr>
@endforeach
    </tbody>
</table>
@endsection