<?php
    
        function mostrarPersona(){
        echo "Nombre: {$_POST['nombre']} <br />";
        echo "Apellido: {$_POST['apellido']} <br />";
        echo "Telefono: {$_POST['telefono']} <br />"; 
        echo "Fecha de nacimiento: {$_POST['date']} <br />";
        echo "Edad: {$_POST['edad']} <br />";
        echo "Correo: {$_POST['email']}";
    }
    
    if($_POST["nombre"] != $_POST["apellido"]) {
        echo "<h2>Persona Agregada correctamente</h2><br/>";
        mostrarPersona();
     }
     else { 
        echo "<h2>Hubo un problema al procesar la solicitud</h2>";
        header('location:  error500.php');
     }
    

    