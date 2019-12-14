@extends('layouts.admin_app')
<!-- the title of the page -->
@section('title')
Update Course
    @endsection

<!-- this is the content of the page -->
@section('content')
<form class="table-bordered" style="padding:20px" method="post" action="">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="CourseName">Course Name</label>
    <input type="text" name="name" value="{{$course->name}}" class="form-control" id="CourseName" placeholder="Example:Software Engineering">
  </div>

  <div class="form-group">
    <label for="CourseDescription">Course Description</label>
    <textarea class="form-control" name="description"  id="CourseDescription" rows="3">{{$course->description}}</textarea>
  </div>

  <div class="form-group">
    <label for="CourseLevel">Level</label>
    <select name="level" class="form-control" id="CourseLevel">
    @if ($course->level == 1) {
      <option selected value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    }
    @elseif($course->level == 2) {
      <option value="1">1</option>
      <option selected value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    }
    @elseif($course->level == 3) {
      <option value="1">1</option>
      <option value="2">2</option>
      <option selected value="3">3</option>
      <option value="4">4</option>
    }
    @elseif($course->level == 4) {
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option selected value="4">4</option>
    }
    @endif

    </select>
  </div>


 <!-- showing all departments -->
  <div class="form-group">
    <label for="CourseDepartment">Department</label>
    <select name="department" class="form-control" id="CourseDepartment">
      @foreach($departments as $dept)
          <option value="{{$dept->id}}">{{$dept->name}}</option>
      @endforeach
    </select>
  </div>
  <input type="submit" value="Save It" class="btn btn-primary">
</form>

    @endsection