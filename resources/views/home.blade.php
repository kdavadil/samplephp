@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Vue Component  --}}

                    <div id="app">
                        <div class="form-group">
                            <label for="fname">First Name:</label>
                            <input type="text" name="fname" required="required" class="form-control" placeholder="Enter First Name" v-model="newItem.fname">
                            <label for="fname">Last Name:</label>
                            <input type="text" name="lname" required="required" class="form-control" placeholder="Enter Last Name" v-model="newItem.lname">
                            <label for="fname">Email:</label>
                            <input type="email" name="email" required="required" class="form-control" placeholder="Enter Email address" v-model="newItem.email">
                            <button class="btn btn-primary" @click="createItem" >Submit</button>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
