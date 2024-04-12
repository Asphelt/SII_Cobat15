<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$nombreBaseDeDatos = 'cobat';

// Crear conexión
$conn = mysqli_connect($host, $usuario, $contrasena, $nombreBaseDeDatos);

// Verificar conexión
if (!$conn) {
    echo json_encode('fallo db');

}


//Obtenemos el valor del key
$key=$_GET['key']; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Cuando el request sea POST 
    switch($key){
        case 1:
            validar_login();
            break;
        case 2:
            echo json_encode('case 2: va a validar datos');

            break;
        default:
            echo json_encode('La key no se identifica');
            break;
    }

}else{

}
    
function validar_login(){
    global $conn;
    //Recoger los valores que nos llegan por post
    $username = $_POST["username"];
    $password = $_POST["password"];
    //Crear query para verificar el usuario
    $sql="SELECT * FROM usuario WHERE username='$username' AND password='$password'";
    //ejecutamos el query
    $resultado=mysqli_query($conn,$sql);
    //verificamos que tengan datos
    if(mysqli_num_rows($resultado)>0){
        //si tiene datos creamos un array asociativo y lo enviamos como json
        echo json_encode(array("success"=>true,"message"=>"Usuario Correcto "));
        exit();
    }else{
        echo json_encode(array("success"=>false,"message"=>"Usuario Incorrecto "));
        exit();
    }
}











?>