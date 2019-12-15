@extends('layouts.admin_app')
<!-- the title section  -->
@section('title')
Edit Week's Students
@endsection
<!-- the content section -->
@section('content')
<div class="col-lg-12">
        <a class="btn btn-link" style="font-size:16px;" href="{{route('StudentWeek.Add')}}"><span class="fa fa-users fa-fw"></span>Add Students To Weeks(Take Attendance)</a>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Week's Students
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table width="100%"
                            class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline collapsed"
                            id="dataTables-example" role="grid" aria-describedby="dataTables-example_info"
                            style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                        colspan="1" aria-label="Week: activate to sort column descending"
                                        style="width: 71px;" aria-sort="ascending">Week</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                        colspan="1" aria-label="Student: activate to sort column ascending"
                                        style="width: 90px;">Student</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                        colspan="1" aria-label="Attendance: activate to sort column ascending"
                                        style="width: 90px;">Attendance</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                        colspan="1" aria-label="Action: activate to sort column ascending"
                                        style="width: 90px;">Action</th>
                                        
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($studentWeeks as $studentWeek)

                                <tr class="gradeA odd" role="row">
                                    
                                    <td class="sorting_1">{{App\Model\Week::find($studentWeek->week_id)->name}}</td>
                                    <td>{{App\Model\Student::find($studentWeek->student_id)->name}}</td>
                                    <td>
                                        @if($studentWeek->Attended)
                                        Yes
                                        @else
                                        No
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-outline btn-danger  btn-md" style="margin-bottom:5px;" href="{{route('StudentWeek.Delete',['student_id'=>$studentWeek->student_id,'week_id'=>$studentWeek->week_id])}}">Delete</a>
                                    </td>
            
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>


@endsection
