<?php
    session_start();
?>

<?php
  if(isset($_COOKIE['contador']))
  { 
    // Caduca en un año 
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 60*15 ); // Duración de 5 minutos.
    $mensaje = 'Número de visitas: ' . $_COOKIE['contador']; 
  } 
  else 
  { 
    // Caduca en un año 
    setcookie('contador', 1, time() + 10); 
    $mensaje = 'Esta es tu primera visita a la página.'; 
  } 
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
        
        <div title="esto ya funciona">

        <!--- SALUDO PERSONALIZADO -->
        <?php
        if (isset($_COOKIE['Oreo']))
        {
            ?>
            <p>¡Hola, <?=$_COOKIE['Oreo']?>!</p>
            <?php
        }
        else
        {
            ?>
            <p>¡Hola, desconocido!</p>
            <?php
        }
        ?>
        
        <!--- FECHA DE NACIMIENTO -->
        <?php
        if (isset($_COOKIE['Chokis']))
        {
            ?><p>Tu fecha de nacimiento es, <?=$_COOKIE['Chokis']?>.</p><?php
        }
        else
        {
            ?><p>No se sabe tu fecha de nacimiento.</p><?php
        }
        ?>
        </div>

        <p>Tu inicio de sesión actual es: <?php echo date('d/M/Y H:i:s', $_SESSION['time']); ?></p>
        <p><?php echo $mensaje; ?> </p>
        
       
        <!-- Hasta aquí ya todo funciona -->
        
        <p><img src="https://cgestiona.com/files/1/page-contents/ingresar%20informaci%C3%B3n%20a%20T-Registro.jpg" alt="candado"></p>
        <!-- Verificar la existencia de cookies -->
        <?php
        if(count($_COOKIE) > 0) {
          echo "Las cookies están activadas.";
        } else {
          echo "No se encontraron cookies.";
        }
        ?>

        <p>Te encuentras en una página protegida.</p>
        
        <a href="logout.php"><input name="Submit" type="submit" value="Cerrar sesión" class="button"></a>
        
        <br>


    </DIV>
    
    <p><b>Fuentes de consulta</b>
    <ul>
        <li>PHP (2001). <i>PHP: session_start</i> [en línea]. [Consulta: 22-mar-2021].<br>
        Recuperado de: <a href="https://www.php.net/manual/en/function.session-start.php">https://www.php.net/manual/en/function.session-start.php</a></li>
        <li>ANYELGUTI (s.f.). <i>11. Guardar variables (I): 11.1 Cookies</i> [en línea]. En Aprende web [Consulta: 22-mar-2021].<br>
        Recuperado de: <a href="https://aprende-web.net/php/php11_1.php">https://aprende-web.net/php/php11_1.php</a></li>
        <li>Admin (s.f.). <i>37 - Variables de sesión ($_SESSION)</i> [en línea]. En  [Consulta: 22-mar-2021].<br>
        Recuperado de: <a href="https://www.tutorialesprogramacionya.com/phpya/temarios/descripcion.php?punto=37&cod=58&inicio=30">https://www.tutorialesprogramacionya.com/phpya/temarios/descripcion.php?punto=37&cod=58&inicio=30</a></li>
        <li>Admin (s.f.). <i>PHP Cookies</i> [en línea]. En W3Schools [Consulta: 22-mar-2021].<br>
        Recuperado de: <a href="https://www.w3schools.com/PHP/php_cookies.asp">https://www.w3schools.com/PHP/php_cookies.asp</a></li>
    </ul>
    </p>


    <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
    <b>Código: </b>394485606<br/>
    <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
    <b>Fecha: </b>23 de marzo 2021</p>

</DIV>

</BODY>
</HTML>