<?php
header('Access-Control-Allow-Origin:*');

$server_name='localhost';
$username='root';
$password='';
$dab='rahul';

try{
    $con=new pdo("mysql:host=$server_name;dbname=$dab",$username,$password);
    $con->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $sql="insert into enquiry values('$name','$mobile','$email')";
    $con->exec($sql);
    $last=$con->LastInsertId();
    echo"$last";

}


catch(exception $e) {
    echo $sql.$e->getmessage();

    }
    $con->close();

?>
