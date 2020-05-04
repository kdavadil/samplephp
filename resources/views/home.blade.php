@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    <div>
    <div>
    </div>
    <div class="panel-body">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <input type="text" class="form-controller form-control" id="search" name="search" placeholder="Type your full name here">
            </div>
        </div>
    <table class="table table-bordered table-hover">
    <thead>
    <tr>
    <th>Full Name</th>
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
    </div>
    </div>
</div>                        
    {{-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScJdtIwBX14yXEVff_WAva7hsPzTjrzAavaolGLELD1r2gFYQ/viewform?embedded=true" width="100%" height="100%" onload="this.style.height=(this.contentDocument.body.scrollHeight+45) +'px';" scrolling="no" style="width:100%;min-height:1000px;border:none;overflow-y:hidden;overflow-x:hidden;" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>	 --}}
@endsection
