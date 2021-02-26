

<?php 
$username ="root";
$password = "";
$host= "localhost";
$dbname="szkola";
$port= 3306;

try {
    $polaczenie= new PDO("mysql:host=$host;dbname=$dbname;port=$port;charset=utf8",$username,$password);
    echo("poloczenie udane");
} catch (PDOException $e) {
    //throw $th;
    echo("error");
    die();
}

?>