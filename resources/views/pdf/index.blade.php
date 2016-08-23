<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<style type="text/css">


    body {

        margin: 0 auto;
        width: 8.11in;

    }

    .body {

        width: 8.11in;
        height: 11.29in;
        margin: 0 auto;
        margin-bottom: 50px;
        border: 1px solid black;

    }

    .header {
        overflow: hidden;
    }

    .logo {
        float: left;
        width: 10%;
        margin: 2%;
        margin-top: 4%;
        padding: .5%;
    }

    .logo img {

        width: 100%;
        height: 100%;
    }

    .title {
        width: 65%;
        float: left;
        text-align: center;
        margin-top: 5%;

        line-height: .5;

    }

    .pic {
        float: right;
        width: 10%;
        margin: 2%;
        padding: .5%;
        border: 1px solid black;
    }

    .pic img {

        width: 100%;
        height: 100%;
    }

    .headerLine {

        /*width: 95%;
        height: 1px;
        margin: 0 auto;
        border-bottom: 1px solid black;
*/
    }

    .row {

        margin-top: 15px;
        margin-bottom: 35px;
        overflow: hidden;
    }

    .main {
        max-width: 95%;
        margin: 0 auto;
        margin-top: 25px;
        overflow: hidden;

    }

    .left {

        font-weight: 500;
        width: 45%;
        float: left;
        border-bottom: 1px solid black;
    }

    .right {

        width: 45%;
        float: right;
        font-weight: 500;
        text-align: left;
        border-bottom: 1px solid black;

    }

    .full {

        width: 100%;
        font-weight: 500;
        text-align: left;
        padding-top: 2px;
        border-bottom: 1px solid black;

    }

    .one, .two, .three {

        width: 30%;
        border-bottom: 1px solid black;
        float: left;
        font-weight: 500;

    }

    .two {
        margin-left: 25px;
    }

    .three {
        float: right;
    }

    table {
        width: 100%;

    }

    table thead {
        color: #fff;

        background-color: purple;
        border-top: 1px solid black;
    }

    thead td {

        border: 1px solid black;
    }

    tbody td, thead td {
        text-align: center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }

    .printBtn {

        width: 120px;
        height: 35px;
        font-size: 15px;
        color: #fff;
        border: none;

        background-color: purple;
    }

</style>
<body>


<div id="menu">

    <div class="full" style="margin-bottom: 20px;margin-top: 20px;border: none;text-align: right;">


        <button onclick="back()" class="printBtn" type="button">Back</button>
        <button onclick="printContent()" class="printBtn" type="button">Print</button>
    </div>

</div>


<div class="body">

    <div class="header">

        <div class="logo">
            <img src="{{asset('/img/logo.png')}}">
        </div>

        <div class="title">
            <h3>Army Public School and College</h3>
            <p>Fort Road Rawalpindi</p>
        </div>

        <div class="pic">
            <img src="{{asset('/img/pic.jpg')}}">
        </div>
    </div>

    <div class="headerLine"></div>
    <div class="main">


        <h2>Personal Information:</h2>
        <div class="row">
            <div class="one">Session: 2016-2017</div>
            <div class="two">Class:1</div>
            <div class="three">Section: A</div>
        </div>


        <div class="row">
            <div class="left">First Name: {{$student->firstName}}</div>
            <div class="right">Last Name: {{$student->lastName}}</div>
        </div>

        <div class="row">
            <div class="left">Father Name: {{$student->fatherName}}</div>
            <div class="right">Mother Name: {{$student->motherName}}</div>
        </div>


        <div class="row">
            <div class="one">Date Of Birth: {{$student->dob}}</div>
            <div class="two">Place Of Birth: {{$student->loc}}</div>
            <div class="three">Gende: {{$student->gender}}</div>
        </div>


        <div class="row">
            <div class="one">Language: {{$student->language}}</div>
            <div class="two">Nationality: {{$student->nationality}}</div>
            <div class="three">Religion: {{$student->religion}}</div>
        </div>

        <div class="row">
            <div class="left">CNIC: {{$student->cnic}}</div>
            <div class="right">Passport: {{$student->passport}}</div>
        </div>


        <div class="row">
            <div class="left">Mobile: {{$student->contact1}}</div>
            <div class="right">Landline: {{$student->contact2}}</div>
        </div>

        <div class="row">
            <div class="full">Address: {{$student->address}} ,{{$student->city}},{{$student->province}}
                , {{$student->country}}</div>
        </div>

        <h2>Parent/Guardian Information:</h2>
        <div class="row">
            <div class="left">Guardian Name: {{$student->StudentGuardian->Name}}</div>
            <div class="right">Occupation: {{$student->StudentGuardian->occupation}}</div>
        </div>
        <div class="row">
            <div class="left">CNIC: {{$student->StudentGuardian->cnic}}</div>
            <div class="right">Monthly Income: {{$student->StudentGuardian->income}}</div>
        </div>

        <div class="row">
            <div class="left">Mobile: {{$student->StudentGuardian->contact1}}</div>
            <div class="right">Land line: {{$student->StudentGuardian->contact2}}</div>
        </div>


        <h2>Academic/Previous Record</h2>

        <table>
            <thead>
            <tr>
                <td>Class</td>
                <td>Section</td>
                <td>Session</td>
                <td>Roll No</td>
                <td>Marks Obtained</td>
                <td style="border-right:1px solid black;">School</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$student->studentRecord->class}}</td>
                <td>{{$student->studentRecord->section}}</td>
                <td>{{$student->studentRecord->session}}</td>
                <td>{{$student->studentRecord->roll}}</td>
                <td>{{$student->studentRecord->marks}}</td>
                <td style="border-right:1px solid black;">{{$student->studentRecord->school}}</td>
            </tr>
            </tbody>
        </table>


    </div>


</div>


<script>


    function back() {
        window.location.href = '/students'
    }
    function printContent() {
        document.getElementById("menu").style.display = "none";
        window.print();
        document.getElementById("menu").style.display = "block";
    }
</script>
</body>
</html>