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


    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/select2/select2_metro.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/data-tables/DT_bootstrap.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/plugins/bootstrap-modal/css/bootstrap-modal.css')}}"/>

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
                <a href="/students">Student</a>
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


    <div id="message_box"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable tabbable-custom boxless">
                <div class="portlet box purple">
                    <div class="portlet-title">
                        <div class="caption">
                            Add Student
                        </div>
                        <div class="tools">


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


                                <h3 class="form-section"><b>Class Allocation</b></h3>
                                <div class="row">



                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Session </label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{get_current_session()}}" name="currentSesstion"
                                                        class="form-control" readonly>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Class </label>
                                            <div class="col-md-9">
                                                <select type="text" id="studentClass" name="studentClass"
                                                        class="form-control">
                                                    <option value="">Select</option>
                                                    @foreach($classes as $class)
                                                        <option value="{{$class->id}}">{{$class->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Section</label>
                                            <div class="col-md-9">
                                                <select type="text" id="studentSection" name="studentSection"
                                                        class="form-control">
                                                    <option value="#">Select</option>
                                                </select>

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
                                                <input type="text" id="first_name" class="form-control"
                                                       name="studentFirstName">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="last_name" class="form-control"
                                                       name="studentLastName">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Father Name</label>
                                            <div class="col-md-9">
                                                <input name="studentFatherName" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Mother Name</label>
                                            <div class="col-md-9">
                                                <input name="studentMotherName" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>


                                    <!--/span-->

                                </div>
                                <div class="row">


                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="date"   class="form-control"
                                                       placeholder="dd/mm/yyyy" name="studentDob">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="studentGender">
                                                    <option value="">-Select-</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Religion</label>
                                            <div class="col-md-9">
                                                <input name="studentReligion" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Nationality</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="studentNationality">
                                            </div>
                                        </div>
                                    </div>


                                    <!--/span-->

                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Language</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="studentLanguage">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Place of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="studentPlaceOfBirth">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">CNIC </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="studentCnic1"
                                                       maxlength="5"/>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="studentCnic2"
                                                       maxlength="7"/>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="studentCnic3"
                                                       maxlength="1"/>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">CNIC Copy</label>
                                            <div class="col-md-9">
                                                <input name="studentCnicCopy" class="form-control" type="file"/>
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
                                                <input type="text" class="form-control" name="studentPassport">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Passport Copy</label>
                                            <div class="col-md-9">
                                                <input name="studentPassportCopy" class="form-control" type="file"/>
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
                                                <input name="studentContactNo1" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Contact No.2</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="studentContactNo2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">House No</label>
                                            <div class="col-md-9">
                                                <input type="text"  class="form-control"
                                                       name="studentAddress">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input name="studentCity" id="city" class="form-control"
                                                       type="text">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Province</label>
                                            <div class="col-md-9">
                                                <input name="studentProvince" class="form-control" type="text">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <input name="studentCountry" class="form-control"
                                                       type="text">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <!-- end Student Section-->


                                <!-- Guardian Section-->


                                <h3 class="form-section"><b>Parent/Guardian Information</b></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Guardian Name</label>
                                            <div class="col-md-9">
                                                <input type="text"class="form-control"
                                                       name="guardianName">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth</label>
                                            <div class="col-md-9">
                                                <input type="date" class="form-control"
                                                       placeholder="dd/mm/yyyy" name="guardianDob">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">


                                    <!--/span-->


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Occupation</label>
                                            <div class="col-md-9">
                                                <input type="text"  class="form-control"
                                                       name="guardianOccupation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="guardianGender">
                                                    <option value="">-Select-</option>
                                                    <option value="male">Male</option>
                                                    <option val ue="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!--/span-->
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Monthly Income</label>
                                            <div class="col-md-9">
                                                <input name="guardianIncome" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Religion</label>
                                            <div class="col-md-9">
                                                <input name="guardianReligion" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>


                                    <!--/span-->

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Language</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="guardianLanguage">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Nationality</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="guardianNationality">
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">CNIC </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="guardianCnic1"
                                                       maxlength="5">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="guardianCnic2"
                                                       maxlength="7">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" name="guardianCnic3"
                                                       maxlength="1"/>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">CNIC Copy</label>
                                            <div class="col-md-9">
                                                <input name="guardianCnicCopy" class="form-control"
                                                       id="guardianCnicCopy"
                                                       type="file"/>
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
                                                <input type="text" id="passport" class="form-control"
                                                       name="guardianPassport">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Passport Copy</label>
                                            <div class="col-md-9">
                                                <input name="guardianPassportCopy" class="form-control" type="file"/>
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
                                                <input name="guardianContactNo1" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Contact No.2</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="guardianContactNo2">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="guardianEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="guardianAddress">
                                            </div>
                                        </div>
                                    </div>



                                </div>



                                <br>



                                <!-- End Guardian Section-->







                                <!-- previous Record Section-->


                                <div class="row">




                                    <div class="table-responsive" style="margin: 10px;">


                                        <h3><b>Academic/Previous Record</b></h3>
                                        <table class="table table-bordered">
                                            <thead style="background-color: purple;color:#fff;">
                                            <tr>
                                                <td class="text-center">Class</td>
                                                <td class="text-center">Section</td>
                                                <td class="text-center"> Session</td>
                                                <td class="text-center"> Roll No</td>

                                                <td class="text-center"> Marks Obtained</td>
                                                <td class="text-center"> School</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><input style="border: none; height: 15px;" type="text" name="PrevClass"
                                                           value="" class="form-control"/></td>
                                                <td><input  style="border: none; height: 15px;" type="text" name="PrevSection"
                                                           value="" class="form-control"/></td>
                                                <td><input style="border: none; height: 15px;" type="text" name="PrevSession" value=""
                                                           class="form-control"/></td>
                                                <td><input style="border: none; height: 15px;" type="text" name="PrevRoll" value=""
                                                           class="form-control"/></td>
                                                <td><input style="border: none; height: 15px;" type="text" name="PrevMarks" value=""
                                                           class="form-control"/></td>
                                                <td><input style="border: none; height: 15px;" type="text" name="PrevSchool" value=""
                                                           class="form-control"/></td>
                                            </tr>

                                            </tbody>
                                        </table>


                                    </div>





                                <div class="form-actions fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-offset-8 col-md-6">
                                                <button type="submit" class="btn purple"><i class="fa fa-check"></i>
                                                    Submit
                                                </button>
                                                <a href="/students">
                                                    <button type="button" class="btn purple"><i class="fa fa-times"></i>
                                                        Cancel
                                                    </button>
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
            // initiate layout and plugins
            App.init();
            TableAdvanced.init();
            FormValidation.init();
            FormComponents.init();


            add_allowance();


        });


        function deleteRow(id) {
            $('#' + id).remove();

        }


        /////////////////////////////////////////////////////////////////////////////////////////
        //////////////////add allowance/////////////////////
        /////////////////////////////////////////////////////////////////////////////////////////

        function add_allowance() {

            var click = 2;
            jQuery("#acadamic_recordBtn").click(function () {
                jQuery('#acadamic_record tr:last').after(jQuery('#acadamic_record tr:last').after(
                        "<tr id=\"" + click + "\" \" class=\"tablechild\"><td><input type=\"text\" id=\"year\" class=\"form-control\"  name=\"year[]\"><\/td><td><input type=\"text\" id=\"qualification\" name=\"qualification[]\" value=\"\" class=\"form-control\"  \/><\/td><td><input type=\"text\" id=\"institution\" name=\"institution[]\" value=\"\" class=\"form-control\"  \/><\/td><td><input type=\"text\" id=\"grade\" name=\"grade[]\" value=\"\" class=\"form-control\"\/><\/td><td><input type=\"text\" id=\"subjects\" name=\"subjects[]\" value=\"\" class=\"form-control\"\/><\/td><td><a style=\"cursor: pointer;\" value=\"Remove\" class=\"minusbtn\" id=\"remove\"><i class=\"fa fa-trash-o\" onclick=\"deleteRow\(" + click + "\)\"><\/i><\/a><\/td><\/tr>")
                );
            });
            click++;
        }


    </script>





@stop