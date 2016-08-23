<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{URL::asset('assets/css/normalize.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('assets/css/pdf.css')}}" rel="stylesheet" type="text/css"/>


    <style>
        /****Wild Card Styles ******/
        * {
            font-family: 'Calibri';

        }


        .logo{

            margin: 10px;
        }
        .header{
            margin-top: 20px;
            line-height:1px;
            text-align: center;
        }


    </style>

</head>
<body>


<div class="container">
    <div class="row">

        <div class="col-md-3">
            <img width="120px" height="120px" class="img-responsive" src="{{asset('img/logo.png')}}" alt="">
        </div>
        <div class="col-md-5">
            <div class="header">
                <h1>Army Public School</h1>
            </div>
        </div>
        <div class="col-md-3">
            <img width="120px" height="120px" class="img-responsive" src="{{asset('img/pic.jpg')}}" alt="">
        </div>

    </div>
</div>


</body>
</html>