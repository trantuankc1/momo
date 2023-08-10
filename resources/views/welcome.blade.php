<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<?php $phone = \App\Models\NumberPhoneMomo::query()->get(); ?>
    <!DOCTYPE html>
<html class="no-js" lang="vi">
<head>
    <title>Hệ Thống Mini Game Chẳn Lẻ Momo Uy Tín - Tự Động</title>
    <meta name="description"
          content="CLMM - Chẵn Lẻ MoMo - chẵn lẻ Momo uy tín và hệ thống thanh toán tự động trong 30s, kiếm Tiền Nhanh Chóng chỉ trong 1 nốt nhạc.">
    <meta name="keywords"
          content="clmm, chan le momo, chẵn lẻ momo, tài xỉu momo, cltx, txmm, minigame, clmm uy tin, clmm 1k">
    <meta property="og:title" content="CLMM.TUBE - Hệ Thống Mini Game Chẳn Lẻ Momo Uy Tín - Tự Động">
    <meta property="og:description"
          content="CLMM - Chẵn Lẻ MoMo - chẵn lẻ Momo uy tín và hệ thống thanh toán tự động trong 30s, kiếm Tiền Nhanh Chóng chỉ trong 1 nốt nhạc.">

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="CLMM - Chẵn Lẻ Tài Xỉu MoMo Uy Tín Hàng Đầu Việt Nam" name="title"/>
    <meta
        content="Chẵn Lẻ MoMo - Mini game giải trí chẵn lẻ Momo uy tín và hệ thống thanh toán tự động trong 30s, kiếm Tiền Nhanh Chóng chỉ trong 1 nốt nhạc."
        name="description"/>
    <meta charset="UTF-8">
    <meta name="robots" content="dofollow">
    <meta name="googlebot" content="doindex">
    <meta
        content="clmm ,chanlemomo,Momo chẵn lẻ,minigame momo,chẵn lẻ momo 24/7,momo cl,chẵn lẻ momo tự động,Chẵn lẻ online"
        name="keywords"/>
    <meta content="article" property="og:type"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content="CLMM - Chẵn Lẻ Tài Xỉu MoMo Uy Tín Hàng Đầu Việt Nam" property="og:title"/>
    <meta
        content="Chẵn Lẻ MoMo - Mini game giải trí chẵn lẻ Momo uy tín và hệ thống thanh toán tự động trong 30s, kiếm Tiền Nhanh Chóng chỉ trong 1 nốt nhạc."
        property="og:description"/>
    <link href="{{asset('bootstrap/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet"/>

    <link href="{{ asset('bootstrap/css/custom.css') }}" rel="stylesheet"/>
    <link href="{{ asset('bootstrap/css/wheel.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-social.css') }}">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/simple-notify.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/home.css') }}"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<div class="mainbar">
    <div class="container">
        <a href="/" class="text-center">
            <div class="hidden-xs ">

            </div>
            <div class="visible-xs ">
                <h2 class="fw-bold text-uppercase" style="color: white">chẵn lẻ momo - xanh chín - uy tín nhanh gọn
                    !</h2>
            </div>
        </a>
    </div>
