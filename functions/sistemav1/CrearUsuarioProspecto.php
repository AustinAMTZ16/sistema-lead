<?php
    require_once './../connection/conexion.php'; 

    if(isset($_POST["dominioB2B"],)){
        $nickPerfil=$_POST['dominioB2B'];
        $password=$_POST['password'];
        $giroDominio = 'Usuario Prospecto';
        $fecha_actual = date("Y-m-d h:i:s"); 
        $correo=$_POST['correo'];

        //Buscamos en la TB_Login where correo = $correo
        $sqlValidacionCorreo="SELECT idLogin FROM tb_login WHERE correo = '$correo'"; 
        $resultado = $conn->query($sqlValidacionCorreo);
        //echo "Error al guardar el perfil--: " . $resultado->num_rows;
        if($resultado->num_rows > 0){
            echo "Error al guardar el perfil: " ." Tu correo ya se encuentra registrado. ". $correo;
        }else{
            //Primero registra en tb_login agrega registro y obtinen idLogin
            $sqlLoginUser="INSERT INTO tb_login(dominioB2B, password, fecha_creacion, giroDominio, correo)
            VALUES ('$nickPerfil', '$password', '$fecha_actual', '$giroDominio', '$correo');";
            //$rslLoginUser = $conn->query($sqlLoginUser);

            if ($conn->query($sqlLoginUser) === TRUE) {
                //Paso 3: Obtener el último ID insertado
                $rslLoginUser = $conn->insert_id;
                
                //echo "El último registro insertado tiene el ID: " . $rslLoginUser;
                //El registro ya existe, realizar una operación de actualización
                //Crear registro BD 
                $sqlAddCliente = "INSERT INTO tb_perfil_cliente (nombrePerfil_cliente, apellidoPPerfil_cliente, apellidoMPerfil_cliente, correoEPerfil_cliente, telefonoPerfil_cliente, idLogin, idRecompensa)
                VALUES ('nombrePerfil_cliente','apellidoPPerfil_cliente','apellidoMPerfil_cliente','$correo','telefonoPerfil_cliente','$rslLoginUser',0);";
                
                if ($conn->query($sqlAddCliente) === TRUE) {
                        //echo "El perfil se ha creado correctamente.";
                        mail($correo,'Nueva cuenta MexiClientes',"¡Gracias por tu registro! Recuerda tu inicio sesión es tu correo: $correo & clave: $password. Pagina web donde puedes acceder a tu perfil: www.mexiclientes.engranetmx.com",);
                        //header("Location: ../index.php");
                        header("Location: ../index.php");
                        exit();
                    } else {
                        echo "Error al guardar el perfil: " . $conn->error;
                    }
                } else {
                    echo "Error en la guardar el perfil: " . $conn->error;
            }
        }
    }
?>