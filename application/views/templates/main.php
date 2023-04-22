<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author     CDS
 * 
 *
 **/
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>
        <?php echo (isset($title)) ? $title . ' || ' . WEBSITE_NAME . ' || Certificados En Línea' : WEBSITE_NAME . ' || Certificados En Línea'; ?>
    </title>
    <?php
  // Add any keywords 
  echo (isset($keywords)) ? meta('keywords', $keywords) : '';

  // Add a discription
  echo (isset($description)) ? meta('description', $description) : '';

  // Add a robots exclusion
  echo (isset($no_robots)) ? meta('robots', 'noindex,nofollow') : '';
  ?>
    <?php
  // Favicon<!-- Core CSS de Bootstrap-->  

  echo link_tag(array('href' => 'img/favicon.ico', 'media' => 'all', 'rel' => 'shortcut icon')) . "\n";
  // Always add the main stylesheet
  echo link_tag(array('href' => 'bootstrap/css/bootstrap.css', 'media' => 'screen', 'rel' => 'stylesheet')) . "\n";
  echo link_tag( array( 'href' => 'open-iconic-master/font/css/open-iconic-bootstrap.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";
  echo link_tag( array( 'href' => 'css/font-awesome.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";
  echo link_tag( array( 'href' => 'css/gris/jquery-ui-1.10.3.custom.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";
  // Add any additional stylesheets
  if (isset($style_sheets)) {
    foreach ($style_sheets as $href => $media) {
      echo link_tag(array('href' => $href, 'media' => $media, 'rel' => 'stylesheet')) . "\n";
    }
  }
  echo link_tag(array('href' => 'css/style.css', 'media' => 'screen', 'rel' => 'stylesheet')) . "\n";

  // jQuery  always loaded
  echo script_tag('js/jquery-1.9.1.js') . "\n";
  echo script_tag('js/jquery.ui.datepicker-es.min.js') . "\n";
  echo script_tag('js/jquery-ui-1.10.2.custom.min.js') . "\n";
  echo script_tag('js/bootstrap.min.js') . "\n";
  //echo script_tag( 'js/chosen.jquery.min.js' ) . "\n";


  // Add any additional javascript
  if (isset($javascripts)) {
    for ($x = 0; $x <= count($javascripts) - 1; $x++) {
      echo script_tag($javascripts["$x"]) . "\n";
    }
  }

  // Add anything else to the head
  echo (isset($extra_head)) ? $extra_head : '';
  ?>

  <style>
      /* Estilos para nuevo menu */
      @media (max-width: 1142px) {
        .zona-boton{
          width: 95%;
          float: left;
          margin: 0.3rem;
          padding: 2rem 2rem;
          border: 1px solid #008000;
          border-radius: 4px;
          background-color: #00B100;
          text-shadow: 0 -1px 0 rgba(0,0,0,.5);
          box-shadow: 0 1px 0 rgba(255,255,255,.5) inset,
          0 1px 3px rgba(0,0,0,.2);
          background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#00B100),to(#008000));
          background-image: linear-gradient(#00B100 10%,#008000 100%);
          text-align: center;
        }

        .btn-3d {
          padding: .6rem 1rem;
          border: 1px solid #fff;
          border-radius: 4px;
          background-color: #008000;
          color: #fff;
          font-size: 1.4rem;
          text-shadow: 0 -1px 0 rgba(0,0,0,.5);
          box-shadow: 0 1px 0 rgba(255,255,255,.5) inset, 0 1px 3px rgba(0,0,0,.2);
          background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#00B100),to(#008000));
          background-image: linear-gradient(#00B100 10%,#008000 100%);
        }

        .btn-3d:hover, .btn-3d:focus {
          background-color: #008000;
          background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#00B100),to(#008000));
          background-image: linear-gradient(#00B100 10%,#008000 100%);
          color: #fff;
          text-decoration: none;
        }

        .btn-3d:active {
          background-color: #008000;
          box-shadow: 0 2px 3px 0 rgba(0,0,0,.2) inset;
          background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#00B100),to(#008000));
          background-image: linear-gradient(#00B100 10%,#008000 100%);
          color: #fff;
        }
      }
      @media (min-width: 1142px) {
        .zona-boton{
          width: 48%;
          float: left;
          margin: 0.3rem;
          padding: 2rem 2rem;
          border: 1px solid #008000;
          border-radius: 4px;
          background-color: #008000;
          text-shadow: 0 -1px 0 rgba(0,0,0,.5);
          box-shadow: 0 1px 0 rgba(255,255,255,.5) inset,
          0 1px 3px rgba(0,0,0,.2);
          background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#00B100),to(#008000));
          background-image: linear-gradient(#00B100 10%,#008000 100%);
          text-align: center;
        }

        .btn-3d {
          padding: .6rem 1rem;
          border: 1px solid #fff;
          border-radius: 4px;
          background-color: #008000;
          color: #fff;
          font-size: 1.4rem;
          text-shadow: 0 -1px 0 rgba(0,0,0,.5);
          box-shadow: 0 1px 0 rgba(255,255,255,.5) inset, 0 1px 3px rgba(0,0,0,.2);
          background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#00B100),to(#008000));
          background-image: linear-gradient(#00B100 10%,#008000 100%);
        }

        .btn-3d:hover, .btn-3d:focus {
          background-color: #008000;
          background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#00B100),to(#008000));
          background-image: linear-gradient(#00B100 10%,#008000 100%);
          color: #fff;
          text-decoration: none;
        }

        .btn-3d:active {
          background-color: #008000;
          box-shadow: 0 2px 3px 0 rgba(0,0,0,.2) inset;
          background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#00B100),to(#008000));
          background-image: linear-gradient(#00B100 10%,#008000 100%);
          color: #fff;
        }
      }

  </style>
</head>

<body>
<div class="headerGov">
    <div class="top">
        <a href="https://www.gov.co/" target="_blank" alt="Gov.co"><img src="https://css.mintic.gov.co/mt/mintic/img/header_govco.png" alt="Gov Co" style="max-height: 20px;"></a>
    </div>
</div>
    <!--
        |
        | ::::::: Menu
        |
    -->
    <style>
    .header {
        background: #fff;
        box-shadow: 2px 2px 4px #80808000;
        height: 110px;
        width: 100%;
    }
    </style>
    

  
   
    <div id="welcomeMenuBox">

        <br>

<div class="img-fluid"> <?php echo anchor('auth/consulta', img(array('src' => 'img/mintrabajo.png', 'alt' => 'Responsive image', 'style'=>' margin-left: 41%;
    max-width: 60%; '))) . "\n"; ?> </div>



    </div>
    <div class="wrapper row0 clear s4-notdlg">
        <div id="upper">
            <div id="upperContact">

                <script type="text/javascript">
                var meses = new Array("ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO",
                    "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
                var diasSemana = new Array("DOMINGO", "LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO");
                var f = new Date();
                document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " DE " + meses[f.getMonth()] + " " + f
                    .getFullYear());
                </script>
                  <?php if ($this->ion_auth->logged_in()) { ?>
                &nbsp;
                <a href="<?php echo base_url(); ?>index.php/auth/logout"
                    title="CERRAR SESIÓN" id="register_link" style="font-size:12px;font-family:Roboto Condensed ;"><i class="fa fa-user-plus"></i>&nbsp;CERRAR SESIÓN</a>
                    <?php } ?>
                  </div>


        </div>

    </div>

    <div class="container-xl">
      

        <div class="header">
            <?php echo anchor('auth/consulta', img(array('src' => 'img/logoSena.png', 'alt' => 'Responsive image','class'=>'img-fluid'))) . "\n"; ?>
            <!--   <div class="logo-separator"></div>-->

        </div>


        </div>

        <div class="row TableRowMaster">

        </div>
        <!-- /.masthead -->
        <!--
        |
        | ::::::: Content
        |
    -->
        <div id="contents"> <?php echo $contents ?> </div>

        <!--
        |
        | ::::::: Foooter
        |
    -->
    <div class="wrapper row2 s4-notdlg">
		    <div id="copy" class="clear">
				<div class="flLeft left footerCopy">
					<div class="push10">
						Servicio Nacional de Aprendizaje SENA - Dirección General<br>
						Calle 57 No. 8 - 69 Bogotá D.C. (Cundinamarca), Colombia<br>
						Conmutador Nacional (57 1) 5461500 - Extensiones<br>
						Atención presencial: lunes a viernes 8:00 a.m. a 5:30 p.m. - <a href="/es-co/sena/Paginas/directorio.aspx" target="_blank">Resto del país sedes y horarios</a><br>
						Atención telefónica: lunes a viernes 7:00 a.m. a 7:00 p.m. - sábados 8:00 a.m. a 1:00 p.m.<br>
						Atención al ciudadano: Bogotá (57 1) 3430111 - Línea gratuita y  resto del país 018000 910270<br>
						Atención al empresario: Bogotá (57 1) 3430101 - Línea gratuita y resto del país 018000 910682<br>
						<a href="http://sciudadanos.sena.edu.co/SolicitudIndex.aspx" target="_blank">PQRS</a><br>
						<a href="http://www.sena.edu.co/es-co/ciudadano/Paginas/chat.aspx" target="_blank">Chat en linea</a><br>
						<!--Correo servicio al cliente: gpservicioalcliente@sena.edu.co<br/>-->
						Correo notificaciones judiciales: servicioalciudadano@sena.edu.co<br>
						<div class="flLeft">Todos los derechos 2017 SENA - <a href="http://www.sena.edu.co/es-co/Paginas/politicasCondicionesUso.aspx" target="_blank">Políticas de privacidad y condiciones uso Portal Web SENA</a><br>
						<a href="http://www.sena.edu.co/es-co/transparencia/Documents/proteccion_datos_personales_sena_2016.pdf" target="_blank">Política de Tratamiento para Protección de Datos Personales</a> - <a href="http://compromiso.sena.edu.co/index.php?text=inicio&amp;id=27" target="_blank">Política de seguridad y privacidad de la información</a></div>
						
						</div>
				</div>
			
				<!-- Copy -->	
	
					
		    
		</div>
        <?php
        // Insert any HTML before the closing body tag if desired
        if (isset($final_html)) {
          echo $final_html;
        }

        // Add the cookie checker
        if (isset($cookie_checker)) {
          echo $cookie_checker;
        }

        // Add any javascript before the closing body tag
        if (isset($dynamic_extras)) {
          echo '<script>
        ';
          echo $dynamic_extras;
          echo '</script>
        ';
        }
        ?>
        <script language="javascript" type="text/javascript">
        $(document).ready(function() {
            window.location.hash = "no";
            window.location.hash = "Again-No" //chrome
            window.onhashchange = function() {
                window.location.hash = "no";
            }
        });
        </script>
        <style>
        @media (min-width: 1200px) {
            .container-xl {
                max-width: 100%;
            }
        }


        .float-right {

            display: block;
            float: right;

            width: auto;

            margin-right: 60px;

            font-size: 0.85em;
            margin-top: -10px;
        }




     
        .ms-signInLink {

            margin-top: -8px;

        }


        .ms-welcome-hover>a.ms-core-menu-root,
        .ms-signInLink:hover {

            color: #444;
            text-decoration: none;

        }

        .ms-welcome-root>a.ms-core-menu-root,
        .ms-signInLink {

            color: #666;
            text-decoration: none;
            height: 30px;

        }

        .ms-signInLink {

            vertical-align: middle;
            display: inline-block;
            line-height: 30px;
            padding: 0px 7px 0px 11px;

        }

        #welcomeMenuBox {

            float: right;
            text-transform: uppercase;
            height: 0px;
            margin-right: 60px;

        }
        #register_link{
          font: normal 13px helvetica,arial,sans-serif;
list-style: none;
box-sizing: initial;
text-decoration: none;
background: #00B100;
color: #fff;
font-weight: bold;
display: inline-block;
padding: 8px
10px;
border: 1px
solid #ccc;
border-radius: 5px;
text-shadow: 0px 1px 2px rgba(0,0,0,0.3);
text-transform: uppercase;
font-size: 12px;
        }


        .row2 {
    color: #fff;
    background-color: #008000;
    z-index: 600;
}

.wrapper {
    display: block;
    width: 100%;
    margin: 0;
    padding: 0;
    text-align: left;
    word-wrap: break-word;
}

.push10 {
    margin-bottom: 10px;
}

body, .ms-core-defaultFont, #pageStatusBar, .ms-status-msg, .js-callout-body {
    font-family: "Segoe UI","Segoe",Tahoma,Helvetica,Arial,sans-serif;
    font-size: 13px;
}
#copy {
    font-size: .85em;
    line-height: 1.5em;
}
#copy {
    padding: 10px 0;
}
 #header, #topnav, #container, #copy {
    max-width: 1028px;
    margin: 0 auto;
}
.clear {
    display: block;
    clear: both;
}
.row2 a {
    color: #fff;
}


.flRight, .imgr {
    float: right;
}
.footerCopy {
    padding-top: 11px;
}
.left {
    text-align: left;
}

#footCopy li:first-child {

    margin: 0;
    padding: 0;

}
#footCopy li {

    display: inline;
    margin: 0 0 0 15px;
    padding: 0 0 0 15px;
    float: left;

}
#footCopy ul {

    list-style: none;

}

        </style>
</body>

</html>
<?php

/* End of file main.php */
/* Location: /application/views/templates/main.php */
