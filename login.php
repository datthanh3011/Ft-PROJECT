<html>
    <head>
        <meta charshet="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        <link rel="stylesheet" href="sass/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
    <form> 
    <div>
            <!--required không được bỏ  trống -->
            <!--type kiểu đinh dạng  trống -->
            <!--placeholder chữ ẩn trong input -->
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" id="username" placeholder="Username" required><br>
            <label for="psw"><b>Passoword</b></label>
            <input type="text" name="password" id="pwd" placeholder="Password" required><br>
            <button type="submit" id="button" name="submit">Submit</button>
            <label >
                <input type="checkbox" checked="checked"  name="remember">Remember me
            </label>
        </div>
    </form> 
  
</htm>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="revo";

    //connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    // check connection
    if($conn->connect_error){
        die("connection failed: " .$conn->connect_error);
        }
        echo "Connect successfully"

// Teesst code
?>