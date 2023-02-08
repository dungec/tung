<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>車両別データ一覧</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="//fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <style>
            .user-info{
                margin-left: auto !important;
                width: fit-content;
                margin-right: 30px;
                padding-left: 40px;
                border-left: 1px solid #EBEBF2;
                font-size: 13px;
            }
            .navbar-custom{
                height: 70px;
                background-color: #FFFFFF;
            }
            .logo{
                height: 70px;
                font-weight: bold;
                color: #FFFFFF;
                background-color: #0000001A;
                box-shadow: 0px 2px 3px #0000000D;
            }
            .p-name{
                margin-right: 15px;
            }
            .sidebar-cutom{
                background-color: #43425D;
                font-size: 15px;
                width: 220px;
                height: 100vh;
            }
            .content{
                width: 100%;
                height: 100vh;
                background-color: #F0F0F7;
            }
            .page{
            }
            body {
                margin: 0;
                padding: 0;
            }
            .li-tab{
                list-style-type: none;
                font-size: 15px;
                color: #ffffff;
                height: 53px;
                width: 100%;
                display: flex;
                align-items: center;
                padding-left: 5px;
            }
            .li-tab i{
                margin-right: 5px;
            }
            .tab-active, .li-tab:hover{
                background-color: #0000001A !important;
                border-left: 5px solid #A3A0FB;
            }
            .li-tab:hover{
                opacity: 100%;

            }
            .tabs, .tabs ul{
                width: 100%;
                margin: 0px;
                padding: 0px;
                cursor: pointer;
            }
            .tabs ul{
                border-bottom: 2px solid #707070;
            }
            .title div{
                display: flex;
                align-items: center;
            }
            .table-page{
                background-color: #ffffff;
                margin-left: 40px;
                margin-right: 40px;
                height: calc(100vh - 190px);
            }
            .table-custom{
                margin-left: 30px;
                margin-right: 30px;
                margin-top: 20px;
                width: calc(100% - 60px);

            }
            .div-table{
                height: calc(100vh - 270px);
                overflow: auto;
            }
            .table-custom thead{
                background-color: #F5F6FA;
                font-size: 11px;
                color: #A3A6B4;
                height: 48px;
            }
            .table-custom th{
                text-align: center !important;
            }
            .table-custom tr{
                border-bottom: 1px solid #ccc;
                height: 50px;
                color: #4D4F5C;
                font-size: 13px;
                text-align: center;
            }
            .badge-custom{
                background-color: #3B86FF;
                border-radius: 10px;
                color: #ffffff;
                padding: 0 5px;
                position: absolute;
                top: 30px;
                left: calc(50% - 16px);
                white-space: nowrap;
            }
            .navbar-form{
                margin-top: 52px;
            }
            .form-title{
                color: #ffffff;
                font-size: 13px;
                font-weight: bold;
                margin-left: 10px;
            }
            .select-custom{
                margin-left: 40px;
                margin-right: 18px;
                width: 170px;
            }
            .form-check-input{
                margin-left: 0px !important;
            }
            .form-check-label{
                margin-left: 5px;
                font-size: 13px;
                color: #ffffff;
            }
            .input-group-append, .input-group-append span{
                border-left: none;
                border-radius: 0px .375rem .375rem 0px;
            }
            .paginate nav{
                margin-right: 30px;
                margin-left: auto;
            }
        </style>
    </head>
    <body>
        <div class="d-flex page">
            <div class="sidebar-cutom">
                <div class="logo d-flex">
                    <p class="m-auto">OBD TELEMATICS</p>
                </div>
                <div class="tabs">
                    <ul>
                        <li class="li-tab tab-active"><i class="fa-solid fa-chart-simple"></i>車両別データ一覧</li>
                        <li class="li-tab"><i class="fa-solid fa-user"></i>マスター管理</li>
                    </ul>
                </div>
                <div class="navbar-form">
                    <form action="">
                        <div>
                            <span class="form-title">車両選択</span>
                            <select class="form-select select-custom mt-2" aria-label="Default select example" name="select">
                                <option value="選択してください"
                                    @if ($request_data['select'] == "選択してください")
                                        selected="selected"
                                    @endif
                                >
                                    選択してください
                                </option>
                                <option value="品川300あ12-34"
                                    @if ($request_data['select'] == "品川300あ12-34")
                                        selected="selected"
                                    @endif
                                >
                                    品川300あ12-34
                                </option>
                            </select>
                        </div>

                        <div style="margin-top: 30px">
                            <span class="form-title">車両選択</span>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="on" name="date_type" id="flexRadioDefault1"
                                    @if (!isset($request_data['date_type']) || $request_data['date_type'] == "on")
                                       checked="checked"
                                    @endif
                                >
                                <label class="form-check-label" for="flexRadioDefault1">
                                    本日分
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="off" name="date_type" id="flexRadioDefault2"
                                    @if ($request_data['date_type'] == "off")
                                       checked="checked"
                                    @endif
                                >
                                <label class="form-check-label" for="flexRadioDefault2">
                                    期間指定
                                </label>
                            </div>

                            <div class="input-group date select-custom" id="datepicker-from">
                                <input type="text" class="form-control" id="date-from" name="date-from" style="border-right: none"
                                />
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                            <div class="input-group date select-custom mt-2" style="margin-left: 25px; width: 185px;" id="datepicker-to">
                                <span style="font-size: 13px; color: #ffffff; margin-right: 2px;" class="my-auto">〜</span>
                                <input style="border-radius: .375rem 0px 0px .375rem;" type="text" class="form-control" id="date-to" name="date-to" style="border-right: none"

                                />
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                            <button class="btn btn-primary" style="margin-left: 18px; margin-right: 10px; width: 192px; margin-top: 30px">
                                表示
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom d-flex">
                    <div class="user-info my-auto d-flex">
                        <p class="p-name my-auto">{{ $user_name }}</p>
                        <i class="fa-solid fa-angle-down my-auto"></i>

                    </div>
                </nav>
                <div class="title d-flex" style="margin-left: 40px; height: 80px;">
                    <div class="col-4" style="font-size: 28px;">車両別データ一覧</div>
                    <div class="col-3"style="font-size: 20px;">車両No. ： {{ $number }}</div>
                    <div class="col-5" style="font-size: 20px;">端末ID：{{ $id }}</div>
                </div>
                <div class="table-page">
                    <div style="height: 20px;"></div>
                    <div class="div-table">
                        <table class="table-custom">
                            <thead>
                            <tr>
                                <th scope="col">登録日時</th>
                                <th scope="col" style="position: relative">
                                    車速
                                    <span class="badge-custom">詳細</span>
                                </th>
                                <th scope="col" style="position: relative">加速度（x / Y / Z）
                                    <span class="badge-custom">詳細</span>
                                </th>
                                <th scope="col" style="position: relative">SOC
                                    <span class="badge-custom">詳細</span>
                                </th>
                                <th scope="col">エンジン回転数</th>
                                <th scope="col">アクセル/ スロットル開度</th>
                                <th scope="col">エンジン 冷却水温</th>
                                <th scope="col">ブレーキSW</th>
                                <th scope="col">積算距離</th>
                                <th scope="col">積算燃料</th>
                                <th scope="col">バッテリ電圧</th>
                                <th scope="col">燃料噴射量</th>
                                {{--                            <th scope="col">燃料噴射量</th>--}}
                                <th scope="col">瞬間電費</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>登録日時
                                    </td>
                                    <td>車速
                                    </td>
                                    <td>加速度（x / Y / Z）
                                    </td>
                                    <td>SOC
                                    </td>
                                    <td>エンジン回転数
                                    </td>
                                    <td >アクセル/ スロットル開度
                                    </td>
                                    <td >エンジン 冷却水温
                                    </td>
                                    <td >ブレーキSW
                                    </td>
                                    <td >積算距離
                                    </td>
                                    <td >積算燃料
                                    </td>
                                    <td >バッテリ電圧
                                    </td>
                                    <td >燃料噴射量
                                    </td>
                                    {{--                            <td >燃料噴射量</td>--}}
                                    <td >瞬間電費
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="paginate d-flex">
                        {{ $data->appends(request()->input())->links() }}
                    </div>
                </div>


            </div>
        </div>
        <script>
            $( function() {
                @if (isset($request_data['date_from']))
                    $( "#date-from" ).datepicker("setDate", new Date("{{$request_data['date_from']}}"));
                @else
                    $( "#date-from" ).datepicker();
                @endif

                @if (isset($request_data['date_to']))
                    $( "#date-to" ).datepicker("setDate", new Date("{{$request_data['date_to']}}"));
                @else
                    $( "#date-to" ).datepicker();
                @endif
            } );
        </script>
    </body>
</html>
