  @extends('layouts.admin')
  @section('content') 
                    <div class="col-md-12 main">
        <div class="content-top-1">
            
    <div id="mytoolbar"></div>
    <div class="mTop10">
    <form method="POST" action="/admin/{{$serv->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <br>
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" value="{{$serv->title}}"  >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
    <textarea name="description" id="editor" style="visibility:visible" placeholder="{{$serv->description}}">{{$serv->description}}</textarea>  
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" value="{{$serv->image}}" >
    </div>
    <b>Add to Menu</b>
          <select name="menu" class="form-control">
                
                @foreach($cate as $item)
               
                    <option value="{{$item->title}}">{{ $item->title }}</option>
                   
                    @endforeach
               
            </select>

   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>  
</form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>
@endsection