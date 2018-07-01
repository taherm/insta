@extends('layouts.admin')
@section('content')
<div class="col-md-12 main">
        <div class="content-top-1">
            
    <div class="mTop10">
    <form method="POST" action="/admin/del-slider" class="delete">
       {{ csrf_field() }}
       <input name="_method" value="delete" type="hidden">
      
   
      <b>Slider Image</b>
             <select name="image" class="form-control">
                   
                   @foreach($slide as $item)
                  
                       <option value="{{$item->image}}">{{ $item->image }}</option>
                      
                       @endforeach
                  
               </select>
   
       <div>
       <button type="submit" class="btn btn-danger">Delete</button>
      </div>  
   </form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>


                @endsection