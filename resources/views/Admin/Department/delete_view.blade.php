@extends('layouts.admin_app')
<!-- the title of the page -->
@section('title')
Delete Department
@endsection

<!-- the content -->
@section('content')
<form class="table-bordered" style="padding:20px" method="post" action="">
    {{ csrf_field() }}
    <div class="col-lg-4">
        <div class="panel panel-red">
            <div class="panel-heading">
                Delete Department
            </div>
            <div class="panel-body">
                <label>Are you sure you want to delete <span
                        style="color:#761c19;font-weight:bolder">{{$department->name}}</span> ?!</label>


            </div>
            <div class="panel-footer">
                <input type="submit" value="Delete It" class="btn btn-danger">
            </div>
        </div>
    </div>

</form>

@endsection
