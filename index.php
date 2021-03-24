<?php
    $_SESSION["Nombre"] = $_REQUEST["Nombre"];
    $_SESSION["Fecha"] = $_REQUEST["Date"];
    setcookie("Oreo", $_SESSION["Nombre"], time() + 60*15 /* tiempo establecido en segundos */, "/");
    setcookie("Chokis", $_SESSION["Fecha"], time() + 60*15 /* tiempo establecido en segundos */, "/");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
    <meta charset="utf-8">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>SUV: Back-End</title>
</HEAD>
<BODY>
<DIV class="cont">


<h1>Lenguajes de programación Back End</h1>
<p><b>Unidad 2.</b> Estructura de datos</p>

    <DIV class="actividad">
        <h3>Actividad 1. Sesiones y cookies.</h3>
           
           
            <h4>Ingresa los siguientes datos para iniciar sesión</h4>

            <!-- FORMULARIO -->
            <form method="POST" name="Login">
                <p>Nombre:<br>
                    <input name="Nombre" type="text" placeholder="Ingresa tu nombre" class="form"></p>
                <p>Correo electrónico:<br>
                    <input name="Mail" type="email" placeholder="Ingresa tu correo electrónico" class="form"></p>
                <p>Fecha de nacimiento:<br>
                    <input name="Date" type="date" placeholder="Ingresa tu fecha de nacimiento" class="form"></p>
                <p>Constraseña:<br>
                    <input name="Password" type="password" placeholder="Ingresa la contraseña: pst... es abc123" class="form"></p>
                <input name="Submit" type="submit" value="Login" class="button">
            </form>

            <!-- VALIDACIÓN -->
            <?php session_start(); /* Para generar los datos de la sesión */
            if(isset($_POST['Submit'])){ /* Verificar que se ingresaron los datos */
                $logins = array('jfjafet@gmail.com' => 'abc123','user@mail.com' => '123'); /* Array con la asociación user - correo */
                
                $Mail = isset($_POST['Mail']) ? $_POST['Mail'] : ''; /* Asigna usuario y contraseña a una variable */
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
            
                if (isset($logins[$Mail]) && $logins[$Mail] == $Password){ /* Validar la existencia de datos */
                $_SESSION['Homework']['Mail']=$logins[$Mail]; /* Conceder acceso  */
                header("location:protected.php");
                exit;
                } else {
                    $msg="<span style='color:red'>Error: Por favor, verifique sus datos.</span>"; /* Mensaje de error */
                    }
            }
            $_SESSION['time'] = time(); /* Registrar el momento de inicio de sesión */
            ?>

            <!-- Arroja mensaje de error en caso de ingresar datos incorrectos -->
            <p><b><?php if(isset($msg)){?>
                   <?php echo $msg;?>
                <?php } ?>
            </b></p>

            
    </DIV>
    
    <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
    <b>Código: </b>394485606<br/>
    <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
    <b>Fecha: </b>23 de marzo 2021</p>

</DIV>

</BODY>
</HTML>