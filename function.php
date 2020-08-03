<?php

    function conn_data(){
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
            echo "Connect successfully";
    };        
?>