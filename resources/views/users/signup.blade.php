@extends('includes.master')

@section('contents')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
<form class="form-horizontal" method="post" action="{{route('users.signup')}}">
    <fieldset>
        <center><legend>Register a New Account</legend></center>
        <div class="form-group">
            <label for="inputName" class="col-lg-2 control-label">Full Name</label>
            <div class="col-lg-10">
                <input type="text" name="fullname" class="form-control" id="inputName" placeholder="Full Name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">

            </div>
        </div>
{{csrf_field()}}
        <div class="form-group text-center">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
    </fieldset>
</form>
</div>
</div>
@endsection