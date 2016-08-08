@extends('../layout.master')
@section('title','Edit Chapter')
@section('styles')

    <link href="{{URL::asset('assets/plugins/select2/select2_metro.css')}}" rel="stylesheet" type="text/css"
          xmlns="http://www.w3.org/1999/html"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <link href="{{URL::asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{URL::asset('assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-timepicker/compiled/timepicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-colorpicker/css/colorpicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{URL::asset('assets/plugins/jquery-multi-select/css/multi-select.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css')}}"
          rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/jquery-tags-input/jquery.tagsinput.css')}}" rel="stylesheet"
          type="text/css"/>


@stop

@section("top-option")

    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Edit Chapter
        </h3>

        <ul class="page-breadcrumb breadcrumb">


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
                <a href="{{route('terms',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id])}}">Terms</a>
                <i class="fa fa-angle-right"></i>
            </li>


            <li>
                <a href="{{route('chapters',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id,'term_id'=>$term_id])}}">Chapters</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li>
                <a href="#">Edit</a>
            </li>
        </ul>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>





@stop



@section('content')
    <div id="message_box"></div>
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i>Edit Chapter
                    </div>

                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="#" method="post" id="edit_chapter"
                          class="form-horizontal">
                        <div id="fBody" class="form-body">
                            <div class="alertalert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                You have some form errors. Please check below.
                            </div>


                            <br/>

                            <div id="box">
                                <div class="row">

                                    <div class="dup">

                                        <div class="col-md-2">
                                            <div class="input-group">
                                            </div>
                                        </div>


                                        <div class="col-md-1">
                                            <div class="input-group">
                                                <label class="control-label">Chapter</label>
                                            </div>
                                        </div>

                                        <div class="col-md-1">
                                            <div class="input-group">
                                                <input type="text" value="{{$chapter->chapter}}" name="chapter" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">From</span>
                                                <input type="text" value="{{$chapter->formPage}}" class="form-control" name="fromPage">
                                                <span class="input-group-addon">to</span>
                                                <input type="text"  value="{{$chapter->toPage}}" class="form-control" name="toPage">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-1">
                                        <div class="input-group">

                                            <button type="button" id="add_btn" class="btn purple"><i
                                                        class="fa fa-plus"></i> Add
                                            </button>
                                        </div>
                                    </div>


                                </div>
                            </div>


                        </div>


                        <div class="form-actions fluid">
                            <div class="col-md-offset-3 col-md-9">
                                <button id="submit_btn" type="submit" class="btn purple"><i class="fa fa-check"></i>
                                    Submit
                                </button>
                                <a id="link"
                                   href="{{route('chapters',['id'=>$id,'class_id'=>$class_id,'sub_id'=>$sub_id,'term_id'=>$term_id])}}"
                                   class="btn purple"><i class="fa fa-times"></i> Cancel</a>
                            </div>
                        </div>

                        <input type="hidden" name="subject_id" value="{{$sub_id}}">
                        <input type="hidden" name="session_id" value="{{$id}}">
                        <input type="hidden" name="class_id" value="{{$class_id}}">
                        <input id="term_id" type="hidden" name="term_id" value="{{$term_id}}">
                        <input type="hidden" name="chapter_id" value="{{$chapter->id}}">

                        <meta name="csrf-token" content="{{ csrf_token() }}"/>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
@stop

@section('scripts')


    <script src="{{URL::asset('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/select2/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>


    <script src="{{URL::asset('assets/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-markdown/lib/markdown.js')}}"></script>










    <!--Session.blage.php-->
    <script src="{{URL::asset('assets/plugins/select2/select2.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/data-tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/app.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/form-components.js')}}"></script>
    <script src="{{URL::asset('assets/scripts/form-validation.js')}}"></script>

    <script src="{{URL::asset('assets/scripts/table-advanced.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fuelux/js/spinner.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/clockface/js/clockface.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.input-ip-address-control-1.0.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-multi-select/js/jquery.quicksearch.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js')}}"></script>

    <script src="{{URL::asset('assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>

    <script src="{{URL::asset('assets/plugins/bootstrap-markdown/lib/markdown.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js')}}"></script>



    <script>
        jQuery(document).ready(function () {
            // initiate layout and plugins
            App.init();
            TableAdvanced.init();
            FormValidation.init();
            FormComponents.init();
        });





    </script>





@stop
