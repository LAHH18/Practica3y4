<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background-color: rgb(150, 159, 167);
        }
        .container{
            width: 400px;
            border: black 2px solid;
            background: #fff;
            border-radius: 25px;
        }
        i{
            padding: 0 10px;
            color: #FD0707;
        }
        p{
            font-size: 20px;
            font-weight: bold;
        }
        img{
            width: 130px;
        }
    </style>
    <title>Registro</title>
</head>
<body>
    <form class="container mt-5 mb-5 p-4" method="post">
        <div class="text-center">
            <img src="user.png" alt="usuario">
            <h2 class="text-center">Registro</h2>
        </div>
        <label for="">Ingrese correo electronico:</label>
        <div class="input-group mb-3 text-center">
            <span class="input-group-text">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </span>
            <input type="email" class="form-control" placeholder="Email">
        </div>

        <label for="">Ingrese contraseña:</label>
        <div class="input-group mb-3 text-center">
            <span class="input-group-text">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
            <input type="password" name="contra1" class="form-control" placeholder="Contraseña">
        </div>
        <label for="">Confirmar:</label>
        <div class="input-group mb-3 text-center">
            <span class="input-group-text">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
            <input type="password" name="contra2" class="form-control" placeholder="Confirmar contraseña">
        </div>
        <div class="text-center mb-4">
            <button type="submit" class="btn btn-danger text-end">Validar</button>
        </div>
    
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $con1 = $_POST['contra1'];
            $con2 = $_POST['contra2'];

            if($con1 == $con2){
                echo "<p class='text-center'>Contraseña Confirmada correctamente, valida</p>";
            }
            else{
                echo "<p class='text-center'>La contraseña no coincide, invalida</p>";
            }
        }
        ?>
    </form>

</body>
</html>