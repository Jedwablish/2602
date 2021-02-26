<?php 

include_once("pdo.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    table.tr.td{
        border:1px solid red;
        padding 10px;
    }

    </style>
    <table>

    <tr> 
<td>id</td>
<td>imie</td>
<td>nazwisko</td>
</tr>

</table>
<?php 

$zapytanie= ("SELECT id, imie, nazwisko FROM uczniowie;");
foreach($polaczenie->query($zapytanie) as $wiersz){
  echo $wiersz['id']." ".$wiersz['imie'].$wiersz['nazwisko']."<br>";
}

?>


</body>
</html>

<?php 

$polaczenie =null;

?>