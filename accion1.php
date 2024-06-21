<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url(fondo.png);
            background-repeat: no-repeat;
            background-size: auto;
        }
        .container{
            max-width: 400px;
            border: black 2px solid;
            background: #fff;
        }
        img{
            width: 250px;
        }
        p{
            font-size: 15px;
            font-weight: bold;
        }
        .bg{
            background-color: #90EE90;
        }
    </style>
    <title>Formulario</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alt = $_POST['altura'];
    $opc = $_POST['opcion'];
    $edad = $_POST['edad'];

    if ($alt >= 120 && $opc == "si" && $edad > 16) {
        echo "<div class='container text-center bg-warning text-white mt-5'>";
        echo "<h2>ACEPTADO</h2>";
        echo "</div>";
        echo "<div class='container text-center bg'>";
        echo "<img src='1.png' alt='ticket'>";
        echo "</div>";
    }else{
        echo "<div class='container text-center bg-warning text-white mt-5'>";
        echo "<h2>Rechazado</h2>";
        echo "</div>";
        echo "<div class='container text-center bg'>";
        echo "<p>Usted no cumple con las normas establecidas, ya que tiene $edad años no puede entrar</p>";
        echo "</div>";
    }
}
?>
</body>
</html>

