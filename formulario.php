<?php
    
    function mostrarPersona(){
        echo "Nombre: {$_POST['nombre']} <br />";
        echo "Apellido: {$_POST['apellido']} <br />";
        echo "Telefono: {$_POST['telefono']} <br />"; 
        echo "Fecha de nacimiento: {$_POST['date']} <br />";
        echo "Edad: {$_POST['edad']} <br />";
        echo "Correo: {$_POST['email']}";
    }
    

    function comprobarVacio() {
        if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['telefono']) && 
            !empty($_POST['date']) && !empty($_POST['edad']) && !empty($_POST['email'])) {
    
            if($_POST["nombre"] != $_POST["apellido"]) {
                echo "<h2>Persona Agregada correctamente</h2><br/>";
                mostrarPersona();
                return true;
            }
        }
        echo "<h2>Hubo un problema al procesar la solicitud</h2>";
        header('location:  error500.php');
    }

    comprobarVacio();