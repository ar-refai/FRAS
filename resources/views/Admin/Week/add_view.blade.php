@extends('layouts.admin_app')
<!-- the title of the page -->
@section('title')
Add Week
@endsection

<!-- this is the content of the page -->
@section('content')
<form class="table-bordered" style="padding:20px" method="post" action="" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Week
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="WeekName">Week Name</label>
                    <input type="text" name="name" class="form-control" id="WeekName"
                        placeholder="Example:Week 10">
                </div>
            <div class="panel-footer">
                <input type="submit" value="Save It" class="btn btn-primary">
            </div>
        </div>
    </div>

</form>

@endsection
