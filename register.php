<?php
include("function.php");

?> 
<html>
    <head>
                <meta charshet="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="sass/style.css">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script type="text/javascript" src="js/jquery.js"></script>
    </head>

    <div id="bg-mg-logo" > 
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-md-3">
                    <img src="img/logo.png" >
                    
                </div>
                <div class="col-xs-6 col-md-6" id="txt-seach">
                    <input type="text" value placeholder = "Bạn muốn tìm gì...">
                    <span id="ico-search">
                        <span class="fa fa-search">

                        </span>
                    </span>
                </div>
                <div class="col-xs-3 col-md-3" id="info-contact">
                    <div id="img-phone">
                        <img src="img/icon-contact.png">
                    </div>
                    <div>
                        <span class="row">
                            Hỗ Trợ: <span>1900900</span>
                        </span>
                        <span class="row">
                            Email: <span>email@email.com</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <form id="register"> 
        <div>
            <!--required không được bỏ  trống -->
            <!--type kiểu đinh dạng  trống -->
            <!--placeholder chữ ẩn trong input -->
            <label id="lbl_hkdesc">Họ và Tên</label>
            <input id="ip_hkdesc" placeholder="Họ và Tên" name="fullname">  <br>
            <label id="lbl_dktdn">Tên đăng nhập</label>
            <input id="ip_dktdn" placeholder="Tên đăng nhập" name="us"> <br>
            <label id="lbl_dkmk">Mật khẩu</label>
            <input id="ip_dkmk" placeholder="Mật khẩu" name="pw"> <br>
            <!--<button type="submit" id="btn_dk">Đăng ký</button>-->
            <input type="button" value="Nut" id="btn_dk" name="submit">
        </div>
    </form> 
    <div id="test"></div>

</html>    