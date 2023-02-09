<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        .background-img{
            max-width: 50%;
        }
        .title{
            font-size: 35px;
            color: #43425D;
            font-weight: bold;
        }
        .trick{
            font-size: 18px;
            color: #4D4F5C;
            opacity: 50%;
        }
        .form{
            width: 45%;
            min-width: 400px;
        }
        .input-custom{
            border-left: 0px;
            border-right: 0px;
            border-top: 0px;
            border-bottom: 1px solid #E9E9F0;
            height: 33px;
            padding: 10px;
            width: 100%;
        }
        .input-custom:hover, .input-custom:focus-visible, .input-custom:focus{
            border-left: 0px;
            border-right: 0px;
            border-top: 0px;
            border-bottom: 1px solid limegreen;
            outline: none !important;
        }
        .forgot{
            color: #43425D;
            font-size: 15px;
            margin-left: auto;
            text-decoration: none;
        }
        .btn-login{
            background-color: #43425D;
            color: #ffffff;
            height: 50px;
            width: 185px;
        }
        .btn-login:hover{
            background-color: #3D3C53FF;
            color: #ffffff;
        }

        .btn-forgot{
            background-color: #43425D;
            color: #ffffff;
            height: 50px;
            width: 230px;
        }
        .btn-forgot:hover{
            background-color: #3D3C53FF;
            color: #ffffff;
        }
    </style>
</head>
<body>
<div class="d-flex h-100 w-100">
    <img class="h-100 background-img" src="{{url('/images/background.png')}}" alt="">
    @yield('form')
</div>
</body>
</html>
