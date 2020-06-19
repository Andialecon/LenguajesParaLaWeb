<?php
session_start(); 
ob_start();

include_once 'conexion.php';
	$usuario=isset($_POST['usuario'])?$_POST['usuario']:"";
	$con=new Conexion();
	$con=$con->conectar();	 
	if($con){        
            $sql="SELECT * FROM login WHERE usuario = '$_POST[usuario]' AND contrasena = '$_POST[contrasena]' ";
                    $consulta=$con->prepare($sql);
                    $consulta->execute();                     
                    if ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){  
                        $_SESSION['loggedin'] = true;
                        $_SESSION['usuario'] = $fila['usuario']; 
                         header("Location: ../bienvenida.php");
                         exit;
                    } 
                    else {
                        header('refresh:1; url=../registrese.php'); 
                    }
             }       
             ob_end_flush();    
?>