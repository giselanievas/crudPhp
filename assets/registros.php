<?php
session_start();

if(isset($_POST['submit'])){
    //tomo los valores del formulario de registro
    //? si realmente me llega apellido, o con : es que no me llego nada, el resultado es false
    $nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST ['email']) ? $_POST ['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //array de errores
    $errores = array();




    
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ){
        $nombre_valido = true;
    }
    else{
       $nombre_valido = false;
       $errores['nombre'] = 'El nombre no es válido';
    }
    
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos) ){
        $apellido_valido = true;
    }
    else{
       $nombre_valido = false;
       $errores['apellidos'] = 'Los apellidos no son válidos';
    }
    

    if(!empty($email) && ! filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_valido = true;
    }
    else{
       $email_valido = false;
       $errores['email'] = 'El email no es válido';
    }
    
    if(!empty($password)) {
        $password_valido = true;
    }
    else{
       $password_valido = false;
       $errores['password'] = 'La contraseña esta vacía';
    }
    
    if(count($errores)== 0){
        $guardar_usuario = true;
        //cifrar la contraseña en este caso 4 veces
        $password_segura = password_hash($password, PASSWORD_BCRYPT,['cost'=>4] );
        var_dump($password_segura);

    } else{
        $_SESSION['errores']=$errores;
        header('Location: index.php');
    }

    
}
