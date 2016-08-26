<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>


    <style>
        .container{
        }

        .row{
        }


        .header{
            overflow: hidden;
        }

        .logo{

            float: left;
        }
        .logo img{

            width: 100px;
            height: 100px;
        }



        .pic{
            float: right;
        }
        .pic img{

            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>


<div class="container">


    <div class="row">
        
        
       <div class="header">

           <div class="logo">
               <img src="{{asset('img/logo.png')}}" alt="">
           </div>
           <div class="heading">
               <h2>Army Public School and College</h2>
               <p>Fort Road Rawalpindi</p>
           </div>
           <div class="pic">
               <img src="{{asset('img/pic.jpg')}}" alt="">
           </div>
       </div>

    </div>


</div>



</body>
</html>