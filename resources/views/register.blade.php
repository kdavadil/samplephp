

@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Are You Attending?</h2>
                    <p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                   <div class="card card-default">
                       <div class="card card-header">
                        Name Search    
                        </div>   
                        <div class="card card-body">
                            <input type="text" id="search" class="form-control" placeholder="Type name here" autocomplete="off">
                            <ul class="list-group my-5" id="searchform">
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="card card-default">
                        <div class="card card-header">
                         Name Search    
                         </div>   
                         <div class="card card-body">
                             <ul class="list-group my-5">
                                @foreach($names as $name)
                                <li class="list-group-item">
                                    <span>{{$name->fullname}}</span>
                                    <a href="/going/{{ $name->Id }}" class="btn btn-success btn-sm float-right mr-2">Complete</a>
                                </li>
                                @endforeach
                             </ul>
                         </div>
                     </div> --}}

                </div>
            </div>	
        </div>
    </div>
@endsection