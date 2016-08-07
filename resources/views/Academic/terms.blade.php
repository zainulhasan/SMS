@extends('../layout.master')
@section('title','Terms')




@section('styles')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/select2/select2_metro.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/data-tables/DT_bootstrap.css')}}"/>


    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('assets/plugins/bootstrap-modal/css/bootstrap-modal.css')}}"/>


@stop

@section("top-option")


    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Terms
        </h3>

        <ul class="page-breadcrumb breadcrumb">


            <li class="btn-group">

                <a style="color:#fff;"
                   href="{{route('createTerms',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id])}}"
                   class="btn purple">
                    <i class="fa fa-plus"></i> Add Term
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
                <a href="{{route('classes',['id'=>$id])}}">Classes</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="{{route('subjects',['id'=>$id,'class_id'=>$class_id])}}">Subjects</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Terms</a>
            </li>
        </ul>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>





@stop






@section('content')



    <div id="message_box"></div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Session ({{date('M-y',strtotime($session->startingDate))}}
                        -{{date('M-y',strtotime($session->endingDate))}}) - Class
                        {{$classes->name}}{{$classes->section}} - {{$subject->title}}
                    </div>

                    <div class="actions">
                        <a style="color:#fff;"
                           href="{{route('subjects',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id])}}"
                           class="btn purple">
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
                            <th class="col-md-1 text-center">
                                Term
                            </th>


                            <th class="col-md-1 text-center">
                                Status

                            </th>

                            <th class="col-md-1 text-center">
                                Action

                            </th>


                        </tr>
                        </thead>
                        <tbody>


                        @foreach($terms as $index => $term)

                            <tr id="row{{$term->id}}">
                                <td class="text-center">
                                    {{++$index}}
                                </td>
                                <td class="text-center">

                                    {{date('F-Y',strtotime($term->startingDate))}}
                                    - {{date('F-Y',strtotime($term->endingDate))}}
                                </td>


                                <td class="text-center">

                                    {{$term->termStatus==0?'Incomplete':'Complete'}}
                                </td>

                                <td class="text-center">


                                    <a href="{{route('chapters',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id,'term_id'=>$term->id])}}"
                                       class="btn btn-xs purple"><i class="fa fa-edit"></i> Details </a>


                                    <a href="{{route('editTerms',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id,'term_id'=>$term->id])}}"
                                       class="btn btn-xs green"><i class="fa fa-edit"></i> Edit </a>


                                    <button type="button" data-toggle="modal" data-target="#static"
                                            class="btn btn-xs red"><i class="fa fa-edit"></i> Delete
                                    </button>
                                </td>

                            </tr>

                            <div id="static" class="modal fade" tabindex="-1" data-backdrop="static"
                                 data-keyboard="false">
                                <div class="modal-body">
                                    <p>
                                        Are you Sure?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn purple"><i
                                                class="fa fa-times"></i> Cancel
                                    </button>
                                    <button type="button" data-dismiss="modal" onclick="delete_term({{$term->id}})"
                                            class="btn purple"><i class="fa fa-check"></i> Conform
                                    </button>


                                </div>
                            </div>
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
