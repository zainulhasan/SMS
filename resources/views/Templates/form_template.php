@extends('../layout.master')
@section('title','Add Session')
@section('styles')

    <link href="{{URL::asset('assets/plugins/select2/select2_metro.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{URL::asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-timepicker/compiled/timepicker.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-colorpicker/css/colorpicker.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/jquery-multi-select/css/multi-select.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/plugins/jquery-tags-input/jquery.tagsinput.css')}}" rel="stylesheet" type="text/css"/>










@stop

@section('content')


    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i>Basic Validation
                    </div>

                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="#" id="form_sample_1" class="form-horizontal">
                        <div class="form-body">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                You have some form errors. Please check below.
                            </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button>
                                Your form validation is successful!
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Date Range</label>
                                <div class="col-md-4">
                                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                        <input type="text" class="form-control" name="from">
                                        <span class="input-group-addon">
													to
												</span>
                                        <input type="text" class="form-control" name="to">
                                    </div>
                                    <!-- /input-group -->
                                    <span class="help-block">
												Select date range
											</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Name
                                    <span class="required">
											*
										</span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="name" data-required="1" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email
                                    <span class="required">
											*
										</span>
                                </label>
                                <div class="col-md-4">
                                    <input name="email" type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">URL
                                    <span class="required">
											*
										</span>
                                </label>
                                <div class="col-md-4">
                                    <input name="url" type="text" class="form-control"/>
                                    <span class="help-block">
												e.g: http://www.demo.com or http://demo.com
											</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Number
                                    <span class="required">
											*
										</span>
                                </label>
                                <div class="col-md-4">
                                    <input name="number" type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Digits
                                    <span class="required">
											*
										</span>
                                </label>
                                <div class="col-md-4">
                                    <input name="digits" type="text" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Credit Card
                                    <span class="required">
											*
										</span>
                                </label>
                                <div class="col-md-4">
                                    <input name="creditcard" type="text" class="form-control"/>
                                    <span class="help-block">
												e.g: 5500 0000 0000 0004
											</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Occupation&nbsp;&nbsp;</label>
                                <div class="col-md-4">
                                    <input name="occupation" type="text" class="form-control"/>
                                    <span class="help-block">
												optional field
											</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Category
                                    <span class="required">
											*
										</span>
                                </label>
                                <div class="col-md-4">
                                    <select class="form-control" name="category" class="select2me">
                                        <option value="">Select...</option>
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 5</option>
                                        <option value="Category 4">Category 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions fluid">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
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
            <script src="{{URL::asset('assets/plugins/select2/select2.min.js')}}"></script>
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
                jQuery(document).ready(function() {
                    // initiate layout and plugins
                    App.init();
                    TableAdvanced.init();
                    FormValidation.init();
                    FormComponents.init();
                });
            </script>





@stop
