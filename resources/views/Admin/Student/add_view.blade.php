@extends('layouts.admin_app')
<!-- the title of the page -->
@section('title')
Add Student
@endsection

<!-- this is the content of the page -->
@section('content')
<form class="table-bordered" style="padding:20px" method="post" action="" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Student
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="StudentName">Student Name</label>
                    <input type="text" name="name" class="form-control" id="StudentName"
                        placeholder="Example:Ahmed Mohamed Sayed">
                </div>

                <div class="form-group">
                    <label for="StudentPhone">Student Phone</label>
                    <input type="text" name="phone" class="form-control" id="StudentPhone"
                        placeholder="Example:010----------">
                </div>

                <div class="form-group">
                    <label for="StudentAge">Student Age</label>
                    <input type="text" name="age" class="form-control" id="StudentAge" placeholder="Example:22">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="exampleRadios1"
                        value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Male
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="exampleRadios2"
                        value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Female
                    </label>
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
                <!-- student image -->
                <div class="form-group">
                  <label>Image Input:</label>
                  <input name="photo" type="file" value="Upload" >
                </div>
            </div>
            <div class="panel-footer">
                <input type="submit" value="Save It" class="btn btn-primary">
            </div>
        </div>
    </div>

</form>

@endsection
