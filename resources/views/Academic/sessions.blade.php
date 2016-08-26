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
            Sessions
        </h3>

        <ul class="page-breadcrumb breadcrumb">
            <li class="btn-group">

                <a style="color:#fff;" href="{{route("createSession")}}" class="btn purple">
                    <i class="fa fa-plus"></i> Add Session
                </a>


            </li>
            <li>
                <i class="fa fa-home"></i>
                <a href="/">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('sessions')}}">Sessions</a>

            </li>

        </ul>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>





@stop





@section('content')

    <div class="message_box"></div>
    <div class="row">
        <div class="col-md-12">


            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">

                    <div class="caption">
                        <i class="fa fa-globe"></i>Sessions
                    </div>



                    <div class="actions">
                        <a style="color:#fff;" href="/" class="btn purple">
                            <i class="fa  fa-arrow-left"></i> Back
                        </a>
                    </div>




                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-full-width table-borderless"
                           id="sample_2">
                        <thead>
                        <tr>
                            <th class="col-md-1 text-center">
                                Sr.No
                            </th>
                            <th class="col-md-6 text-center">
                                Session
                            </th>
                            <th class="col-md-3 text-center">
                                Actions
                            </th>

                        </tr>
                        </thead>
                        <tbody>


                        @foreach($sessions as $index =>  $session)
                            <tr id="row{{$session->id}}">
                                <td class="text-center">
                                    {{++$index}}
                                </td>
                                <td class="text-center">
                                    <span>{{date('F-Y',strtotime($session->startingDate))}}
                                        - {{date('F-Y',strtotime($session->endingDate))}}</span>
                                </td>
                                <td class="text-center">


                                    <a href="{{route('classes',['id'=>$session->id])}}" class="btn btn-xs green"><i
                                                class="fa fa-edit"></i> Details </a>


                                    <a href="{{route('getEditSession',['id'=>$session->id])}}" class="btn btn-xs purple"><i
                                                class="fa fa-edit"></i> Edit </a>


                                    <button  type="button" class="btn btn-xs red" onclick="delete_session({{$session->id}})"    ><i class="fa fa-times"></i>Delete</button>



                                </td>

                            </tr>

                            <meta name="csrf-token" content="{{ csrf_token() }}"/>
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
        <script src="{{URL::asset('assets/plugins/bootbox/bootbox.min.js')}}"></script>
        <script src="{{URL::asset('assets/scripts/ui-bootbox.js')}}"></script>

        <script src="{{URL::asset('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/bootstrap-modal/js/bootstrap-modal.js')}}"></script>
        <script src="{{URL::asset('assets/scripts/ui-extended-modals.js')}}"></script>





        <script>
            jQuery(document).ready(function () {
                App.init();
                TableAdvanced.init();
                UIBootbox.init();
                UIExtendedModals.init();

            });




        </script>

@stop
