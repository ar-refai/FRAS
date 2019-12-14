@extends('layouts.admin_app')
<!-- the title section  -->
@section('title')
Display Images
@endsection
<!-- the content section -->
@section('content')
<div class="col-lg-12">
    <a class="btn btn-link" style="font-size:16px;" href="{{route('Image.Add')}}"><span class="fa fa-photo fa-fw"></span>Add Image</a>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Images
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            @foreach($photos as $photo)
            <div class="col-xs-6 col-md-3">
                <a href="{{route('Image.Delete',['id'=>$photo->id])}}" class="thumbnail">
                    <img src="{{url('/image/'.$photo->path)}}" style="width:100px;height:100px;" alt="...">
                </a>
            </div>

            @endforeach

        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>


@endsection
