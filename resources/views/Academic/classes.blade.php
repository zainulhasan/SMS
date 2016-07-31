@extends('../layout.master')
@section('title','Session')




@section('styles')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/select2/select2_metro.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/data-tables/DT_bootstrap.css')}}"/>


@stop


@section("top-option")


    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Advanced Datatables
            <small>advanced datatables</small>
        </h3>

        <ul class="page-breadcrumb breadcrumb">



            <li class="btn-group">

                <a style="color:#fff;" href="{{route('createClass',$id)}}" class="btn blue">
                    <i class="fa fa-plus"></i> Add Class
                </a>
            </li>


            <li>
                <i class="fa fa-home"></i>
                <a href="/">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('sessions')}}">Sessions</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Classes</a>
            </li>
        </ul>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>





@stop







@section('content')

    <div class="row">
        <div class="col-md-12">


            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box blue">
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
                            <th class="col-md-1 text-center">
                                Name
                            </th>

                            <th class="col-md-1 text-center">
                                Section

                            </th>


                            <th class="col-md-1 text-center">
                                Capacity

                            </th>
                            <th class="col-md-1 text-center">
                                Teacher

                            </th>
                            <th class="col-md-1 text-center">
                                Session

                            </th>
                            <th class="col-md-1 text-center">
                                Action

                            </th>


                        </tr>
                        </thead>
                        <tbody>


                        @foreach($classes as $class)
                            <tr>
                                <td class="text-center">
                                    {{$class->id}}
                                </td>
                                <td class="text-center">
                                    {{$class->name}}
                                </td>
                                <td class="text-center">
                                    {{$class->section}}
                                </td>
                                <td class="text-center">
                                    {{$class->capacity}}
                                </td>
                                <td class="text-center">
                                    {{$class->teacher->name}}
                                </td>
                                <td class="text-center">
                                    {{$class->session->id}}
                                </td>
                                <td class="text-center">


                                    <a href="{{route('subjects',['id'=>$id,'class_id'=>$class->id])}}"
                                       class="btn btn-xs "><i class="fa fa-edit"></i> Details </a>
                                    <a href="#" class="btn btn-xs "><i class="fa fa-edit"></i> Edit </a>
                                    <a href="{{route('classDelete',['id'=>$id,'class_id'=>$class->id])}}"
                                       class="btn btn-xs "><i class="fa fa-edit"></i> Delete </a>
                                </td>

                            </tr>
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



    <script>
        jQuery(document).ready(function () {
            App.init();
            TableAdvanced.init();
        });
    </script>

@stop
