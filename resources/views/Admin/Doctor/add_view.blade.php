@extends('layouts.admin_app')
<!-- the title of the page -->
@section('title')
Add Doctor
@endsection

<!-- this is the content of the page -->
@section('content')
<form class="table-bordered" style="padding:20px" method="post" action="" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Doctor
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="DoctorName">Doctor Name</label>
                    <input type="text" name="name" class="form-control" id="DoctorName"
                        placeholder="Example:Ahmed Mohamed Sayed">
                </div>

                <div class="form-group">
                    <label for="DoctorEmail">Doctor Email</label>
                    <input type="email" name="email" class="form-control" id="DoctorEmail"
                        placeholder="Example:drAhmed22@example.com">
                </div>

                <div class="form-group">
                    <label for="DoctorPhone">Doctor Phone</label>
                    <input type="text" name="phone" class="form-control" id="DoctorPhone"
                        placeholder="Example:010----------">
                </div>

                <div class="form-group">
                    <label for="DoctorPassword">Doctor Password</label>
                    <input type="password" name="password" class="form-control" id="DoctorPassword"
                        placeholder="Example:*********">
                </div>

                <div class="form-group">
                    <label for="DoctorAge">Doctor Age</label>
                    <input type="text" name="age" class="form-control" id="DoctorAge" placeholder="Example:22">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="exampleRadios1"
                        value="Male" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Male
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="exampleRadios2"
                        value="Female">
                    <label class="form-check-label" for="exampleRadios2">
                        Female
                    </label>
                </div>



                <!-- showing all departments -->
                <div class="form-group">
                    <label for="DoctorDepartment">Department</label>
                    <select name="department" class="form-control" id="DoctorDepartment">
                        @foreach($departments as $dept)
                        <option value="{{$dept->id}}">{{$dept->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- doctor image -->
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
