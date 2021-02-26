

<?php 
include_once("polaczenie.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset> 
    <legend>Dodawanie do bazy</legend>
        <form action="zad4.php" method="POST">

            Imie <input type="text" name="imie"> <br>
               nazwisko <input type="text" name="imie"> <br>
                <input type="submit" value="dodaj"> <br>

        </form>
    
</fieldset>

<?php 
if (isset($_POST['imie']) && isset($_POST['nazwisko'])) {
    if (!empty($_POST['imie']) && !empty($_POST['nazwisko'])) {
        # code...
        $imie = $_POST ['imie'];
        $nazwisko = $_POST ['nazwisko'];
        echo ("Imie $imie, Nazwisko: $nazwisko");
    }
    # code...
}

?>
    
</body>
</html>

<?php 


?>