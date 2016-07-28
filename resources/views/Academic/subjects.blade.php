@extends('../layout.master')
@section('title','Session')




@section('styles')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/select2/select2_metro.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/data-tables/DT_bootstrap.css')}}"/>


@stop



@section("top-option")

    <li class="btn-group">

        <a  style="color:#fff;" href="{{route('createSubject',['id'=>$id,'class_id'=>$class_id])}}" class="btn blue" >
           <i class="fa fa-plus"></i> Add Subjects
        </a>
    </li>

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
                                #
                            </th>
                            <th  class="col-md-1 text-center">
                                Title
                            </th>

                            <th  class="col-md-1 text-center">
                                Class

                            </th>


                            <th  class="col-md-1 text-center">
                                Teacher

                            </th>

                            <th  class="col-md-1 text-center">
                                Action

                            </th>


                        </tr>
                        </thead>
                        <tbody>


                        @foreach($subjects as $subject)

                            <tr>
                                <td class="text-center">
                                    {{$subject->id}}
                                </td>
                                <td>

                                    {{$subject->title}}
                                </td>
                                <td class="text-center">

                                    {{$subject->classes->name}}{{$subject->classes->section}}
                                </td>
                                <td class="text-center">

                                    {{$subject->teacher->name}}
                                </td>

                                <td class="text-center">


                                    <a href="#" class="btn btn-xs "><i class="fa fa-edit"></i> Details </a>
                                    <a href="#" class="btn btn-xs "><i class="fa fa-edit"></i> Edit </a>
                                    <a href="#" class="btn btn-xs "><i class="fa fa-edit"></i> Delete </a>
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
        jQuery(document).ready(function() {
            App.init();
            TableAdvanced.init();
        });
    </script>

@stop