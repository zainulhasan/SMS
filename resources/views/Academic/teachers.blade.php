@extends('../layout.master')
@section('title','Session')




@section('styles')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/select2/select2_metro.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/data-tables/DT_bootstrap.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/bootstrap-modal/css/bootstrap-modal.css')}}"/>


@stop



@section("top-option")


    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">

            Teacher
        </h3>

        <ul class="page-breadcrumb breadcrumb">



            <li class="btn-group">

                <a  style="color:#fff;" href="{{route('createTeachers')}}" class="btn purple" >
                    <i class="fa fa-plus"></i> Add Teacher
                </a>
            </li>
            <li>
                <i class="fa fa-home"></i>
                <a href="/">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>


            <li>
                <a href="#">Teachers</a>
            </li>
        </ul>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>





@stop







@section('content')

    <div class="row">
        <div class="col-md-12">


            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Classes
                    </div>

                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
                        <thead>
                        <tr>
                            <th class="col-md-1 text-center">
                               Sr.No
                            </th>
                            <th  class="col-md-1 text-center">
                                Name
                            </th>

                            <th  class="col-md-1 text-center">
                               Cnic

                            </th>


                            <th  class="col-md-1 text-center">
                               Phone

                            </th>
                            <th  class="col-md-1 text-center">
                                Designation

                            </th>

                            <th  class="col-md-1 text-center">
                                Action

                            </th>


                        </tr>
                        </thead>
                        <tbody>


                        @foreach($teachers as $teacher)
                            <tr>
                                <td class="text-center">
                                    {{$teacher->id}}
                                </td>
                                <td class="">
                                    {{$teacher->name}}
                                </td>
                                <td class="text-center">
                                    {{$teacher->cnic}}
                                </td>
                                <td class="text-center">
                                    {{$teacher->phone}}
                                </td>
                                <td class="text-center">
                                    {{$teacher->designation}}
                                </td>

                                <td class="text-center">


                                    <a href="{{route('teachers')}}" class="btn btn-xs purple"><i class="fa fa-edit"></i> Details </a>
                                    <a href="#" class="btn btn-xs green"><i class="fa fa-edit"></i> Edit </a>
                                    <button  type="button" class="btn btn-xs red" data-target="#static" data-toggle="modal"><i class="fa fa-times"></i>Delete</button>
                                </td>

                            </tr>

                            <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                <div class="modal-body">
                                    <p>
                                        Are you Sure?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn purple"><i class="fa fa-times"></i> Cancel</button>
                                    <button type="button" onclick="delete_teacher({{$teacher->id}})" class="btn purple"><i class="fa fa-check"></i> Conform</button>
                                    <input id="{{$teacher->id}}" type="hidden" value="{{route('deleteTeachers',['teacher_id'=>$teacher->id])}}">
                                </div>
                            </div>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
@stop

@section('scripts')

    <!--Session.blage.php-->
    <script src="{{URL::asset('assets/plugins/select2/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/data-tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/app.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/table-advanced.js')}}"></script>


    <script src="{{URL::asset('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-modal/js/bootstrap-modal.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/ui-extended-modals.js')}}"></script>




    <script>
        jQuery(document).ready(function() {
            App.init();
            TableAdvanced.init();
            UIBootbox.init();
            UIExtendedModals.init();
        });


        function delete_teacher(id) {

            window.location.href=$('#'+id).val();

        }
    </script>

@stop
