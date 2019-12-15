@extends('layouts.web_app')


<!--  the title -->
@section('title')
FRASystem
@endsection
<!-- the header -->
@section('head__tag')
<style>


</style>
@endsection
<!-- slider image -->
@section('header_image')
{{url('/image/home.jpg')}}
@endsection
<!-- slider title -->
@section('silder_title')
FRASystem
@endsection

<!-- slider description -->
@section('silder_description')
This is our Face Recognition Attendance System.
@endsection

<!-- the content -->
@section('content')
<h1 class="mb-5">Hello, People!!</h1>
<div class="row">
    @foreach($courses as $course)
    
    <div class="col-md-4">

        <div class="card p-4 my-4">
            <div class="card-body">
                <h5 class="card-title">{{$course->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{$course->department->name}}</h6>

                <p class="card-text">{{$course->description}} And This course is for Studied At Level
                    {{$course->level}}</p>
                <!-- <a href="route('Main.Index',['id'=>$course->id])" class="btn btn-primary">Go Now</a> -->

            </div>

        </div>
    </div>
    @endforeach
</div>

@endsection

<!-- footer -->
@section('footer')

@endsection
