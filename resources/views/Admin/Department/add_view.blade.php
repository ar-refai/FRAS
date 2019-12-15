@extends('layouts.admin_app')
<!-- the title of the page -->
@section('title')
Add Department
@endsection

<!-- this is the content of the page -->
@section('content')
<form class="table-bordered" style="padding:20px" method="post" action="" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Department
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="DepartmentName">Department Name</label>
                    <input type="text" name="name" class="form-control" id="DepartmentName"
                        placeholder="Example:Ahmed Mohamed Sayed">
                </div>

                <div class="form-group">
                    <label>Department Description</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>

            <div class="panel-footer">
                <input type="submit" value="Save It" class="btn btn-primary">
            </div>
        </div>
    </div>

</form>

@endsection