</div>
<div class="container">
    <div class="content">
        <div class="content-container">
            <div class="text-center mt-3">
                <div class="text-center">
                    <button style="font-size:100%" class="btn btn-default mt-1 hidden" data-toggle="modal"
                            data-bs-toggle="modal" data-bs-target="#chanle"><b> CHẴN LẺ</b>
                    </button>
                    <button style="font-size:100%" class="btn btn-default mt-1 hidden" data-game="taixiu"
                            data-bs-toggle="modal" data-bs-target="#taixiu">
                        <b>TÀI XỈU </b>
                    </button>
                    <button style="font-size:100%" class="btn btn-default btn-primary mt-1 hidden" data-game="chanle2"
                            data-bs-toggle="modal" data-bs-target="#chanle2">
                        <b>CHẴN LẺ 2</b>
                    </button>
                    <button style="font-size:100%" class="btn btn-default btn-primary mt-1 hidden" data-game="taixiu2"
                            data-bs-toggle="modal" data-bs-target="#taixiu2">
                        <b>TÀI XỈU 2</b>
                    </button>
                    <button style="font-size:100%" class="btn btn-default btn-primary mt-1 hidden" data-game="mpb"
                            data-bs-toggle="modal" data-bs-target="#mpb">
                        <b>1 PHẦN 3</b>
                    </button>
                    <button style="font-size:100%" class="btn btn-default mt-1 btn-primary hidden" data-game="gap3"
                            data-bs-toggle="modal" data-bs-target="#gapba">
                        <b> GẤP 3 </b>
                    </button>
                    <button style="font-size:100%" class="btn btn-default btn-primary mt-1 hidden" data-game="xien"
                            data-bs-toggle="modal" data-bs-target="#xien">
                        <b>XIÊN</b>
                    </button>
                    <button class="btn btn-default btn-primary mt-1 hidden" data-game="xsmb" data-bs-toggle="modal"
                            data-bs-target="#xsmb">
                        <b>XSMB</b>
                    </button>
                    <button class="btn btn-default btn-primary mt-1 hidden" data-game="duoi" data-bs-toggle="modal"
                            data-bs-target="#duoi">
                        <b>ĐUÔI</b>
                    </button>
                </div>
                <hr style="margin-bottom:5px;margin-top:15px">
                <div class="text-center" role="group" style="width: 100%">
                    <button class="btn btn-cus mt-1"
                            style="font-size:100%;padding:4px 6px;position: relative;" data-game="nhanmocthang"
                            data-bs-toggle="modal"
                            data-bs-target="#nhanmocthang">
                        <b>NHẬN MỐC THẮNG</b>
                    </button>
                    <button class="btn btn-cus mt-1" data-toggle="modal" data-target="#modal_nvvn"
                            style="font-size:100%;padding:4px 6px;position: relative;" data-game="nhanmocthua"
                            data-bs-toggle="modal"
                            data-bs-target="#nhanmocthua">
                        <b> NHẬN MỐC THUA</b>
                    </button>


                    <button class="btn btn-cus mt-1" data-toggle="modal" data-target="#baoloi"
                            style="font-size:100%;padding:4px 6px;position: relative;" data-game="baoloi"
                            data-bs-toggle="modal"
                            data-bs-target="#baoloi">
                        <b>BÁO LỖI</b></button>

                    <button class="btn btn-cus mt-1" data-toggle="modal" data-target="#giftcode"
                            style="font-size:100%;padding:4px 6px;position: relative;" data-game="giftcode"
                            data-bs-toggle="modal"
                            data-bs-target="#giftcode">
                        <b>NHẬP GIFTCODE</b>
                    </button>
                    <button class="btn btn-primary mt-1" data-toggle="modal" data-target="#kiemtramagiaodich"
                            style="font-size:100%;padding:4px 6px;position: relative;" data-game="kiemtramagiaodich"
                            data-bs-toggle="modal"
                            data-bs-target="#kiemtramagiaodich">
                        <b>KIỂM TRA MÃ GIAO DỊCH</b>
                    </button>
                </div>
                <hr style="margin-top:15px;margin-bottom:10px">
                <div class="row">
                    <div class="animate__animated animate__bounceInDown animate__slow col-md-12 cl">
                        <div class="panel panel-custom">
                            <h4 style="margin-bottom:0px" class="panel-heading text-center"><img
                                    src="{{ asset('image/momo1.png') }}" style="width: 30px">
                                ĐẶT CƯỢC TẠI ĐÂY <img src="{{ asset('image/momo1.png')  }}" style="width: 30px"></h4>
                            <div class="text-center row m-1">
                                <div class="form-group">

                                    <div class="col-xs-8">
                                        <div class="mt-3">
                                            <input type="text" class="form-control" name="sotien"
                                                   id="sotien" placeholder="Nhập số tiền đặt cược">
                                        </div>
                                    </div>
                                    <div style="padding-left:0px" class="col-xs-4">
                                        <div class="mt-3">
                                            <select id="magame" class="form-control" name="magame">
                                                <option value="10">Chẵn (10)</option>
                                                <option value="11">Lẻ (11)</option>
                                                <option value="15">Tài (15)</option>
                                                <option value="14">Xỉu (14)</option>
                                                <option value="12">Chẵn 2 (12)</option>
                                                <option value="13">Lẻ 2 (13)</option>
                                                <option value="17">Tài 2 (17)</option>
                                                <option value="16">Xỉu 2 (16)</option>
                                                <option value="21">N1 (21)</option>
                                                <option value="22">N2 (22)</option>
                                                <option value="23">N3 (23)</option>
                                                <option value="33">Gấp 3 (33)</option>
                                                <option value="25">CX (25)</option>
                                                <option value="26">LT (26)</option>
                                                <option value="27">CT (27)</option>
                                                <option value="28">LX (28)</option>
                                                <option value="99">XSMB (99)</option>
                                                <option value="49">Đuôi (49)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 mt-3">
                                        <div id="notePlay" class="hidden" style="margin-top:5px;padding:10px"></div>
                                        <button id="btnNext" style="width:100%;font-weight:800;"
                                                class="btn btn-primary mb-3 play-game-button"
                                        >XÁC NHẬN ĐẶT CƯỢC <i style="padding-left:5px"
                                                              class="fa-solid fa-play"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 cl animate__animated animate__fadeInRight animate__slow">
                        <div class="panel panel-primary" style="margin-top:0px">
                            <div class="panel-heading text-center">

                                <h4 style="margin-bottom:0px">KIỂM TRA LỊCH SỬ CHƠI</h4>
                            </div>

                            <div class="panel-body text-center">
                                <div class="panel-body" style="padding-top: 10px; padding-bottom: 20px;"><p
                                        class="modal-body"></p>
                                    <h3 style="text-align: center;"><span style="color: #ff0000;"><strong>HỆ THỐNG GAME MOMO UY TÍN SỐ 1 VN</strong></span>
                                    </h3>
                                    <h3 style="margin-bottom: 10px; font-family: Tahoma; font-weight: 400; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; text-align: center;">
                                        <span id="input_part_0"
                                              data-mention="Do Momo update 4.0.16 có &quot;Mã tham chiếu = biết trước Mã giao dịch&quot;, nên web sẽ tính bill như sau">Momo 4.0.16 Mã tham chiếu</span>
                                    </h3>
                                    <h3 style="margin-bottom: 10px; font-family: Tahoma; font-weight: 400; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; text-align: center;">
                                        🔥 UPDATE LUẬT CHƠI MỚI🔥<br>
                                        <p id="input_line_0"
                                           style="margin-right: 0px; margin-bottom: 3px; margin-left: 0px; font-family: Tahoma, Verdana, Helvetica, sans-serif; font-size: 14px;">
                                            Do momo hiển thị mã tham chiếu trùng với mã giao dịch vậy nên kết quả Ae
                                            chơi sẽ được tính như sau</p>
                                        <p style="margin-right: 0px; margin-bottom: 3px; margin-left: 0px; font-family: Tahoma, Verdana, Helvetica, sans-serif; font-size: 14px;">
                                            <span style="color: rgb(255, 0, 0);"><span style="font-weight: 700;">KẾT QUẢ =&nbsp;</span></span><span
                                                style="color: rgb(255, 0, 0);"><span style="font-weight: 700;">Mã giao dịch + Mã random"</span></span>
                                        </p></h3>
                                    <h4 style="margin-bottom: 10px; font-family: Tahoma; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 18px; text-align: center;">
                                        <br></h4>
                                    <h3 style="margin-bottom: 10px; font-family: Tahoma; font-weight: 400; line-height: 1.1; color: rgb(51, 51, 51); font-size: 24px; text-align: center;">
                                        <p style="margin-right: 0px; margin-bottom: 3px; margin-left: 0px; font-family: Tahoma, Verdana, Helvetica, sans-serif; font-size: 14px;">
                                            <span
                                                style="color: rgb(99, 98, 98); font-family: Quicksand, sans-serif; background-color: var(--bg-white);">1. Chẵn lẻ Tài xỉu số cuối mã giao dịch ra 0, 9 sẽ tính Thua, Nếu muốn có 0 và 9 vui lòng chơi Chẵn lẻ 2.</span><br>
                                        </p>
                                        <p style="margin-bottom: 1em; color: rgb(99, 98, 98); font-family: Quicksand, sans-serif; font-size: 14px;">
                                            2. Mỗi số trên web chỉ có thể giao dịch tối đa&nbsp;45<span
                                                style="font-weight: 650;">&nbsp;triệu</span>&nbsp;hoặc&nbsp;<span
                                                style="font-weight: 650;">190 lần</span>&nbsp;một ngày. Vì vậy số trên
                                            hệ thống sẽ thay đổi liên tục nên trước khi chơi (Clmm) chẵn lẻ momo bạn hãy
                                            lên lấy số trước, Tránh trường hợp bị hoàn tiền.</p>
                                        <p style="margin-bottom: 1em; color: rgb(99, 98, 98); font-family: Quicksand, sans-serif; font-size: 14px;">
                                            3. Nếu chuyển sai hạn mức, , Sai nội dung, không có nội dung sẽ không được
                                            hoàn tiền&nbsp;.</p>
                                        <p style="margin-bottom: 1em; color: rgb(99, 98, 98); font-family: Quicksand, sans-serif; font-size: 14px;">
                                            4. Nếu bạn&nbsp;<span style="color: rgb(255, 0, 0);"><span
                                                    style="font-weight: 650;">CẦN HỖ TRỢ, BÁO LỖI&nbsp;</span></span>hãy
                                            chat với Nhân viên của web tại&nbsp;<span style="font-weight: 650;">Góc phải màn hình</span>&nbsp;(Trực
                                            24/7, Chỉ hỗ trợ các giao dịch trong ngày)</p>
                                        <p style="margin-right: 0px; margin-bottom: 3px; margin-left: 0px; font-family: Tahoma, Verdana, Helvetica, sans-serif; font-size: 14px;">
                                            <span
                                                data-mention="Hãy tham gia group telegram báo mã gd để cập nhật bill của bạn nhanh nhất."></span>
                                        </p>
                                        <p style="margin-bottom: 0px; color: rgb(99, 98, 98); font-family: Quicksand, sans-serif; font-size: 14px;">
                                            <span
                                                style="font-weight: 650;">Chẵn lẻ Momo . Clmm . Cltx . Chẵn lẻ Momo 6k</span>
                                        </p></h3>
                                    <p></p></div>
                            </div>
                        </div>
                    </div>

                    <div class="animate__animated animate__bounceInDown animate__slow col-md-6 cl">
                        <div class="panel panel-primary">
                            <h4 id="CheckMGD" style="margin-bottom:0px" class="panel-heading text-center">
                                LỊCH SỬ THẮNG {{ date('d/m/Y') }}
                            </h4>
                            <div class="panel-body text-center" style="padding:0px">
                                <div style="padding:5px;" class="mb-0 table-responsive">
                                    <table style="padding-bottom:0px;"
                                           class="table table-striped table-bordered gy-5 mb-0">
                                        <thead>
                                        <tr class="fw-bold fs-6 text-gray-800">
                                            <th class="text-center text-white bg-cus">
                                                <span class="fs-sm">Số Momo</span>
                                            </th>
                                            <th class="text-center text-white bg-cus">
                                                <span class="fs-sm">Cược</span>
                                            </th>
                                            <th class="text-center text-white bg-cus">
                                                <span class="fs-sm">Trò chơi</span>
                                            </th>
                                            <th class="text-center text-white bg-cus"><span
                                                    class="fs-sm">Thời Gian</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-center" id="history">
                                        @for($random = 1; $random <=10; $random++)
                                            <tr>
                                                <td>0989{{ random_int(10, 99) }}****</td>
                                                <td>{{ number_format(random_int(10000, 2000000)) }} vnđ</td>
                                                <td>CL</td>
                                                <td>{{ date('d/m/Y') }}</td>
                                            </tr>
                                        @endfor

                                        </tbody>
                                    </table>
                                </div>
                                <div
                                    style="margin: 0px 5px; float: center; border: 1px dashed rgb(37 71 105); padding: 5px;font-size: 15px;text-align:center;">
                                    <b>Làm mới liên tục <span class="text-danger coundown-time"><img
                                                src="{{ asset('image/loading.gif') }}" alt=""></span></b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>

                    <div class="animate__animated animate__bounceInDown animate__slow col-md-6 cl">
                        <div class="panel panel-primary mt-3 week_top hidden">
                            <div class="panel-heading text-center">
                                <h4 style="margin-bottom:0px">BẢNG XẾP HẠNG </h4>
                            </div>
                            <div style="padding:5px;" class="mb-0 table-responsive">
                                <table style="padding-bottom:0px;" class="table table-striped table-bordered gy-5 mb-0">
                                    <thead>
                                    <tr role="row" class="fw-bold fs-6">
                                        <th class="fs-sm text-center text-white bg-cus">TOP</th>
                                        <th class="text-center text-white bg-cus">Số Momo</th>
                                        <th class="text-center text-white bg-cus"> Đã pem</th>
                                        <th class="text-center text-white bg-cus">Thưởng</th>
                                    </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all" id="week_top"
                                           class="text-center">
                                    @for($random = 1; $random <=10; $random++)
                                        <tr>
                                            <td><img src="{{ asset('image/1.png')  }}" alt=""></td>
                                            <td>0983***{{ random_int(111,999)  }}</td>
                                            <td>{{ number_format(random_int(1000000, 20000000)) }}vnđ</td>
                                            <td>{{ number_format(random_int(100000, 500000)) }}vnđ</td>
                                        </tr>
                                    @endfor
                                    </tbody>
                                </table><!--<div style="margin: 0px; float: center; border: 1px dashed rgb(37 71 105); padding: 5px;font-size: 13px;text-align:center;">
