<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>Hotel Joshed Imperial</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <style type="text/css">
<!--
#apDiv1 {position:absolute;
	left:43px;
	top:4px;
	width:155px;
	height:103px;
	z-index:1;
}
.Estilo2 {font-size: 42px
}
.Estilo3 {color: #CCCCCC}
#apDiv2 {	position:absolute;
	left:214px;
	top:54px;
	width:430px;
	height:56px;
	z-index:2;
}
.Estilo4 {
	font-size: 12px
}
-->
  </style>
</head>

<body>
<?php
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];
$men=$_POST['men'];

$header.="Mime-Version: 1.0 \r\n";
$header.= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "mail: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $men . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
$mensaje .= "Mensaje enviado del formulario Contactos - Hotel Joshed Imperial.";

$para = 'madelosangeles_ed@hotmail.com,hoteljoshed@hotmail.com';
$asunto = 'Hotel Joshed - Contactos';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo '';

   ?>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="apDiv1">
          <div align="center"><img src="hotel.png" alt="" width="116" height="102" /></div>
        </div>
        <div class="Estilo2" id="apDiv2"><span class="Estilo3">Hotel</span> <span class="alternate_colour">Joshed Imperial</span></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="tab_selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="http://www.hoteljoshed.com/home.html" target="_parent">Inicio</a></li>
          <li><a href="http://www.hoteljoshed.com/servicio.html" target="_parent">Servicios</a></li>
          <li><a href="http://www.hoteljoshed.com/empresa.html" target="_parent">Empresa</a></li>
          <li><a href="http://www.hoteljoshed.com/habita.html" target="_parent">Habitaciones</a></li>
          <li><a href="http://www.hoteljoshed.com/contact.html" target="_parent">Contactos</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="panel"><img src="imagen/8.JPG" alt="" width="795" height="155" /></div>
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h1>Promociones</h1>
        <h2>por temporada</h2>
        <h3>Dos d&iacute;as tres noches</h3>
        <h1>Adem&aacute;s...</h1>
        <ul>
          <li><a href="http://www.hoteljoshed.com/salon.html" target="_parent">Sal&oacute;n Imperial</a></li>
          <li><a href="http://www.hoteljoshed.com/resta.html" target="_parent">Cafeter&iacute;a Restaurant Princess</a></li>
          <li><a href="http://www.hoteljoshed.com/gym.html" target="_parent">Gimnasio</a></li>
          <li><a href="http://www.hoteljoshed.com/reser.html" target="_parent">Reservaciones</a></li>
        </ul>
        <h1>Gu&iacute;a Tur&iacute;stica</h1>
        <p align="center"><a href="http://www.hoteljoshed.com/guia1.html" target="_parent"> Ciudad de Latacunga</a></p>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Su mensaje fue enviado con &eacute;xito...</h1>
        <h2 class="alternate_colour">Enseguida un ejecutivo se pondr&Aacute; en contacto con usted....</h2>
        <h1><a href="http://www.hoteljoshed.com/home.html" target="_parent" class="Estilo4">Regresar &gt;</a></h1>
      </div>
      <div id="site_content_bottom"></div>
    </div>
    <div id="footer">Copyright &copy;  Hotel Joshed Imperial. All Rights Reserved. |  XHTML | CSS | design by Expertos <script type="text/javascript" src="http://contadores.miarroba.es/ver.php?id=669868"></script></div>
</div>
<div style="text-align: center; font-size: 0.75em;"></div>
</body>
</html>
