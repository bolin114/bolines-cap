<?php
include 'cn.php';

$nombre = $_POST["nombre"]; //Se jala lo del campo que tiene  nombre en el index
$apellidos = $_POST["apellidos"]; 
$correo = $_POST["correo"]; 
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];  

$nombre_val = "/^([A-ZÑÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/";
$apellidos_val = "/^([A-ZÑÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/";
/*$correo_val = 
$usuario_val =  
$clave_val = */

//Consulta para insertar datos desde el formulario hacia la base de datos
$insertar = "INSERT INTO usuario(nombre, apellidos, correo, telefono, comentario)
 VALUES ('$nombre','$apellidos','$correo','$telefono','$comentario')";//Las variables que estan aqui se mandan a la base de datos

if(isset($_POST['boton'])) //El boton activa todos los elemntos, asi que se vuelve a validar_ para ver si esta vacio.
{
    if(empty($nombre)) //Si esta vacia 
    {
        // echo"<p class='error'>Agrega tu nombre</p>";
        echo'<script languaje="javascript">alert("Agrega tu NOMBRE");
        window.history.go(-1);
        </script>';
        exit;
    }

    if(empty($apellidos)) //Si esta vacia 
    {
        // echo"<p class='error'>Agrega tu nombre</p>";
        echo'<script languaje="javascript">alert("Agrega tu APELLIDO");
        window.history.go(-1);
        </script>';
        exit;
    }

    if(empty($correo)) //Si esta vacia 
    {
        // echo"<p class='error'>Agrega tu nombre</p>";
        echo'<script languaje="javascript">alert("Agrega tu CORREO");
        window.history.go(-1);
        </script>';
        exit;
    }

    if(empty($telefono)) //Si esta vacia 
    {
        // echo"<p class='error'>Agrega tu nombre</p>";
        echo'<script languaje="javascript">alert("Agrega tu TELEFONO");
        window.history.go(-1);
        </script>';
        exit;
    }

    if(empty($comentario)) //Si esta vacia 
    {
        // echo"<p class='error'>Agrega tu nombre</p>";
        echo'<script languaje="javascript">alert("Agrega tu COMENTARIO");
        window.history.go(-1);
        </script>';
        exit;
    }
} //termnar todas las validaciones
//validacion de la longitud de los campos

if(isset($_POST['boton'])) //El boton activa todos los elemntos, asi que se vuelve a validar_ para la longitud de los campos.
{
    if(strlen($nombre) > 100)
    {
        echo'<script languaje="javascript">alert("El NOMBRE es demasiado largo");
        window.history.go(-1);
        </script>';
        exit;
    }

    if(strlen($apellidos) > 100)
    {
        echo'<script languaje="javascript">alert("El APELLIDO es demasiado largo");
        window.history.go(-1);
        </script>';
        exit;
    }

    if(strlen($correo) > 100)
    {
        echo'<script languaje="javascript">alert("El CORREO es demasiado largo");
        window.history.go(-1);
        </script>';
        exit;
    }

    if(strlen($telefono) > 10)
    {
        echo'<script languaje="javascript">alert("El TELEFONO es demasiado largo");
        window.history.go(-1);
        </script>';
        exit;
    }

    if(strlen($comentario) > 300)
    {
        echo'<script languaje="javascript">alert("El comentario es demasiado largo");
        window.history.go(-1);
        </script>';
        exit;
    }
}

if(isset($_POST['boton']))//El boton activa todos los elementos, asi que se vuelve a validar para la validacion REGEX.
{
    if(preg_match($nombre_val, $nombre))
    {
        /*
        echo'<script languaje="javascript">alert("El NOMBRE Si pasa");
        window.history.go(-1);
        </script>';
        */
    }
    else
    {
        echo'<script languaje="javascript">alert("El formato del NOMBRE es INCORRECTO");
        window.history.go(-1);
        </script>';
        exit;
    }

    if(preg_match($apellidos_val, $apellidos))
    {
        /*
        echo'<script languaje="javascript">alert("El APELLIDO Si pasa");
        window.history.go(-1);
        </script>';
        */
    }
    else
    {
        echo'<script languaje="javascript">alert("El formato del APELLIDO es INCORRECTO");
        window.history.go(-1);
        </script>';
        exit;
    }
}

$resultado = mysqli_query($conexion,$insertar);//verifica la conexion

if($resultado)
{
    #echo 'Usuario registrado exitosamente';
    echo '<script languaje="javascript">alert("El COMENTARIO enviado exitosamente");
    window.history.go(-1);
    </script>';
}
else if(!$resultado)
{
    #echo 'Error al registrar el usuario';
    echo '<script languaje="javascript">alert("Error al ENVIAR el comentario");
    window.history.go(-1);
    </script>';
}

 //Cerrar conexión a la base de datos
 mysqli_close($conexion);