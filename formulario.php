<?php
    
        function mostrarPersona(){
        echo "Nombre: {$_POST['nombre']} <br />";
        echo "Apellido: {$_POST['apellido']} <br />";
        echo "Telefono: {$_POST['telefono']} <br />"; 
        echo "Fecha de nacimiento: {$_POST['date']} <br />";
        echo "Edad: {$_POST['edad']} <br />";
        echo "Correo: {$_POST['email']}";
    }

    mostrarPersona();
