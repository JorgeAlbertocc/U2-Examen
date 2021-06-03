<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Semana 8 Formularios Post</title>
</head>
<body>

        <h2>Datos del alumno</h2>
        <form method="POST">
        <div class="form-floating mb-3">
                <input type="text" class="form-control" name="clavedealumno" value=""/>
                <label for="floatingInput">clave</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" name="nombre" value=""/>
                <label for="floatingInput">Nombre</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" name="apellidos" value=""/>
                <label for="floatingPassword">Apellidos</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" name="edad" value=""/>
                <label for="floatingInput">Edad</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" name="email" value=""/>
                <label for="floatingInput">Email</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" name="direccion" value=""/>
                <label for="floatingInput">Direccion</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" name="curp" value=""/>
                <label for="floatingInput">CURP</label>
            </div>
            <br>
            <div class="form-floating">
                <input type="text" class="form-control" name="nombrec" value=""/>
                <label for="floatingInput">Nombre cordinador</label>
            </div>
            <br>
            <div class="mb-3">
                <label class="form-check-label">Carrera</label>
                <select class="form-select" name="carrera">
                    <option value="Sistemas">Sistemas</option>
                    <option value="Administracion">Administracion</option>
                    <option value="Industrial">Industrial</option>
                    <option value="Electro mecanica">Electro mecanica</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Envia datos"/>
        </form>

        <br/>
        <br>
 
        <div class="jumbotron text-center">
        <h2>Datos</h2>
        <?php
        $clavedealumno = "";
        $nombre = "";
        $apellido = "";
        $email = "";
        $direccion = "";
        $curp = "";
        $carrera = "";
        $nonbrec="";
        $edad = "";
            if($_POST){
                echo "Tus datos: ";
                $clavedealumno = $_POST["clavedealumno"];
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellidos"];
                $email = $_POST["email"];
                $direccion = $_POST["direccion"];
                $curp = $_POST["curp"];
                $carrera = $_POST["carrera"];
                $nombrec=$_POST["nombrec"]; 
                $edad = $_POST["edad"];
                echo "<p>Bienvenidos al semestre 2021 
                es un placer tenerte como alumno de la carrera de: ".$carrera." tu cordinador es: ".$nombrec.", favor de presentarte con el para mas datos. </p>";
                $curpins = substr($curp,0,6);
                
                echo "<br>";
                echo "<h4>Tu credencial quedara de la siguiente manera</h4>";
                echo "<br>";
                echo "Nombre copleto: ".$nombre." ".$apellido;
                echo "<br>";
                echo "Clave de alumno: ".$clavedealumno;
                echo "<br>";
                echo "Email: ".$email;
                echo "<br>";
                echo "Emali instituional: ".$curpins."@".$carrera.".tecnm.mx";
                echo "<br>";
                echo "Edad: ".$edad;
    
            }
        ?>
            </div>
</body>
</html>