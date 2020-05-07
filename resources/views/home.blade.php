@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <input type="text" class="form-controller form-control" id="search" name="search" placeholder="Type your full name here">
            </div>
        </div>
    <table class="table table-bordered table-hover">
    <thead>
    <tr>
    <th>Complete Name</th>
    <th>Register</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    </table>
    <div>&nbsp;</div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th>Family Member</th>
            <th>Register</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
    </table>
    </div>
                      
@endsection
