

<?php 
include_once("mysql.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> </h1>


<?php 
$zapytanie = $polaczenie->query("SELECT id, imie, nazwisko FROM uczniowie;");

while(list($id,$imie,$nazwisko)=mysqli_fetch_array($zapytanie))
{
    echo("$id,$imie,$nazwisko.<br>");
}
?>
    
</body>
</html>

<?php 
$polaczenie->close();?>