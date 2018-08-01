@extends('layouts.admin')
@section('content')
<div class="col-md-12 main">
        <div class="content-top-1">
            
    <div class="mTop10">
        <form method="POST" action="/admin/user-account">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
           
                
                <!-- The file input field used as target for the file upload widget -->
                <input id="text" type="text" name="account" class="cover form-control">
           </div>

        
        <div class="form-group">
            <input class="btn btn-primary form-control" type="submit" value="Enter">
        </div>

        </form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>

@include('layouts.errors')
                @endsection