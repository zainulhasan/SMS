@extends('../layout.master')
@section('title',' Edit Students')


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


    <div id="message_box"></div>
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Edit Student
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
                <a href="#">Edit</a>
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
                        <form class="form-horizontal" id="edit_student_form" enctype="multipart/form-data"
                              method="post">
                            <meta name="csrf-token" content="{{ csrf_token() }}"/>

                            <div class="form-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group ">

                                            <div class="col-md-12">
                                                <img src="{{$student->image?'/img/'.$student->image:""}}"  id="output"
                                                     style="height: 160px;width: 160px;float: right; margin-right: 40px;"/>

                                                <script>
                                                    var loadFile = function (event) {
                                                        var output = document.getElementById('output');
                                                        output.src = URL.createObjectURL(event.target.files[0]);
                                                    };
                                                </script>
                                                <div class="col-md-12">
                                                    <input type="file"  style="float: right;margin-right: -68px;
    margin-top: 10px;" name="image" accept="image/*" onchange="loadFile(event)">

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <h3 class="form-section"><b>Class Allocation</b></h3>
                                <div class="row">

                                    <input type="hidden" value="{{$student->id}}" name="student_id">

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
                                                <input type="text" value="{{$student->firstName}}" class="form-control"
                                                       name="studentFirstName" >
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$student->lastName}}" class="form-control"
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
                                                <input name="studentFatherName"  value="{{$student->fatherName}}" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Mother Name</label>
                                            <div class="col-md-9">
                                                <input name="studentMotherName" value="{{$student->motherName}}" class="form-control" type="text"/>
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
                                                <input placeholder="{{"2+2"}}" type="date" class="form-control"
                                                       name="studentDob">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control"  name="studentGender">


                                                    @if($student->gender=='Male')
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                        @else

                                                        <option value="Female">Female</option>
                                                        <option value="Male">Male</option>

                                                    @endif
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
                                                <input name="studentReligion"   value="{{$student->religion}}" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Nationality</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$student->nationality}}" class="form-control" name="studentNationality">
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
                                                    <input type="text" class="form-control"
                                                           value="{{$student->language}}"
                                                           name="studentLanguage">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Place of Birth</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control"
                                                       value="{{$student->loc}}"
                                                       name="studentPlaceOfBirth">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">CNIC / Form B </label>
                                            <div class="col-md-3">
                                                <input type="text" value="{{substr($student->cnic,0,4)}}" class="form-control" name="studentCnic1"
                                                       maxlength="5"/>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" value="{{substr($student->cnic,4,11)}}" class="form-control" name="studentCnic2"
                                                       maxlength="7"/>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text"  value="{{  substr($student->cnic,12)}}" class="form-control" name="studentCnic3"
                                                       maxlength="1"/>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">CNIC / Form B Copy</label>
                                            <div class="col-md-9">
                                                <input placeholder="{{$student->cnicImage}}" value="{{$student->cnicImage}}" name="studentCnicCopy" class="form-control" type="file"/>
                                                <a class="" download="{{$student->cnicImage}}" href="{{asset('/img/'.$student->cnicImage)}}" title="ImageName">
                                                    Download
                                                </a>
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

                                                <input value="{{$student->passport}}"
                                                        type="text" class="form-control" name="studentPassport">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Passport Copy</label>
                                            <div class="col-md-9">
                                                <input name="studentPassportCopy" class="form-control" type="file"/>
                                              cnic
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
                                                <input
                                                        value="{{$student->contact1}}"
                                                        name="studentContactNo1" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Contact No.2</label>
                                            <div class="col-md-9">
                                                <input

                                                        value="{{$student->contact1}}"
                                                        type="text" class="form-control" name="studentContactNo2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input type="text"
                                                       value="{{$student->address}}"
                                                       class="form-control"
                                                       name="studentAddress">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">City</label>
                                            <div class="col-md-9">
                                                <input


                                                        value="{{$student->city}}"
                                                        name="studentCity" id="city" class="form-control"
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
                                                <input
                                                        value="{{$student->province}}"
                                                        name="studentProvince" class="form-control" type="text">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Country</label>
                                            <div class="col-md-9">
                                                <input value="{{$student->address}}" name="studentCountry" class="form-control"
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
                                                <input value="{{$sg->Name}}" type="text"class="form-control"
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
                                                       placeholder="{{$sg->dob}}" name="guardianDob">
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
                                                <input type="text" value="{{$sg->occupation}}"  class="form-control"
                                                       name="guardianOccupation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Gender</label>
                                            <div class="col-md-9">
                                                <select class="form-control" name="guardianGender">
                                                    @if($sg->gender=='Male')
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    @else

                                                        <option value="Female">Female</option>
                                                        <option value="Male">Male</option>

                                                    @endif

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
                                                <input value="{{$sg->income}}" name="guardianIncome" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Religion</label>
                                            <div class="col-md-9">
                                                <input value="{{$sg->religion}}" name="guardianReligion" class="form-control" type="text"/>
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
                                                <input value="{{$sg->language}}" type="text" class="form-control" name="guardianLanguage">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Nationality</label>
                                            <div class="col-md-9">
                                                <input value="{{$sg->nationality}}" type="text" class="form-control" name="guardianNationality">
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">CNIC </label>
                                            <div class="col-md-3">
                                                <input type="text" value="{{substr($sg->cnic,0,4)}}" class="form-control" name="guardianCnic1"
                                                       maxlength="5">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" value="{{substr($sg->cnic,4,11)}}" class="form-control" name="guardianCnic2"
                                                       maxlength="7">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" value="{{substr($sg->cnic,12)}}" class="form-control" name="guardianCnic3"
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
                                                <a class="" download="{{$sg->cnicImage}}" href="{{asset('/img/'.$sg->cnicImage)}}" title="ImageName">
                                                    Download
                                                </a>
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
                                                <input type="text" value="{{$sg->passport}}" id="passport" class="form-control"
                                                       name="guardianPassport">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Passport Copy</label>
                                            <div class="col-md-9">
                                                <input name="guardianPassportCopy" class="form-control" type="file"/>
                                                <a class="" download="{{$sg->passportImage}}" href="{{asset('/img/'.$sg->passportImage)}}" title="ImageName">
                                                    Download
                                                </a>
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
                                                <input value="{{$sg->contact1}}" name="guardianContactNo1" class="form-control" type="text"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Contact No.2</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$sg->contact2}}" class="form-control" name="guardianContactNo2">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" value="{{$sg->email}}" class="form-control" name="guardianEmail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address</label>
                                            <div class="col-md-9">
                                                <input  value="{{$sg->address}}" type="text" class="form-control" name="guardianAddress">
                                            </div>
                                        </div>
                                    </div>



                                </div>



                                <br>



                                <!-- End Guardian Section-->






                                <!-- End Medical Section-->



                                <h3  style="margin:10px; " class="form-section"><b>Medical History</b></h3>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="control-label col-md-7"> Have you completed child's vaccination ?</label>
                                            <div class="col-md-5">
                                                <label    class="radio-inline"><input  type="radio"   value="1" name="vaccination">Yes</label>
                                                <label class="radio-inline"><input  type="radio"  value="0" name="vaccination" >No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label class="control-label col-md-6">Vaccination Certificate Copy</label>
                                            <div class="col-md-6">
                                                <input type="file" class="form-control"
                                                       name="studentVaccinationCopy">
                                                <a class="" download="{{$sr->vaccinationImage}}" href="{{asset('/img/'.$sg->vaccinationImage)}}" title="ImageName">
                                                    Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>


                                <!-- End Medical Section-->



                                <!-- previous Record Section-->


                                <div class="row">
                                    <h3 class="form-section" style="padding-left: 20px;"><b>Academic/Previous Record</b>
                                    </h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" style="margin-left:0px;"
                                               id="acadamic_record">

                                            <thead style="background-color: purple;color:#fff;">
                                            <tr>
                                                <td class="text-center">Class</td>
                                                <td class="text-center">Section</td>
                                                <td class="text-center"> Session</td>
                                                <td class="text-center"> Roll No</td>

                                                <td class="text-center"> Marks Obtained</td>
                                                <td class="text-center"> School</td>

                                            </tr>
                                            <tbody>
                                            <div class="multi-field-wrapper">
                                                <div class="multi-fields">
                                                    <tr class="tablechild">



                                                        <td><input  value="{{$sr->class}}" type="text" name="PrevClass"
                                                                    style="border: none; height: 15px;" class="form-control"/></td>
                                                        <td><input value="{{$sr->section}}" type="text" name="PrevSection"
                                                                   style="border: none; height: 15px;" class="form-control"/></td>
                                                        <td><input value="{{$sr->session}}" type="text" name="PrevSession" value=""
                                                                   style="border: none; height: 15px;"  class="form-control"/></td>
                                                        <td><input value="{{$sr->roll}}" type="text" name="PrevRoll" value=""
                                                                   style="border: none; height: 15px;"  class="form-control"/></td>
                                                        <td><input value="{{$sr->marks}}" type="text" name="PrevMarks" value=""
                                                                   style="border: none; height: 15px;" class="form-control"/></td>
                                                        <td><input value="{{$sr->school}}" type="text" name="PrevSchool" value=""
                                                                   style="border: none; height: 15px;" class="form-control"/></td>

                                                    </tr>

                                                </div>
                                            </div>
                                            </thead>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>


                                <div class="row">
                                    <h3 class="form-section" style="padding-left: 20px;"><b>Attachments</b></h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-6">Previous School Certificate Copy</label>
                                            <div class="col-md-6">
                                                <input type="file" class="form-control"
                                                       name="studentCertificateImage">
                                                <a class="" download="{{$sr->certificateImage}}" href="{{asset('/img/'.$sg->certificateImage)}}" title="ImageName">
                                                    Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-actions fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-offset-8 col-md-6">
                                                <button type="submit" class="btn purple"><i class="fa fa-check"></i>
                                                    Submit
                                                </button>
                                                <a href="#">
                                                    <a href="/students" class="btn purple"><i class="fa fa-times"></i>
                                                        Cancel
                                                    </a>
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