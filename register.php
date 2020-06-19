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
            <label for="name"><b>Name</b></label>
            <input type="text" name="Name" id="Name" placeholder="Name" required><br>
        <!--<label for="Email"><b>Email</b></label>
            <input type="text" name="Email" id="Email" placeholder="Email" required><br>
            <label for="Phone"><b>Phone</b></label>
            <input type="text" name="Phone" id="Phone" placeholder="Phone" required><br>
         -->    
            <label for="Username"><b>Username</b></label>
            <input type="text" name="Username" id="Username"  placeholder="Username" required><br>   
            <label for="psw"><b>Password</b></label>
            <input type="text" name="password" id="password" placeholder="Password" required><br>
            <button type="submit" name="btn_insert" id="btn_insert" >Submit</button>        
        </div>
    </form> 
</html>     
<?php
// khai báo biến
$localhost = "localhost";
$username="root";
$password="";
$database="revo";
// hàm kết nối
$connect =  mysqli_connect($localhost,$username,$password,$database);
// kiểm tra hàm kết nối
//if($connect->connect_error){
    //die("connection error: " .$conn->connect_error);
   // }
   // echo "connect successfully";
// thêm bảng revosec
//name = secid, username =secname , pwd=secdesc
if (isset($_POST["btn_insert"]))
{
    $sql = "CALL sp_secins('".$_POST["Name"]."','".$_POST["Username"]."','".$_POST["password"]."')";
    if(mysqli_query($connect,$sql,MYSQLI_STORE_RESULT))
    {
        header("Location:register.php?inserted=1");
    }
}
//if(isset($_GET["Inserted"]))
//{
 //   echo '<script>alert("data insert")</script>';
//}
?>