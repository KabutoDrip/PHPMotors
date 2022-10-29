<?php
function phpmotorsConnect(){
$server = 'localhost';
$dbname = 'phpmotors';
$username = 'Client';
$password = '.Bw.j6q5B[BT/G-J';
$dsn = "mysql:host=$server;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $link = new PDO($dsn, $username, $password, $options);
     if(is_object($link)){
         ##echo 'It worked!';
     }
    return $link;
}
catch(PDOException $e){
    echo "It didnt work, error: " . $e->getMessage();
    header('Location: /htdocs/PHPmotors/view/500.php');
    exit;
}
}
?>