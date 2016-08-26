<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/pdf.css')}}">
    <title>Document</title>

    <style>

        body {

            font-family: Calibri, serif;
            font-size: 11px;
            overflow:auto;

        }

        .table-borderless tbody tr td, .table-borderless tbody tr th, .table-borderless thead tr th {
            border-right: none;
            border-left: none;
        }

        .table th, .table td {
            border-right: none !important;
            border-bottom: 2px !important;
        }

        .main {


            margin-bottom: 200px;

        }

        .logo {

            width: 100px;
            float: left;

        }

        .pic {

            width:100px;
            height:100px;
            float: left;


        }


        .pic img {

            width:100%;
            height:100%;
            padding:5px;
            border:1px solid black;
        }

        .heading {

            line-height: .5;
            float: left;
            width: 480px;
            text-align: center;

        }

        .panel-heading {

            font-weight: bold;

        }

        .tdStyle{
            height: 15px;
            padding: 5px;

        }


        .clear{
            clear:both;
        }
        .clear:after{

            content: ".";
            visibility: hidden;
            display: block;
            height: 0;
            clear: both;
        }

    </style>
</head>
<body>


<div class="main">


    <div class="logo">
        <img src="{{asset('/img/logo.png')}}" width="70px" height="70px" alt="Logo">
    </div>


    <div class="heading">


        <h2 style="font-weight: bold;font-size: 17px;">Army Public School and College</h2>
        <p style="font-size: 14px;">Fort Road Rawalpindi</p>

    </div>


    <div class="pic">
        <img src="{{asset('/img/pic.jpg')}}" alt="Student Image">
    </div>
</div>

<br>


<div class="clear">

    <br>
    <br>
    <br>
    <br>


</div>
<div class="panel panel-primary">
    <div style="height: 20px;padding:2px;" class="panel-heading">Class Information</div>


    <div class="table-responsive table-borderless">
        <table class="table table-bordered">

            <tbody>

            <tr>
                <td style="height: 20px;padding: 5px;"><span><strong>Session</strong>: {{date('Y',strtotime($student->session->startingDate))}}
                        - {{date('Y',strtotime($student->session->endingDate))}}</span></td>


                <td style="text-align: center;height: 15px;padding: 5px;">
                    <span> <strong>Class</strong>: {{$student->classes->name}}</span></td>


                <td style="text-align: center;height: 15px;padding: 5px;">
                    <span> <strong>Section</strong>: {{$student->classes->section}}</span></td>


                <td style="text-align:right;height: 15px;padding: 5px;">
                    <span><strong>Admission Date</strong>: {{$student->classes->created_at}}</span></td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="panel panel-primary">
    <div style="height: 20px;padding:2px; font-weight: bold;" class="panel-heading">Personal Information</div>


    <div class="table-responsive table-borderless">
        <table class="table table-bordered">

            <tbody>

            <tr>
                <td  class="tdStyle"><span><strong>Name:</strong> {{$student->firstName}} {{$student->lastName}}</span></td>
                <td class="tdStyle"><span><strong>Father Name</strong>: {{$student->FatherName}}</span></td>
                <td class="tdStyle"><span><strong>Mother Name</strong>: {{$student->motherName}}</span></td>
            </tr>

            <tr>
                <td class="tdStyle"><span><strong>CNIC</strong>: {{$student->cnic}}</span></td>
                <td class="tdStyle"><span><strong>Passport</strong>: {{$student->passport}}</span></td>
                <td class="tdStyle"><span><strong>Gender</strong>: {{$student->gender}}</span></td>
            </tr>

            <tr>
                <td class="tdStyle"><span><strong>Date of Birth</strong>: {{$student->dob}}</span></td>
                <td class="tdStyle"><span><strong>Place of Birth</strong>: {{$student->loc}}</span></td>
                <td class="tdStyle"><span><strong>Religion</strong>: {{$student->religion}}</span></td>
            </tr>

            <tr>
                <td class="tdStyle"><span><strong>Phone</strong>: {{$student->contact1}}</span></td>
                <td class="tdStyle"><span><strong>Land Line</strong>: {{$student->contact2}}</span></td>
                <td class="tdStyle"><span><strong>Nationality</strong> : {{$student->nationality}}</span></td>
            </tr>

            <tr>
                <td colspan="3"
                    class="tdStyle"><span><strong>Address</strong>: {{$student->address}} {{$student->city}}
                        ,{{$student->province}} {{$student->country}}</span></td>

            </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="panel panel-primary">
    <div style="height: 20px;padding:2px;" class="panel-heading">Parent/Guardian Information</div>


    <div class="table-responsive table-borderless">
        <table class="table table-bordered">

            <tbody>

            <tr>
                <td class="tdStyle"><span><strong>Name</strong>: {{$sg->Name}}</span></td>
                <td class="tdStyle"><span><strong>Occupation</strong>: {{$sg->occupation}}</span>
                </td>
                <td class="tdStyle"><span><strong>Monthly Income</strong>: {{$sg->income}}</span>
                </td>
            </tr>

            <tr>
                <td class="tdStyle"><span><strong>CNIC</strong>: {{$sg->cnic}}</span></td>
                <td class="tdStyle"><span><strong>Passport</strong>:{{$sg->passport}}</span></td>
                <td class="tdStyle"><span><strong>Gender</strong>: {{$sg->gender}}</span></td>
            </tr>

            <tr>
                <td class="tdStyle"><span><strong>Date of Birth</strong>: {{$sg->dob}}</span></td>
                <td class="tdStyle"><span><strong>Religion</strong>: {{$sg->religion}}</span></td>
                <td class="tdStyle"><span><strong>Nationality</strong>: {{$sg->nationality}}</span>
                </td>
            </tr>

            <tr>
                <td class="tdStyle"><span><strong>Phone</strong>: {{$sg->contact1}}</span></td>
                <td class="tdStyle"><span><strong>Land Line</strong>: {{$sg->contact2}}</span></td>
                <td class="tdStyle"><span><strong>Email</strong> :{{$sg->email}}</span></td>
            </tr>


            <tr>
                <td colspan="3" class="tdStyle">
                    <span><strong>Address</strong>: {{$sg->address}}</span></td>

            </tr>



            </tbody>
        </table>
    </div>
</div>

<div class="panel panel-primary">
    <div style="height: 20px;padding:2px;" class="panel-heading">Academic/Previous Record</div>


    <div class="table-responsive">
        <table class="table table-bordered">

            <thead>
            <tr>
                <th style="text-align: center" ;>Class</th>
                <th style="text-align: center" ;>Section</th>
                <th style="text-align: center" ;>Session</th>
                <th style="text-align: center" ;>Enrollment</th>
                <th style="text-align: center" ;>Marks</th>
                <th style="text-align: center" ;>School</th>
            </tr>
            </thead>

            <tbody>
            <tr style="text-align: center;">
                <td class="tdStyle">{{$sr->class}}</td>
                <td class="tdStyle">{{$sr->section}}  </td>
                <td class="tdStyle"> {{$sr->session}}</td>
                <td class="tdStyle"> {{$sr->roll}}</td>
                <td class="tdStyle"> {{$sr->marks}}</td>
                <td class="tdStyle">{{$sr->school}}</td>
            </tr>
            </tbody>
        </table>
    </div>

</div>


</body>
</html>
