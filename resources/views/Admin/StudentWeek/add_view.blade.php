@extends('layouts.admin_app')
<!-- the title of the page -->
@section('title')
Add Students To Weeks
@endsection

<!-- this is the content of the page -->
@section('content')
<form class="table-bordered" style="padding:20px" method="post" action="">
    {{ csrf_field() }}
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Student To Course
            </div>
            <div class="panel-body">

               <!-- showing all courses -->
               <div class="form-group">
                    <label for="WeekName">WeekName</label>
                    <select name="week_id" class="form-control" id="WeekName">
                        @foreach($weeks as $week)
                        <option value="{{$week->id}}">{{$week->name}}</option>
                        @endforeach
                    </select>
                </div>

                  <!-- showing all students -->
                  <div class="form-group">
                    <label for="StudentName">StudentName</label>
                    <select name="student_id" class="form-control" id="StudentName">
                        @foreach($students as $student)
                        <option value="{{$student->id}}">{{$student->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="attendance" id="exampleRadios1"
                        value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       Attended
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="attendance" id="exampleRadios2"
                        value="0">
                    <label class="form-check-label" for="exampleRadios2">
                       Absent
                    </label>
                </div>

            </div>
            <div class="panel-footer">
                <input type="submit" value="Save It" class="btn btn-primary">
            </div>
        </div>
    </div>

</form>

@endsection
