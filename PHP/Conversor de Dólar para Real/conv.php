<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conversor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>    
    <h1> RECUPERAÇÂO </h1>
    <form action="" method="POST">
       Dólar: <input type="number" name="dolar" step="any"> <br>
       Real: <input type="number" name="real" step="any"> <br>
       <input type="submit" name="calc" value="dolar para real">
       <input type="submit" name="calc" value="real para dolar">    
    </form>
</div>

<?php
$dolar=$_POST["dolar"];
$real=$_POST["real"];
$a=$_POST["calc"];
$r;

if($a == "dolar para real")
    $r = $dolar * $real;
else($a == "real para dolar")
    $r = $real / $dolar;

echo "Dólar: $r <br>";
echo "Real: $r"; 

?>

</body>
</html>