@extends('layouts.admin_app')
<!-- the title of the page -->
@section('title')
Add Course
    @endsection

<!-- this is the content of the page -->
@section('content')
<form class="table-bordered" style="padding:20px" method="post" action="">
    {{ csrf_field() }}
    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Add Course
                        </div>
                        <div class="panel-body">
                        <div class="form-group">
    <label for="CourseName">Course Name</label>
    <input type="text" name="name" class="form-control" id="CourseName" placeholder="Example:Software Engineering">
  </div>

  <div class="form-group">
    <label for="CourseDescription">Course Description</label>
    <textarea class="form-control" name="description" id="CourseDescription" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="CourseLevel">Level</label>
    <select name="level" class="form-control" id="CourseLevel">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>

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
  </div>                        </div>
                        <div class="panel-footer">
                        <input type="submit" value="Save It" class="btn btn-primary">
                        </div>
                    </div>
                </div>

</form>

    @endsection