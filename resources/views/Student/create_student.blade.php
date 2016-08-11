@extends('../layout.master')
@section('title',' Add Students')


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
            Create Student
        </h3>

        <ul class="page-breadcrumb breadcrumb">





            <li>
                <i class="fa fa-home"></i>
                <a href="/">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>

            <li>
                <a href="#">Student</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Create</a>
            </li>
        </ul>

        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>





@stop






@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="tabbable tabbable-custom boxless">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        Add Student
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form class="form-horizontal" id="register_form" enctype="multipart/form-data"
                          method="post">
                        <meta name="csrf-token" content="{{ csrf_token() }}"/>

                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">

                                        <div class="col-md-12">
                                            <img id="output"
                                                 style="height: 160px;width: 160px;float: right; margin-right: 40px;"/>
                                            <script>
                                                var loadFile = function (event) {
                                                    var output = document.getElementById('output');
                                                    output.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                            </script>
                                            <div class="col-md-12">
                                                <input type="file" style="float: right;margin-right: -68px;
    margin-top: 10px;" name="image" accept="image/*" onchange="loadFile(event)">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>






                            <!-- first Section-->
                            <h3 class="form-section"><b>Personal Information</b></h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">First Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="first_name" class="form-control" name="first_name">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Last Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="last_name" class="form-control" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Gender</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="gender">
                                                <option value="">-Select-</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input type="date" id="empbirth" class="form-control"
                                                   placeholder="dd/mm/yyyy" name="dob">
                                        </div>
                                    </div>
                                </div>

                                <!--/span-->
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nationality</label>
                                        <div class="col-md-9">
                                            <input  type="text"  class="form-control" name="nationality">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Language</label>
                                        <div class="col-md-9">
                                            <input  type="text"  class="form-control" name="nationality">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Religion</label>
                                        <div class="col-md-9">
                                            <input name="religion" class="form-control"  type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CNIC </label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="cnic1" id="cnic11"
                                                   maxlength="5"/>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="cnic2" id="cnic22"
                                                   maxlength="7" />
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="cnic3" id="cnic33"
                                                   maxlength="1"/>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CNIC Copy</label>
                                        <div class="col-md-9">
                                            <input name="cniccopy" class="form-control" id="cniccopy" type="file"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Passport</label>
                                        <div class="col-md-9">
                                            <input type="text" id="passport" class="form-control" name="passport">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Passport Copy</label>
                                        <div class="col-md-9">
                                            <input name="passportcopy" class="form-control" type="file"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->

                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Contact No.1</label>
                                        <div class="col-md-9">
                                            <input name="mobNo1" class="form-control" id="mobNo1" type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Contact No.2</label>
                                        <div class="col-md-9">
                                            <input type="text" id="mobNo2" class="form-control" name="mobNo2">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Landline No</label>
                                        <div class="col-md-9">
                                            <input type="text" id="postalcode" class="form-control" name="postalcode">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Country</label>
                                        <div class="col-md-9">
                                            <select name="country" id="country_ID" class="form-control select2me">
                                                <option> Select</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">City</label>
                                        <div class="col-md-9">
                                            <select name="city" id="city" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <br>
                            <!-- end first Section-->


                            <!-- second Section-->
                            <h3 class="form-section"><b>Parent/Guardian Information</b></h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="first_name" class="form-control" name="first_name">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Father Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="last_name" class="form-control" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Gender</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="gender">
                                                <option value="">-Select-</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input type="date" id="empbirth" class="form-control"
                                                   placeholder="dd/mm/yyyy" name="dob">
                                        </div>
                                    </div>
                                </div>

                                <!--/span-->





                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Relation</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="gender">
                                                <option value="">-Select-</option>
                                                <option value="male">Father</option>
                                                <option value="female">Mother</option>
                                                <option value="female">Uncle</option>
                                                <option value="female">Brother</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nationality</label>
                                        <div class="col-md-9">
                                            <input  type="text"  class="form-control" name="nationality">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CNIC </label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="cnic1"
                                                   />
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="cnic2" id="cnic22"
                                                   maxlength="7" onkeyup="jump2()"/>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="cnic3" id="cnic33"
                                                   maxlength="1"/>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CNIC Copy</label>
                                        <div class="col-md-9">
                                            <input name="cniccopy" class="form-control" id="cniccopy" type="file"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Passport</label>
                                        <div class="col-md-9">
                                            <input type="text" id="passport" class="form-control" name="passport">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Passport Copy</label>
                                        <div class="col-md-9">
                                            <input name="passportcopy" class="form-control" type="file"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Contact No.1</label>
                                        <div class="col-md-9">
                                            <input name="mobNo1" class="form-control" id="mobNo1" type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Contact No.2</label>
                                        <div class="col-md-9">
                                            <input type="text" id="mobNo2" class="form-control" name="mobNo2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Landline No</label>
                                        <div class="col-md-9">
                                            <input name="homeNo" class="form-control" id="homeNo" type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email</label>
                                        <div class="col-md-9">
                                            <input type="text"  class="form-control" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- end second Section-->


                            <div class="row">
                                <h3 class="form-section" style="padding-left: 20px;"><b>Academic/Previous</b></h3>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered"  style="margin-left:0px;" id="acadamic_record">
                                        <tbody>
                                        <thead>
                                        <tr>
                                            <td> Year</td>
                                            <td> Qualification</td>
                                            <td> Instituttion</td>
                                            <td> Grade </td>
                                            <td> Position </td>
                                            <td> Subjects </td>
                                            <td> Delete </td>
                                        </tr>
                                        <div class="multi-field-wrapper">
                                            <div  class="multi-fields">
                                                <tr  class="tablechild">
                                                    <td>
                                                        <input type="date" id="year" class="form-control" placeholder="dd/mm/yyyy" name="year[]">
                                                    </td>
                                                    <td><input type="text" id="qualification" name="qualification[]" value="" class="form-control"  /></td>
                                                    <td><input type="text" id="institution" name="institution[]" value="" class="form-control"  /></td>
                                                    <td><input type="text" id="grade" name="grade[]" value="" class="form-control"/></td>
                                                    <td><input type="text" id="position" name="position[]" value="" class="form-control"/></td>
                                                    <td><input type="text" id="subjects" name="subjects[]" value="" class="form-control"/></td>
                                                    <td>
                                                        <a style="cursor: pointer;" value="Remove" class="minusbtn" id="remove"></a>
                                                    </td>
                                                </tr>

                                            </div>
                                        </div>
                                        </thead>

                                        </tbody>
                                    </table>
                                    <li class="btn-group purple" style=" margin-left: 10px;">
                                                    <span class="btn purple fileinput-button" id="plusbtn">
                                                        <i  style="color: #ffffff;" class="fa fa-plus"></i>
                                                        <span>
                                                            <a style="color: #ffffff;"  value="Add" id="acadamic_recordBtn" >Add New</a>
                                                        </span>
                                                    </span>
                                    </li>
                                </div>
                            </div>




                            <div class="form-actions fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-offset-8 col-md-6">
                                            <button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit
                                            </button>
                                            <a href="#">
                                                <button type="button" class="btn purple"><i class="fa fa-times"></i> Cancel</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                    <div class="result"></div>
                </div>
            </div>
        </div>
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


            add_allowance();




        });




















        function deleteRow(id) {
            $('#'+id).remove();
        }






        /////////////////////////////////////////////////////////////////////////////////////////
        //////////////////add allowance/////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////

        function add_allowance() {

            var click = 2;
            jQuery("#acadamic_recordBtn").click(function(){
                jQuery('#acadamic_record tr:last').after(jQuery('#acadamic_record tr:last').after(

                        "<tr id=\""+click +"\" \" class=\"tablechild\"><td><input type=\"date\" id=\"year\" class=\"form-control\" placeholder=\"dd\/mm\/yyyy\" name=\"year[]\"><\/td><td><input type=\"text\" id=\"qualification\" name=\"qualification[]\" value=\"\" class=\"form-control\"  \/><\/td><td><input type=\"text\" id=\"institution\" name=\"institution[]\" value=\"\" class=\"form-control\"  \/><\/td><td><input type=\"text\" id=\"grade\" name=\"grade[]\" value=\"\" class=\"form-control\"\/><\/td><td><input type=\"text\" id=\"position\" name=\"position[]\" value=\"\" class=\"form-control\"\/><\/td><td><input type=\"text\" id=\"subjects\" name=\"subjects[]\" value=\"\" class=\"form-control\"\/><\/td><td><a style=\"cursor: pointer;\" value=\"Remove\" class=\"minusbtn\" id=\"remove\"><i class=\"fa fa-trash-o\" onclick=\"deleteRow\("+click+"\)\"><\/i><\/a><\/td><\/tr>")
                );
            });
            click++;
        }





    </script>





@stop