<b class="text-danger">Phần thưởng TOP sẽ được trao vào 24h mỗi ngày.</b>
</div>-->
                            </div>

                        </div>

                    </div>
                    <div class="animate__animated animate__bounceInDown animate__slow col-md-6 cl">
                        <div class="panel panel-primary mt-3 day_top hidden">
                            <div class="panel-heading text-center">
                                <h4 style="margin-bottom:0px">TOP PEM HÔM NAY {{ date('d/m/Y ') }}</h4>
                            </div>
                            <div style="padding:5px;" class="mb-0 table-responsive">
                                <table style="padding-bottom:0px;" class="table table-striped table-bordered gy-5 mb-0">
                                    <thead>
                                    <tr role="row" class="fw-bold fs-6">
                                        <th class="fs-sm text-center text-white bg-cus">TOP</th>
                                        <th class="text-center text-white bg-cus">Số Momo</th>
                                        <th class="text-center text-white bg-cus"> Đã pem</th>
                                        <th class="text-center text-white bg-cus">Thưởng</th>
                                    </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all" id="day_top"
                                           class="text-center">
                                    @for($random = 1; $random <=10; $random++)
                                        <tr>
                                            <td>{{ $random }}</td>
                                            <td>0987***{{ random_int(111,999)  }}</td>
                                            <td>{{ number_format(random_int(1000000, 20000000)) }}vnđ</td>
                                            <td>{{ number_format(random_int(100000, 500000)) }}vnđ</td>
                                        </tr>
                                    @endfor

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>


                    <div class="panel panel-primary mt-3">
                        <div class="panel-heading text-center">
                            <h4 style="margin-bottom:0px">LỊCH SỬ ĂN CODE</h4>
                        </div>
                        <div style="padding-bottom:0px;" class="mb-0 table-responsive">

                            <div id="bucode" style="padding:5px">
                                <div id="ttt">
                                    <div class="">
                                        <div style="width: 100%;">
                                            <table class="table table-striped table-bordered text-center"
                                                   style="margin-bottom:0px;margin-top:-1px;">
                                                <thead>
                                                <tr role="row" class="bg-primary">
                                                    <th class="text-center text-white">Số điện thoại</th>
                                                    <th class="text-center text-white">Giftcode</th>
                                                    <th class="text-center text-white">Số tiền</th>


                                                </tr>
                                                </thead>
                                                <tbody role="alert" aria-live="polite" aria-relevant="all" id="week_top"
                                                       class="text-center">

                                                <tr>
                                                    <!-- <td class="fw-semibold  fs-sm">****</td>-->
                                                    <td class="fw-semibold  fs-sm">0987***686</td>
                                                    <td class="fw-semibold  fs-sm">ELIEWT****</td>
                                                    <td class="fw-semibold  fs-sm" style="">8.221đ</td>

                                                </tr>
                                                <tr>
                                                    <!-- <td class="fw-semibold  fs-sm">****</td>-->
                                                    <td class="fw-semibold  fs-sm">0987***335</td>
                                                    <td class="fw-semibold  fs-sm">MY1I1J****</td>
                                                    <td class="fw-semibold  fs-sm" style="">8.153đ</td>

                                                </tr>
                                                <tr>
                                                    <!-- <td class="fw-semibold  fs-sm">****</td>-->
                                                    <td class="fw-semibold  fs-sm">0987***121</td>
                                                    <td class="fw-semibold  fs-sm">LJQVSR****</td>
                                                    <td class="fw-semibold  fs-sm" style="">6.395đ</td>

                                                </tr>
                                                <tr>
                                                    <!-- <td class="fw-semibold  fs-sm">****</td>-->
                                                    <td class="fw-semibold  fs-sm">0987***208</td>
                                                    <td class="fw-semibold  fs-sm">4TMSKI****</td>
                                                    <td class="fw-semibold  fs-sm" style="">4.459đ</td>

                                                </tr>
                                                <tr>
                                                    <!-- <td class="fw-semibold  fs-sm">****</td>-->
                                                    <td class="fw-semibold  fs-sm">0987***392</td>
                                                    <td class="fw-semibold  fs-sm">JV4XC3****</td>
                                                    <td class="fw-semibold  fs-sm" style="">5.153đ</td>

                                                </tr>
                                                </tbody>
                                            </table>
                                            <div
                                                style="margin: 0px; float: center; border: 1px dashed rgb(37 71 105); padding: 5px;font-size: 15px;text-align:center;">
                                                <b><img src="{{ asset('image/loading.gif') }}" style="width:20px"> Cập
                                                    nhật liên tục</b>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="mt-5 panel panel-primary">
        </div>
        {{--        <div id="hu-left-display"--}}
        {{--             style="position: fixed; bottom: 15px; left: 15px; z-index: 1000; cursor: pointer; width: 15%;"--}}
        {{--             class="hidden">--}}
        {{--            <div onclick="$('#hu-left-display').hide()" class="" style="left: 120%; position: absolute;">--}}
        {{--                <font color="red">--}}
        {{--                    <big><b>[X]</b></big>--}}
        {{--                </font>--}}
        {{--            </div>--}}
        {{--            <b>--}}
        {{--                <center><img class="animate__animated animate__heartBeat animate__infinite infinite"--}}
        {{--                             src="{{ asset('image/hu.gif') }}" width="130%"--}}
        {{--                             style="max-height: 130px;max-width: 150px;min-height: 50px; min-width:80px;"/>--}}
        {{--                </center>--}}
        {{--                <center class="animate__animated animate__heartBeat animate__infinite infinite solid" style="            border-radius: 5px;margin-left:5px;--}}
        {{--            background:aquamarine;">--}}
        {{--                    NỔ HŨ--}}
        {{--                </center>--}}
        {{--            </b>--}}
        {{--        </div>--}}
    </div>
</div>

<div class="social-button">
    <div class="social-button-content">
        <div class="phone-vr-img-circle">
            <?php $tele = \App\Models\Telegram::query()->get(); ?>
            @foreach($tele as $tl)
                <a href="{{ $tl->link }}" class="mes" target="_blank">
                    <img src="{{ asset('image/tele.png') }}" data-source="lazyload" data-lazy="images/tele.png"
                         style="width: 40px; height: 40px;">
                </a>
            @endforeach
        </div>
    </div>


</div>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading text-center"><h4>Giới Thiệu</h4></div>
        <div class="panel-body">
            <div class="footer-descriptopm text-left"><strong>Chẵn lẻ momo</strong> là một loại trò chơi giải trí, có
                thể giúp bạn kiếm tiền nhanh chóng chỉ sau vài thao tác trên momo. nó thuộc loại trò chơi cá cược và
                hiện đang khá là phổ biến trong giới trẻ hiện nay bởi tính minh bạch, xanh chín của nó.Chơi chẵn lẻ trên
                momo là trò chơi cá cược chuyển tiền dựa trên MÃ DỰ THƯỞNG được sinh ra bởi hệ thống. mà các bạn sẽ có
                những lựa chọn chẵn hoặc lẻ, tài hoặc xỉu để điền vào nội dung lúc chuyển khoản. Nếu đoán đúng, các bạn
                sẽ nhận được tiền từ hệ thống tự động chuyển khoản lại ngay sau đó 10s - 15s (số tiền thưởng sẽ bằng số
                tiền cược nhân với tỉ lệ cược do website quy định. Nếu dự đoán sai, các bạn sẽ bị mất số tiền đã đặt
                cược.<h3>Ưu điểm khi chơi chẵn lẻ trên momo:</h3>
                <ul>
                    <li>Là loại mini game với lối chơi cực kỳ đơn giản, dễ hiểu</li>
                    <li>Nhận thưởng nhanh chỉ khoảng tầm 10s -30s</li>
                    <li>Là game xanh chín nhất trong các loại game cá cược</li>
                    <li>Có thể chơi mọi lúc, mọi nơi, chỉ cần bạn có tk momo là chơi được.</li>
                </ul>
                <h3>Nhược điểm game chẵn lẻ momo:</h3>
                <ul>
                    <li>Là thể loại game chơi mới nên chưa phổ biến rộng rãi. người chơi thể loại game <span
                            style="text-decoration: underline;">chẵn lẻ momo</span> đa phần là dân tricker và dân free
                        fire
                    </li>
                    <li>Nhiều website lừa đảo tạo ra nhưng không trả thưởng cho người chơi.</li>
                    <li>Chơi chẵn lẻ momo thuộc thể loại game cờ bạc online</li>
                </ul>
                <h3>Hướng dẫn chơi chẵn lẻ bằng tài khoản Momo</h3>
                <ul>
                    <li><strong>Bước 1:</strong> Các bạn truy cập vào trang chủ website CLMM.PE, ngay phía dưới logo có
                        các thể loại game "Chẵn lẻ", "Chẵn lẻ 2", "Tài xỉu", "Tài xỉu 2", "1 phần 3" ae ấn chọn 1 trong
                        số đó để chơi, ví dụ: Chẵn lẻ.
                    </li>
                    <li><strong>Bước 2:</strong> Sau khi ấn chọn game chẵn lẻ, thì bên dưới sẽ hiển thị hướng dẫn chơi
                        và các sđt nhận tiền cược. ae chọn coppy 1 sđt bất kỳ trong các số đó, và lưu ý ngay bên cạnh
                        các sđt đó có ghi mức cược tối thiểu, và cược tối đa mà ae có thể cược. như hiện tại đối với
                        <strong>trò chẵn lẻ momo</strong> thì Mức cược tối thiểu là 20.000 VND và mức cược tối đa là
                        1.000.000 VND.
                    </li>
                    <li><strong>Bước 3:</strong> Sau khi coppy sđt, ae xem kỹ nội dung chuyển tương đương với sự lựa
                        chọn, dự đoán của ae cho số cuối của MÃ DỰ THƯỞNG.
                        <ul>
                            <li><strong>(B):</strong> 2 - 4 - 6 - 8</li>
                            <li><strong>(A):</strong> 1 - 3 - 5 - 7</li>
                            <li><strong>Thưởng:</strong> x2.55 tiền cược</li>
                            <li></li>
                            <li><strong>(B2):</strong> 1 - 3 - 5 - 7 - 9</li>
                            <li><strong>(A2):</strong> 0 -2 - 4 - 6 - 8</li>
                            <li><strong>Thưởng:</strong> x1.95 tiền cược</li>
                            <li></li>
                            <li><strong>Tài (Q):</strong> 5 - 6 - 7 - 8</li>
                            <li><strong>Xỉu (E):</strong> 1 - 2 - 3 - 4</li>
                            <li><strong>Thưởng:</strong> x2.55 tiền cược</li>
                            <li></li>
                            <li><strong>Tài (Q2):</strong> 5 - 6 - 7 - 8 - 9</li>
                            <li><strong>Xỉu (E2):</strong> 0 - 1 - 2 - 3 - 4</li>
                            <li><strong>Thưởng:</strong> x1.95 tiền cược</li>
                            <li></li>
                            <li><strong>(1):</strong> 1 2 3</li>
                            <li><strong>(2):</strong> 4 5 6</li>
                            <li><strong>(3):</strong> 7 8 9</li>
                            <li><strong>Thưởng:</strong> x3 tiền cược</li>
                        </ul>
                    </li>
                </ul>
                <strong>Ví dụ:</strong> Ae dự đoán số cuối MÃ DỰ THƯỞNG momo khả năng sẽ là số lẻ, mà lẻ thì là (A) hoặc
                (A2). ae chọn (A2) thì coppy sđt bất kỳ trong dãy sđt bên trên rồi vào mục chuyển tiền trên momo, ae
                muốn cược 100k. phần nội dung chuyển khoản ae gõ chữ B và ấn chuyển khoản. sau khi chuyển khoản xong, ae
                xem MÃ DỰ THƯỞNG của hệ thống tự sinh ra của bill đó là gì, số cuối của MÃ DỰ THƯỞNG đó là chẵn hay lẻ,
                ví dụ nó là số 3, thì là lẻ. mà ae chọn B thì ae đợi khoảng 10 - 15s . bên hệ thống sẽ tự động chuyển
                lại với số tiền là 100k x 2,55 = 255.000đ . còn nếu số cuối mã gd k về như ae nghĩ thì ae mất số tiền
                cược đó.<h3>Mẹo chơi chẵn lẻ momo, thủ thuật ăn liên tục</h3>
                <ul>
                    <li>Tắm rửa xạch sẽ, thắp hương các cụ, chuẩn bị cho mình 1 tinh thần thật thoải mái để chơi.</li>
                    <li>Bạn cũng như tôi, chúng ta k thể đoán trước được số cuối của MÃ DỰ THƯỞNG là gì, vậy nên hãy
                        chọn cho mình 1 website chẵn lẻ uy tín, và có tỉ lệ x cao để đánh.
                    </li>
                    <li>Đánh thử vài ván cược nhỏ trước, nếu thua 4, 5 lần liên tiếp thì hãy dừng lại, nghỉ, để lúc khác
                        đánh.
                    </li>
                    <li>Đánh gấp thếp theo x1 - 3 - 5 - 9.</li>
                    <li>Nếu thắng hãy chớp cơ hội đỏ đánh to hơn thêm vài ván. win nghỉ. k win cũng nghỉ.</li>
                    <li>Hãy coi chẵn lẻ momo là trò chơi giải trí, thích vào thả 1, 2 phát rồi ra chứ đừng đam mê,
                        nghiện là dở.
                    </li>
                    <li>Không nên đánh liền 1 phát nguyên chẵn hoặc nguyên lẻ, vì nếu đen thì xác định luôn</li>
                    <li>Nên biết điểm dừng. đừng tham lam.</li>
                </ul>
                <h3>Một số lưu ý cần thiết khi chơi chẵn lẻ momo:</h3>
                <ul>
                    <li>Nội dung chuyển không phân biệt in hoa, thường. Nếu chuyển sai hạn mức hoặc sai nội dung, hoặc
                        chuyển nhầm số bảo trì, vui lòng ibox admin để được hỗ trợ
                    </li>
                    <li>Số MoMo nhận tiền thường xuyên được cập nhật, vì thế trước khi chơi hãy vào web để lấy đúng số,
                        tránh bank nhầm mất oan.
                    </li>
                    <li>Chế độ "Chẵn lẻ" không tính số đuôi 0 và 9. Muốn có cả 2 thì bạn chọn qua chế độ "Chẵn lẻ 2" để
                        chơi.
                    </li>
                    <li>Chế độ "Tài xỉu" không tính số đuôi 0 và 9. Muốn có cả 2 thì bạn chọn qua chế độ "Tài xỉu 2" để
                        chơi.
                    </li>
                    <li>Nếu bạn chiến thắng, vui lòng chờ từ 10 - 20 giây hệ thống sẽ tự động chuyển trả thưởng cho
                        bạn.
                    </li>
                    <li>Nếu chuyển sai hạn mức hoặc sai nội dung sẽ không được hoàn.</li>
                </ul>
                <strong>Kết Luận:</strong> <span style="text-decoration: underline;">Chẵn lẻ momo</span> là một loại
                mini game khá là hay, ae có thể giải trí những lúc rảnh, hoặc cũng có thể kiếm tiền, kiếm nhiều tiền từ
                nó. chơi chẵn lẻ trên momo là loại game xanh chín, dễ chơi, dễ trúng,. Chúc ae kiếm thật nhiều tiền nhé
                !!!!!!!
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container text-center">
        <div class="row">
            <div class="col-xs-12 text-white ">
                Copyright 2023 © CLMM | All rights reserved
            </div>
            <div class="col-xs-12 text-white ">
                Được thành lập vào tháng 12 năm 2022
            </div>
        </div>
    </div>
</footer>

<!-- Modal chẵn lẻ -->
<div class="modal fade" id="chanle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Chẵn Lẻ</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">chi tiết cách chơi</h5>
                <p><b>CHẴN LẺ</b> là một game tính kết quả bằng
                    1 số cuối của <b style="color: red">Mã Kết Quả</b></p>
                <div class="text-uppercase" style="color: white">
                    <span class="label label-success">mã kết quả</span> <span style="color: black">=</span> <span
                        class="label label-danger">mã giao dịch</span> <span style="color: black">+</span> <span
                        class="label label-primary">mã random</span>
                </div>

                <span style="cursor: pointer; display: inline-block; margin-top: 15px;" class="text-capitalize fw-bold">mã random</span>
                <div id="number">
                </div>
                <div class="border-bottom" style="border-bottom: 1px solid red"></div>
                <span>Chuyển tiền vào một trong các tài khoản:</span>

                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">số điện thoại</td>
                        <td class="text-center text-white bg-success">hạn mức cược</td>
                        <td class="text-center text-white bg-success">số lần</td>
                    </tr>
                    <tbody class="text-center">
                    <?php $chanle = \App\Models\ChanLe::query()->get(); ?>
                    @foreach($phone as $numberphone)
                        <tr @if($numberphone->status == 2) style="display: none" @endif>
                            <td id="sdt">{{ $numberphone->sdt }}
                            </td>
                            @foreach($chanle as $cl)
                                <td class="text-center"><span class="btn btn-info"> {{ $cl->price_min }}</span> <span
                                        class="fw-bold">-></span>
                                    <span class="btn btn-info">{{ $cl->price_max }}</span></td>
                                <td>{{ $numberphone->soluot }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">mã game</td>
                        <td class="text-center text-white bg-success">số cuối</td>
                        <td class="text-center text-white bg-success">tỉ lệ</td>
                    </tr>
                    <tbody class="text-center">
                    <tr>
                        <td>10</td>
                        <td class="text-center"><span class="btn btn-info">2</span> <span class="btn btn-info">4</span>
                            <span class="btn btn-info">6</span> <span class="btn btn-info">8</span></td>
                        @foreach($chanle as $cl)
                            <td><span class="btn btn-info">{{ $cl->tile }}</span></td>
                        @endforeach
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="text-center"><span class="btn btn-info">1</span> <span class="btn btn-info">3</span>
                            <span class="btn btn-info">5</span> <span class="btn btn-info">7</span></td>
                        @foreach($chanle as $cl)
                            <td><span class="btn btn-info">{{ $cl->tile }}</span></td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
                <div class="text-uppercase text-center" style="color: white">
                    <span class="label label-success">tiền thắng</span> <span style="color: black">=</span> <span
                        class="label label-danger">tiền cược</span> <span style="color: black">x</span> <span
                        class="label label-primary">tỉ lệ</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Tài xỉu-->
<div class="modal fade" id="taixiu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tài Xỉu</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">chi tiết cách chơi</h5>
                <p><b>Tài Xỉu</b> là một game tính kết quả bằng
                    1 số cuối của <b style="color: red">Mã Kết Quả</b></p>
                <div class="text-uppercase" style="color: white">
                    <span class="label label-success">mã kết quả</span> <span style="color: black">=</span> <span
                        class="label label-danger">mã giao dịch</span> <span style="color: black">+</span> <span
                        class="label label-primary">mã random</span>
                </div>

                <span style="cursor: pointer; display: inline-block; margin-top: 15px;" class="text-capitalize fw-bold">mã random</span>
                <div id="number">
                </div>
                <div class="border-bottom" style="border-bottom: 1px solid red"></div>
                <span>Chuyển tiền vào một trong các tài khoản:</span>

                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">số điện thoại</td>
                        <td class="text-center text-white bg-success">hạn mức cược</td>
                        <td class="text-center text-white bg-success">số lần</td>
                    </tr>
                    <tbody class="text-center">
                    <?php $taixiu = \App\Models\TaiXiu::query()->get(); ?>
                    @foreach($phone as $number)
                        <tr @if($number->status == 2) style="display: none" @endif>
                            <td id="sdt">{{ $number->sdt }}
                            </td>
                            @foreach($taixiu as $tx)
                                <td class="text-center"><span class="btn btn-info">{{ $tx->price_min }}</span> <span
                                        class="fw-bold">-></span>
                                    <span class="btn btn-info">{{ $tx->price_max }}</span></td>
                            @endforeach
                            <td>{{ $number->soluot }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">mã game</td>
                        <td class="text-center text-white bg-success">số cuối</td>
                        <td class="text-center text-white bg-success">tỉ lệ</td>
                    </tr>
                    <tbody class="text-center">
                    @foreach($taixiu as $tx)
                        <tr>
                            <td>15</td>
                            <td class="text-center"><span class="btn btn-info">5</span> <span
                                    class="btn btn-info">6</span>
                                <span class="btn btn-info">7</span> <span class="btn btn-info">8</span></td>
                            <td><span class="btn btn-info">{{ $tx->tile }}</span></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td class="text-center"><span class="btn btn-info">1</span> <span
                                    class="btn btn-info">2</span>
                                <span class="btn btn-info">3</span> <span class="btn btn-info">4</span></td>
                            <td><span class="btn btn-info">{{ $tx->tile }}</span></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-uppercase text-center" style="color: white">
                    <span class="label label-success">tiền thắng</span> <span style="color: black">=</span> <span
                        class="label label-danger">tiền cược</span> <span style="color: black">x</span> <span
                        class="label label-primary">tỉ lệ</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal chẵn lẻ 2-->
<div class="modal fade" id="chanle2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Chẵn Lẻ 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">chi tiết cách chơi</h5>
                <p><b>Chẵn Lẻ 2</b> là một game tính kết quả bằng
                    1 số cuối của <b style="color: red">Mã Kết Quả</b></p>
                <div class="text-uppercase" style="color: white">
                    <span class="label label-success">mã kết quả</span> <span style="color: black">=</span> <span
                        class="label label-danger">mã giao dịch</span> <span style="color: black">+</span> <span
                        class="label label-primary">mã random</span>
                </div>

                <span style="cursor: pointer; display: inline-block; margin-top: 15px;" class="text-capitalize fw-bold">mã random</span>
                <div id="number">
                </div>
                <div class="border-bottom" style="border-bottom: 1px solid red"></div>
                <span>Chuyển tiền vào một trong các tài khoản:</span>

                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">số điện thoại</td>
                        <td class="text-center text-white bg-success">hạn mức cược</td>
                        <td class="text-center text-white bg-success">số lần</td>
                    </tr>
                    <tbody class="text-center">
                    <?php $chanlehai = \App\Models\ChanLeHai::query()->get(); ?>
                    @foreach($phone as $number)
                        <tr @if($number->status == 2) style="display: none" @endif>
                            <td id="sdt">{{ $number->sdt }}
                            </td>
                            @foreach($chanlehai as $clh)
                                <td class="text-center"><span class="btn btn-info">{{ $clh->price_min }}</span> <span
                                        class="fw-bold">-></span>
                                    <span class="btn btn-info">{{ $clh->price_max }}</span></td>
                            @endforeach
                            <td>{{ $number->soluot }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table class="table table-hover table-bordered text-capitalize mt-3">
                    @foreach($chanlehai as $clx)
                        <tr>
                            <td class="text-center text-white bg-success">mã game</td>
                            <td class="text-center text-white bg-success">số cuối</td>
                            <td class="text-center text-white bg-success">tỉ lệ</td>
                        </tr>
                        <tbody class="text-center">
                        <tr>
                            <td>12</td>
                            <td class="text-center"><span class="btn btn-info">0</span> <span
                                    class="btn btn-info">2</span>
                                <span class="btn btn-info">4</span> <span class="btn btn-info">6</span> <span
                                    class="btn btn-info">8</span></td>
                            <td><span class="btn btn-info">{{ $clx->tile }}</span></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td class="text-center"><span class="btn btn-info">1</span> <span
                                    class="btn btn-info">3</span>
                                <span class="btn btn-info">5</span> <span class="btn btn-info">7</span> <span
                                    class="btn btn-info">9</span></td>
                            <td><span class="btn btn-info">{{ $clx->tile }}</span></td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
                <div class="text-uppercase text-center" style="color: white">
                    <span class="label label-success">tiền thắng</span> <span style="color: black">=</span> <span
                        class="label label-danger">tiền cược</span> <span style="color: black">x</span> <span
                        class="label label-primary">tỉ lệ</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Tài Xỉu 2-->
<div class="modal fade" id="taixiu2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tài Xỉu 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">chi tiết cách chơi</h5>
                <p><b>Tài Xỉu 2</b> là một game tính kết quả bằng
                    1 số cuối của <b style="color: red">Mã Kết Quả</b></p>
                <div class="text-uppercase" style="color: white">
                    <span class="label label-success">mã kết quả</span> <span style="color: black">=</span> <span
                        class="label label-danger">mã giao dịch</span> <span style="color: black">+</span> <span
                        class="label label-primary">mã random</span>
                </div>

                <span style="cursor: pointer; display: inline-block; margin-top: 15px;" class="text-capitalize fw-bold">mã random</span>
                <div id="number">
                </div>
                <div class="border-bottom" style="border-bottom: 1px solid red"></div>
                <span>Chuyển tiền vào một trong các tài khoản:</span>

                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">số điện thoại</td>
                        <td class="text-center text-white bg-success">hạn mức cược</td>
                        <td class="text-center text-white bg-success">số lần</td>
                    </tr>
                    <tbody class="text-center">
                    <?php $taixiuhai = \App\Models\TaiXiuHai::query()->get(); ?>
                    @foreach($phone as $number)
                        <tr @if($number->status == 2) style="display: none" @endif>
                            <td id="sdt">{{ $number->sdt }}
                            </td>
                            @foreach($taixiuhai as $txh)
                                <td class="text-center"><span class="btn btn-info">{{ $txh->price_min }}</span> <span
                                        class="fw-bold">-></span>
                                    <span class="btn btn-info">{{ $txh->price_max }}</span></td>
                            @endforeach
                            <td>{{ $number->soluot }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">mã game</td>
                        <td class="text-center text-white bg-success">số cuối</td>
                        <td class="text-center text-white bg-success">tỉ lệ</td>
                    </tr>
                    <tbody class="text-center">
                    @foreach($taixiuhai as $txh)
                        <tr>
                            <td>17</td>
                            <td class="text-center"><span class="btn btn-info">5</span> <span
                                    class="btn btn-info">6</span>
                                <span class="btn btn-info">7</span> <span class="btn btn-info">8</span> <span
                                    class="btn btn-info">9</span></td>
                            <td><span class="btn btn-info">{{ $txh->tile }}</span></td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td class="text-center"><span class="btn btn-info">0</span> <span
                                    class="btn btn-info">1</span>
                                <span class="btn btn-info">2</span> <span class="btn btn-info">3</span> <span
                                    class="btn btn-info">4</span></td>
                            <td><span class="btn btn-info">{{ $txh->tile }}</span></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-uppercase text-center" style="color: white">
                    <span class="label label-success">tiền thắng</span> <span style="color: black">=</span> <span
                        class="label label-danger">tiền cược</span> <span style="color: black">x</span> <span
                        class="label label-primary">tỉ lệ</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 1 phần 3-->
<div class="modal fade" id="mpb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">1 Phần 3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">chi tiết cách chơi</h5>
                <p><b>1 Phần 3</b> là một game tính kết quả bằng
                    1 số cuối của <b style="color: red">Mã Kết Quả</b></p>
                <div class="text-uppercase" style="color: white">
                    <span class="label label-success">mã kết quả</span> <span style="color: black">=</span> <span
                        class="label label-danger">mã giao dịch</span> <span style="color: black">+</span> <span
                        class="label label-primary">mã random</span>
                </div>

                <span style="cursor: pointer; display: inline-block; margin-top: 15px;" class="text-capitalize fw-bold">mã random</span>
                <div id="number">
                </div>
                <div class="border-bottom" style="border-bottom: 1px solid red"></div>
                <span>Chuyển tiền vào một trong các tài khoản:</span>

                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <?php $motpb = \App\Models\MotPhanBa::query()->get(); ?>

                    <tr>
                        <td class="text-center text-white bg-success">số điện thoại</td>
                        <td class="text-center text-white bg-success">hạn mức cược</td>
                        <td class="text-center text-white bg-success">số lần</td>
                    </tr>
                    <tbody class="text-center">
                    @foreach($phone as $number)
                        <tr @if($number->status == 2) style="display: none" @endif>
                            <td id="sdt">{{ $number->sdt }}
                            </td>
                            @foreach($motpb as $mpba)
                                <td class="text-center"><span class="btn btn-info">{{ $mpba->price_min }}</span> <span
                                        class="fw-bold">-></span>
                                    <span class="btn btn-info">{{ $mpba->price_max }}</span></td>
                            @endforeach
                            <td>{{ $number->soluot }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">nội dung</td>
                        <td class="text-center text-white bg-success">số cuối</td>
                        <td class="text-center text-white bg-success">tỉ lệ</td>
                    </tr>
                    <tbody class="text-center">
                    @foreach($motpb as $mphanb)
                        <tr>
                            <td>21</td>
                            <td class="text-center"><span class="btn btn-info">1</span> <span
                                    class="btn btn-info">2</span>
                                <span class="btn btn-info">3</span></td>
                            <td><span class="btn btn-info">{{ $mphanb->tile }}</span></td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td class="text-center"><span class="btn btn-info">4</span> <span
                                    class="btn btn-info">5</span>
                                <span class="btn btn-info">6</span></td>
                            <td><span class="btn btn-info">{{ $mphanb->tile }}</span></td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td class="text-center"><span class="btn btn-info">7</span> <span
                                    class="btn btn-info">8</span>
                                <span class="btn btn-info">9</span></td>
                            <td><span class="btn btn-info">{{ $mphanb->tile }}</span></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-uppercase text-center" style="color: white">
                    <span class="label label-success">tiền thắng</span> <span style="color: black">=</span> <span
                        class="label label-danger">tiền cược</span> <span style="color: black">x</span> <span
                        class="label label-primary">tỉ lệ</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Gấp 3-->
<div class="modal fade" id="gapba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Gấp 3</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">chi tiết cách chơi</h5>
                <p><b>Gấp 3</b> là một game tính kết quả bằng
                    các số cuối của <b style="color: red">Mã Kết Quả</b></p>
                <div class="text-uppercase" style="color: white">
                    <span class="label label-success">mã kết quả</span> <span style="color: black">=</span> <span
                        class="label label-danger">mã giao dịch</span> <span style="color: black">+</span> <span
                        class="label label-primary">mã random</span>
                </div>

                <span style="cursor: pointer; display: inline-block; margin-top: 15px;" class="text-capitalize fw-bold">mã random</span>
                <div id="number">
                </div>
                <div class="border-bottom" style="border-bottom: 1px solid red"></div>
                <span>Chuyển tiền vào một trong các tài khoản:</span>

                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">số điện thoại</td>
                        <td class="text-center text-white bg-success">hạn mức cược</td>
                        <td class="text-center text-white bg-success">số lần</td>
                    </tr>
                    <tbody class="text-center">
                    @foreach($phone as $number)
                        <tr @if($number->status == 2) style="display: none" @endif>
                            <td id="sdt">{{ $number->sdt }}
                            </td>
                            <td class="text-center"><span class="btn btn-info">10k</span> <span
                                    class="fw-bold">-></span>
                                <span class="btn btn-info">2m</span></td>
                            <td>{{ $number->soluot }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table class="table table-hover table-bordered text-capitalize mt-3 text-center">
                    <tr>
                        <td class="text-center text-white bg-success">nội dung</td>
                        <td class="text-center text-white bg-success">số cuối</td>
                        <td class="text-center text-white bg-success">tỉ lệ</td>
                    </tr>
                    <tbody class="text-center">
                    <tr>
                        <td>33</td>
                        <td class="text-center"><span class="btn btn-info">02</span> <span
                                class="btn btn-info">13</span>
                            <span class="btn btn-info">17</span> <span class="btn btn-info">19</span> <span
                                class="btn btn-info">21</span> <span class="btn btn-info">29</span><span
                                class="btn btn-info">35</span><span class="btn btn-info">37</span><span
                                class="btn btn-info">47</span><span class="btn btn-info">49</span><span
                                class="btn btn-info">54</span><span class="btn btn-info">57</span><span
                                class="btn btn-info">63</span><span class="btn btn-info">64</span><span
                                class="btn btn-info">74</span><span class="btn btn-info">83</span><span
                                class="btn btn-info">91</span><span class="btn btn-info">95</span><span
                                class="btn btn-info">96</span></td>
                        <td><span class="btn btn-info">3</span></td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td class="text-center"><span class="btn btn-info">66</span> <span
                                class="btn btn-info">99</span>
                        </td>
                        <td><span class="btn btn-info">4</span></td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td class="text-center"><span class="btn btn-info">123</span> <span
                                class="btn btn-info">234</span>
                            <span class="btn btn-info">456</span><span class="btn btn-info">678</span><span
                                class="btn btn-info">789</span></td>
                        <td><span class="btn btn-info">5</span></td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-uppercase text-center" style="color: white">
                    <span class="label label-success">tiền thắng</span> <span style="color: black">=</span> <span
                        class="label label-danger">tiền cược</span> <span style="color: black">x</span> <span
                        class="label label-primary">tỉ lệ</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Xiên-->
<div class="modal fade" id="xien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Xiên</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">chi tiết cách chơi</h5>
                <p><b>Xiên</b> là một game tính kết quả bằng
                    1 số cuối của <b style="color: red">Mã Kết Quả</b></p>
                <div class="text-uppercase" style="color: white">
                    <span class="label label-success">mã kết quả</span> <span style="color: black">=</span> <span
                        class="label label-danger">mã giao dịch</span> <span style="color: black">+</span> <span
                        class="label label-primary">mã random</span>
                </div>

                <span style="cursor: pointer; display: inline-block; margin-top: 15px;" class="text-capitalize fw-bold">mã random</span>
                <div id="number">
                </div>
                <div class="border-bottom" style="border-bottom: 1px solid red"></div>
                <span>Chuyển tiền vào một trong các tài khoản:</span>

                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">số điện thoại</td>
                        <td class="text-center text-white bg-success">hạn mức cược</td>
                        <td class="text-center text-white bg-success">số lần</td>
                    </tr>
                    <tbody class="text-center">
                    @foreach($phone as $number)
                        <tr @if($number->status == 2) style="display: none" @endif>
                            <td id="sdt">{{ $number->sdt }}
                            </td>
                            <td class="text-center"><span class="btn btn-info">10k</span> <span
                                    class="fw-bold">-></span>
                                <span class="btn btn-info">2m</span></td>
                            <td>{{ $number->soluot }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">nội dung</td>
                        <td class="text-center text-white bg-success">số cuối</td>
                        <td class="text-center text-white bg-success">tỉ lệ</td>
                    </tr>
                    <tbody class="text-center">
                    <tr>
                        <td>25</td>
                        <td class="text-center"><span class="btn btn-info">0</span> <span class="btn btn-info">2</span>
                            <span class="btn btn-info">4</span></td>
                        <td><span class="btn btn-info">3</span></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td class="text-center"><span class="btn btn-info">5</span> <span class="btn btn-info">7</span>
                            <span class="btn btn-info">9</span></td>
                        <td><span class="btn btn-info">3</span></td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td class="text-center"><span class="btn btn-info">6</span> <span class="btn btn-info">8</span>
                        </td>
                        <td><span class="btn btn-info">3</span></td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td class="text-center"><span class="btn btn-info">1</span> <span class="btn btn-info">3</span>
                        </td>
                        <td><span class="btn btn-info">3</span></td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-uppercase text-center" style="color: white">
                    <span class="label label-success">tiền thắng</span> <span style="color: black">=</span> <span
                        class="label label-danger">tiền cược</span> <span style="color: black">x</span> <span
                        class="label label-primary">tỉ lệ</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal xsmb-->
<div class="modal fade" id="xsmb" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">XSMB</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">chi tiết cách chơi</h5>
                <p><b>XSMB</b> là một game tính kết quả bằng
                    các số cuối của <b style="color: red">Mã Kết Quả</b></p>
                <p>Kết quả được lấy từ XSMB truyền thống thay đổi vào 19h00 hằng ngày</p>
                <p style="color: red">Cập nhật ngày: {{ date('d/m/Y H:i:s') }}</p>
                <div class="text-uppercase" style="color: white">
                    <span class="label label-success">mã kết quả</span> <span style="color: black">=</span> <span
                        class="label label-danger">mã giao dịch</span> <span style="color: black">+</span> <span
                        class="label label-primary">mã random</span>
                </div>

                <span style="cursor: pointer; display: inline-block; margin-top: 15px;" class="text-capitalize fw-bold">mã random</span>
                <div id="number">
                </div>
                <div class="border-bottom" style="border-bottom: 1px solid red"></div>
                <span>Chuyển tiền vào một trong các tài khoản:</span>

                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">số điện thoại</td>
                        <td class="text-center text-white bg-success">hạn mức cược</td>
                        <td class="text-center text-white bg-success">số lần</td>
                    </tr>
                    <tbody class="text-center">
                    @foreach($phone as $number)
                        <tr @if($number->status == 2) style="display: none" @endif>
                            <td id="sdt">{{ $number->sdt }}
                            </td>
                            <td class="text-center"><span class="btn btn-info">10k</span> <span
                                    class="fw-bold">-></span>
                                <span class="btn btn-info">2m</span></td>
                            <td>{{ $number->soluot }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">nội dung</td>
                        <td class="text-center text-white bg-success">số cuối</td>
                        <td class="text-center text-white bg-success">tỉ lệ</td>
                    </tr>
                    <tbody class="text-center">
                    <tr>
                        <td>99</td>
                        <td class="text-center"><span class="btn btn-info">48</span> <span
                                class="btn btn-info">00</span>
                            <span class="btn btn-info">40</span><span class="btn btn-info">42</span><span
                                class="btn btn-info">21</span><span class="btn btn-info">58</span><span
                                class="btn btn-info">95</span><span class="btn btn-info">31</span><span
                                class="btn btn-info">88</span><span class="btn btn-info">48</span><span
                                class="btn btn-info">31</span><span class="btn btn-info">88</span><span
                                class="btn btn-info">21</span><span class="btn btn-info">67</span><span
                                class="btn btn-info">90</span><span class="btn btn-info">86</span><span
                                class="btn btn-info">23</span><span class="btn btn-info">28</span><span
                                class="btn btn-info">88</span><span class="btn btn-info">36</span><span
                                class="btn btn-info">67</span><span class="btn btn-info">77</span><span
                                class="btn btn-info">73</span></td>
                        <td><span class="btn btn-info">3</span></td>
                    </tr>
                    <tr>
                        <td>99</td>
                        <td class="text-center"><span class="btn btn-info">80</span> <span
                                class="btn btn-info">87</span>
                            <span class="btn btn-info">20</span><span class="btn btn-info">58</span></td>
                        <td><span class="btn btn-info">3</span></td>
                    </tr>
                    <tr>
                        <td>99</td>
                        <td class="text-center"><span class="btn btn-info">180</span> <span
                                class="btn btn-info">187</span> <span class="btn btn-info">120</span> <span
                                class="btn btn-info">658</span>
                        </td>
                        <td><span class="btn btn-info">4</span></td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-uppercase text-center" style="color: white">
                    <span class="label label-success">tiền thắng</span> <span style="color: black">=</span> <span
                        class="label label-danger">tiền cược</span> <span style="color: black">x</span> <span
                        class="label label-primary">tỉ lệ</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal đuôi-->
<div class="modal fade" id="duoi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Đuôi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="text-capitalize">chi tiết cách chơi</h5>
                <p><b>Đuôi</b> là một game tính kết quả bằng
                    1 số cuối của <b style="color: red">Mã Kết Quả</b></p>
                <div class="text-uppercase" style="color: white">
                    <span class="label label-success">mã kết quả</span> <span style="color: black">=</span> <span
                        class="label label-danger">mã giao dịch</span> <span style="color: black">+</span> <span
                        class="label label-primary">mã random</span>
                </div>

                <span style="cursor: pointer; display: inline-block; margin-top: 15px;" class="text-capitalize fw-bold">mã random</span>
                <div id="number">
                </div>
                <div class="border-bottom" style="border-bottom: 1px solid red"></div>
                <span>Chuyển tiền vào một trong các tài khoản:</span>

                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">số điện thoại</td>
                        <td class="text-center text-white bg-success">hạn mức cược</td>
                        <td class="text-center text-white bg-success">số lần</td>
                    </tr>
                    <tbody class="text-center">
                    @foreach($phone as $number)
                        <tr @if($number->status == 2) style="display: none" @endif>
                            <td id="sdt">{{ $number->sdt }}
                            </td>
                            <td class="text-center"><span class="btn btn-info">10k</span> <span
                                    class="fw-bold">-></span>
                                <span class="btn btn-info">2m</span></td>
                            <td>{{ $number->soluot }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


                <table class="table table-hover table-bordered text-capitalize mt-3">
                    <tr>
                        <td class="text-center text-white bg-success">nội dung</td>
                        <td class="text-center text-white bg-success">số cuối</td>
                        <td class="text-center text-white bg-success">tỉ lệ</td>
                    </tr>
                    <tbody class="text-center">
                    <tr>
                        <td>49</td>
                        <td class="text-center"><span class="btn btn-info">1</span> <span class="btn btn-info">2</span>
                            <span class="btn btn-info">3</span> <span class="btn btn-info">4</span> <span
                                class="btn btn-info">5</span> <span class="btn btn-info">6</span> <span
                                class="btn btn-info">7</span></td>
                        <td><span class="btn btn-info">2.5</span></td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-uppercase text-center" style="color: white">
                    <span class="label label-success">tiền thắng</span> <span style="color: black">=</span> <span
                        class="label label-danger">tiền cược</span> <span style="color: black">x</span> <span
                        class="label label-primary">tỉ lệ</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal nhận mốc thắng-->
<div class="modal fade" id="nhanmocthang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nhận Mốc Thắng</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="text-center text-white bg-success">Số Tiền Thắng</td>
                        <td class="text-center text-white bg-success">Phần Quà</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>50.000đ</td>
                        <td>1.000đ</td>
                    </tr>
                    <tr>
                        <td>70.000đ</td>
                        <td>2.000đ</td>
                    </tr>
                    <tr>
                        <td>80.000đ</td>
                        <td>3.000đ</td>
                    </tr>
                    <tr>
                        <td>90.000đ</td>
                        <td>4.000đ</td>
                    </tr>
                    <tr>
                        <td>100.000đ</td>
                        <td>5.000đ</td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group text-center" id="non_query"
                     style="background-color: #e1eaed; border-color: #e1eaed; padding: 20px;">
                    <label for="partnerId">Số điện thoại:</label> <input type="text" class="form-control"
                                                                         name="partnerId" id="partnerId"
                                                                         aria-describedby="partnerId" placeholder="">
                    <small id="partnerId" class="form-text text-muted">Tổng tiền đã trao: 413,000đ
                        .</small> <br>
                    <div id="nvn-check" style="margin-top: 10px;margin-bottom:11px">
                    </div>
                    <button class="btn btn-success">Check</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal nhận mốc thua-->
<div class="modal fade" id="nhanmocthua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nhận Mốc Thua</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="text-center text-white bg-success">Số Tiền Thua</td>
                        <td class="text-center text-white bg-success">Phần Quà</td>
                    </tr>
                    <tbody>
                    <tr>
                        <td>50.000đ</td>
                        <td>1.000đ</td>
                    </tr>
                    <tr>
                        <td>70.000đ</td>
                        <td>2.000đ</td>
                    </tr>
                    <tr>
                        <td>80.000đ</td>
                        <td>3.000đ</td>
                    </tr>
                    <tr>
                        <td>90.000đ</td>
                        <td>4.000đ</td>
                    </tr>
                    <tr>
                        <td>100.000đ</td>
                        <td>5.000đ</td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group text-center" id="non_query"
                     style="background-color: #e1eaed; border-color: #e1eaed; padding: 20px;">
                    <label for="partnerId">Số điện thoại:</label> <input type="text" class="form-control"
                                                                         name="partnerId" id="partnerId"
                                                                         aria-describedby="partnerId" placeholder="">
                    <small id="partnerId" class="form-text text-muted">Tổng tiền đã trao: 873,000đ
                        .</small> <br>
                    <div id="nvn-check" style="margin-top: 10px;margin-bottom:11px">
                    </div>
                    <button class="btn btn-success">Check</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal báo lỗi-->
<div class="modal fade" id="baoloi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Báo Lỗi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="PhoneReport" name="PhoneReport" class="form-control" style=""
                       placeholder="Nhập số momo của bạn">
                <br>
                <input type="text" id="PhoneReport" name="PhoneReport" class="form-control" style=""
                       placeholder="Nhập mã giao dịch momo của bạn">
                <br>
                <textarea id="NoteReport" class="form-control" name="NoteReport" rows="4" cols="35"
                          placeholder="Mô tả"></textarea>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info text-center w-25" data-bs-dismiss="modal">gửi</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal nhận gift code-->
<div class="modal fade" id="giftcode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nhận Gift Code</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="PhoneReport" name="PhoneReport" class="form-control" style=""
                       placeholder="Nhập số momo của bạn">
                <br>
                <input type="text" id="PhoneReport" name="PhoneReport" class="form-control" style=""
                       placeholder="Nhập mã gift code">
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info text-center w-25" data-bs-dismiss="modal">gửi</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal kiểm tra mã giao dịch-->
<div class="modal fade" id="kiemtramagiaodich" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">kiểm tra mã giao dịch</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="PhoneReport" name=tranid class="form-control" style=""
                       placeholder="Nhập mã giao dịch momo của bạn">
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info text-center w-25" data-bs-dismiss="modal">gửi</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal đặt cược-->
<div id="selectedInfoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="selectedInfoModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="selectedInfoModalLabel">Thông tin đặt cược</h5>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-bordered">
                    <tr>
                        <td class="text-center text-white bg-success">Tên Momo</td>
                        <td class="text-center text-white bg-success">Số Momo</td>
                    </tr>
                    <tbody class="text-center text-capitalize">
                    @foreach($phone as $number)
                        <tr>
                            <td @if($number->status == 2) style="display: none" @endif>{{ $number->name }}</td>
                            <td @if($number->status == 2) style="display: none" @endif>{{ $number->sdt }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <p id="selectedInfo"></p>
            </div>
            <div class="container">
                <?php $payqr = \App\Models\PayQR::query()->get(); ?>
                @foreach($payqr as $pay)
                    <img style="width: 200px; height: 200px" src="{{ Storage::url($pay->image_qr) }}" alt="">
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đã Rõ</button>
            </div>
        </div>
    </div>
</div>


<div class="demo"></div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const selectElement = document.getElementById("magame");
        const btnNext = document.getElementById("btnNext");
        const selectedInfoParagraph = document.getElementById("selectedInfo");

        btnNext.addEventListener("click", function () {
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const selectedOptionText = selectedOption.textContent.trim();

            selectedInfoParagraph.textContent = "Nội dung chuyển hoặc quét mã qr bên dưới: " + selectedOptionText;

            // Hiển thị modal
            $("#selectedInfoModal").modal("show");
        });
    });


    function countIntRandom() {
        let number = 1;
        setInterval(function () {
            number++
            document.getElementById('number').innerHTML = number
        }, 1)
    }

    countIntRandom()
</script>

<script type="text/javascript" src="{{ asset('bootstrap/js/qr-code-styling.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/pusher.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/wheel.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/jquery-1.10.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/moment.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/simple-notify.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
