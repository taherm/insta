@extends('layouts.admin') @section('content')
<div class="col-md-12 main">
    <div class="content-top-1">
        <div>
            <div class="col-md-2 col-xs-6 pull-right">

                <b> {{$username}}</b>
                <a class="nav-link text-success btn btn-outline-success" href="/logout-user" onclick="event.preventDefault();                                                 document.getElementById('logout').submit();">
                    Logout
                </a>

                <form id="logout" action="/logout-user" method="POST" style="display: one;">
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="col-md-10 col-xs-6">
                <h1>All Posts</h1>
            </div>
        </div>
        <div class="space"></div>
<hr>
        <div class="panel-body">



            <div class="row">
                @foreach($imagesArray as $image)
                <div class="col-md-3">

                    <img class="img-thumbnail img-responsive" src="{{asset($image[0])}}" />




                    <form method="POST" action="/add-post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$image[0]}}" name="image" />
                        <input type="hidden" value="{{$image[1]}}" name="link" />
                        <b>Add to Menu</b>
                        <select name="submenu" class="form-control">
                            @foreach($cate as $item)
                            <option value="{{$item->title}}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>




                @endforeach
                <br>
            </div>





            <div class="text-center"></div>

            <div class="modal fade" id="deleteModalBox">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">Delete Article </h4>
                        </div>
                        <div class="modal-body">
                            <div class="inner-xs text-center">
                                Are you sure? ?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="http://drwejdan.ideasowners.net" accept-charset="UTF-8" id="deleteModal">
                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden" value="wwUlpaCjm0IjHulPEi1xt0mhfH0FfrZVpCedRa9z">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Yes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

<div class="clearfix"> </div>

@endsection