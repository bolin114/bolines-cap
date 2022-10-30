function validar(){
    var val_apellidos, val_nombre, val_correo, val_telefono,val_comentario;
    var ercorreo, ernombre, erapellidos; //ertelefono

    val_nombre = document.getElementById("nombre").value; //
    val_apellidos = document.getElementById("apellidos").value; //
    val_correo = document.getElementById("correo").value; //
    val_telefono = document.getElementById("telefono").value;
    val_comentario = document.getElementById("comentario").value;

    ercorreo = /\w+@[a-zA-Z]+\.[a-z]{2,3}/; //acepta caracteres alphanumericos 1 o mas mayusculas o min, escapa el caracter ., 
    ernombre = /^([A-ZÑÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
    erapellidos = /^([A-ZÑÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/;
    //ertelefono = /^[0-9]{10}/;

    //Valida si esta vacio
    if(val_nombre==="" || val_apellidos==="" || val_correo==="" ||  val_telefono==="" || val_comentario==="")
    {
        alert("Todos los campos son obligatorios");
        return false;
    }
    
    if(val_nombre.length > 100) //objeto.metodo
    {
        // document.getElementById("nombre").focus(); //Cuando se da aceptar al alert, hara que el cursor se ponga donde esta ese cuadro
        alert("El nombre es demasiado largo");
        return false;
    }

    if(val_apellidos.length > 100) //objeto.metodo
    {
        alert("El apellido es demasiado largo");
        return false;
    }

    if(val_correo.length > 100) //objeto.metodo
    {
        alert("El correo es demasiado largo");
        return false;
    }

    if(val_telefono.length > 10) //objeto.metodo
    {
        alert("El telefono es demasiado largo");
        return false;
    }
    
    else if (isNaN(val_telefono))
    {
        {
            alert("El telefono tiene que ser numeros");
            return false;
        }
    }

    if(val_comentario.length > 300) //objeto.metodo
    {
        alert("El comentario es demasiado largo");
        return false;
    }
    //Termina de validar la longitud

    if(!ercorreo.test(val_correo)) //.test es un metodo para verificar la expresion, regresa true o false.
    {
        alert("El FORMATO del Correo es incorrecto");
        return false;
    }
    if(!ernombre.test(val_nombre))
    {
        alert("El FORMATO del Nombre es incorrecto");
        return false;
    }
    if(!erapellidos.test(val_apellidos))
    {
        alert("El FORMATO del Apellido es incorrecto");
        return false;
    }
}