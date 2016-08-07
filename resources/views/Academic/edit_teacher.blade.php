@extends('../layout.master')
@section('title','Edit Teacher')
@section('styles')

    <link href="{{URL::asset('assets/plugins/select2/select2_metro.css')}}" rel="stylesheet" type="text/css"/>
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

            Edit Teaacher
        </h3>

        <ul class="page-breadcrumb breadcrumb">



            <li>
                <i class="fa fa-home"></i>
                <a href="/">Home</a>
                <i class="fa fa-angle-right"></i>

            </li>


            <li>
                <a href="{{route('teachers')}}">Teachers</a>
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
                        <i class="fa fa-reorder"></i>Edit Teacher
                    </div>

                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="#" method="post" id="edit_teacher" class="form-horizontal">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                You have some form errors. Please check below.
                            </div>


                            <br/>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="control-label col-md-3">Name</label>
                                <div class="col-md-4">
                                    <input value="{{$teacher->name}}" type="text" class="form-control" minlength="1" maxlength="25"
                                           name="name"
                                           id="maxlength_defaultconfig">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">CNIC</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control"
                                           value="{{$teacher->cnic}}"
                                           name="cnic"
                                           id="maxlength_defaultconfig">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Phone</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control"
                                           value="{{$teacher->phone}}"
                                           name="phone"
                                           id="maxlength_defaultconfig">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3"> Designation</label>
                                <div class="col-md-4">
                                    <select name="designation" class="form-control select2me"
                                            data-placeholder="Select...">

                                        <option value="Teacher">Teacher</option>

                                    </select>

                                </div>
                            </div>

                        </div>

                        <meta name="csrf-token" content="{{ csrf_token() }}"/>

                        <div class="form-actions fluid">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
                                <a href="{{route('teachers')}}" class="btn purple"><i class="fa fa-times"></i> Cancel</a>
                            </div>
                        </div>


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
