<!DOCTYPE html>
<html lang="es">
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
        label,
        p{
            font-size: 15px;
            font-weight: bold;
        }
        input{
            display: flex;
            justify-content: right;
        }
        .linp{
            width: 360px;
        }
        .bg{
            background-color: #90EE90;
        }
    </style>
    <title>Formulario montaña</title>
</head>
<body>
    <div class="container text-center bg-warning text-white mt-5">
        <h1>Registro</h1>
    </div>
    <form class="container p-4 mb-5 bg" method="post" action="accion1.php">
        <label for="">Nombre:</label>
        <input class="linp" type="text" name="nombre" required><br>
        <label for="">Edad:</label>
        <input class="linp" type="text" name="edad" pattern="[0-9]{1,2}" required><br>
        <label for="">Estatura:</label>
        <input class="linp" type="number" name="altura" min="120" required><br>
        
        <div class="text-center mt-2">
            <label for="">¿Rechaza llevarnos a juicio por daños y prejuiciosde un mal matenimiento?</label>
            <select id="opcion" name="opcion" class="form-select" aria-label="Default select example" required>
                <option disabled selected>Elija una opcion</option>
                <option value="si">Acepto</option>
                <option value="no">No acepto</option>
            </select>
            <div class="mt-2">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </form>

    
</body>
</html>