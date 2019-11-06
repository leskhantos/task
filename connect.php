<?php
define("host","localhost");
define("user","root");
define("pass","root");
define("db","test");
function connectionToDB(){
    $conn = mysqli_connect(host,user,pass,db);
    return $conn;
}