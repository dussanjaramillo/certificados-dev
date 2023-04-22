<script>
  window.document.title = 'Descargar Certificado';
</script>


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<p><br>
 
  <div class="center-form-large " style=" width:70%; ">
    <h1 style=" font-weight: 550; ">
      <?php
      if ($input == 1 || $input == 2 || $input == 17 || $input == 20) {
        echo $titulo;
      }

      ?>
    </h1>
    <br>

    <div class="p-3 col-sm-12 bg-light text-dark ">

      <div class="form-row">

        <div class="col-md-12">
          <legend class="GrupoTabTitle">Descargue su Certificado </legend>
        </div>
      </div>


      <form id="form1" action="<?php echo site_url('iniciocertificados/imprimir'); ?>" method="post" onsubmit="return confirmar()">
        <input type="hidden" name="vista" id="vista" value="<?php echo $vista; ?>">
        <input type="hidden" name="name_reporte" id="name_reporte" value="<?php echo $titulo; ?>"><input type="hidden" name="vista" id="vista" value="<?php echo $vista; ?>">
        <input type="hidden" name="name_reporte" id="name_reporte" value="<?php echo $titulo; ?>">






        <div class="abs-center">

          <table id="validar"class="table table-bordered table-striped">
            <tbody>
              <tr style="display:block; visibility:visible">
                
                <td style="width: 100%" align="center">
                  <?php /*echo $input;*/ if (($input != 8 && $input != 15 && $input != 12) || ($input == 9 && $input == 10)) { ?>
                    <strong><i>Nit/Empresa: <br> <i></i></i></strong><i><i>
                        <input type="text" id="empresa"  class="text-center" name="empresa"  size="29" style="width: 196px" value="<?php echo $nit; ?>"disabled>    
                        <br>
                <td width="21%">
                </td>
              </tr>

            <?php } ?>
            <?php if ($input == 12) { ?>

              <tr style="display:block; visibility:visible">
                
                <td style="width: 100%" align="center">
                  <strong><i>N° Ticket ID: <br><i></i></i></strong><i><i>
                      <input type="text" id="Ntickei" name="Ntickei" size="29" style="width: 196px"><img id="preloadmini" />
                      <br>
                <td width="21%">
                </td>
              </tr>
            <?php } ?>
            <?php if ($input == 8) { ?>


              <tr style="display:block; visibility:visible">
                
                <td style="width: 100%" align="center">
                  <strong><i> Nro. Transacción <br> <i></i></i></strong><i><i>
                      <input type="text" id="transac" name="transac" size="29" style="width: 196px">
                      <br>
                <td width="21%">
                </td>
              </tr>

            <?php } ?>


            <?php if ($input == 9) { ?>



              <tr style="display:block; visibility:visible">
                
                <td style="width: 100%" align="center">
                  <strong><i> Periodo Pago <br><i></i></i></strong><i><i>
                      <input type="text" readonly id="transacion" name="transacion" size="29" style="width: 196px" value="<?php echo date('Y') . '-' . date('n') ?>">
                     
                      <br>
                <td width="21%">
                </td>
              </tr>

            <?php } ?>
            <?php if ($input == 2 || $input == 3 || $input == 17 || $input == 23) { ?>


              <tr style="display:block; visibility:visible">

                <td style="width: 100%" align="center">
                  <strong><i> Año <br><i></i></i></strong><i><i>

                      <select name="ano" id="ano" size="1" size="29" style="width: 196px">

                        <?php
                        $ano = date('Y');
                        $max = 5;
                        if ($input == 2) {
                          $max = $ano - 1989;
                        }
                        for ($i = 0; $i < $max; $i++) {
                        ?>
                          <option value="<?php echo $ano - $i ?>"><?php echo $ano - $i ?></option>
                        <?php
                        }
                        ?>
                      </select>
                      <br>
                <td width="21%">
                </td>
              </tr>
            <?php } ?>
            <?php if ($input == 7 || $input == 10) { ?>

              <tr style="display:block; visibility:visible">
                
                <td style="width: 100%" align="center">
                  <strong><i> Licencia/N°Contrato <br><i></i></i></strong><i><i>
                      <input type="text" name="obra" id="obra" size="29" style="width: 196px">
                      <br>
                <td width="21%">
                </td>
              </tr>
            <?php } ?>
            <?php if ($input == 13 || $input == 15) { ?>


              <tr style="display:block; visibility:visible">
                
                <td style="width: 100%" align="center">
                  <strong><i> Liquidaci&oacute;n / Resoluci&oacute;n <br> <i></i></i></strong><i><i>
                      <input type="text" name="num_proceso" id="num_proceso" size="29" style="width: 196px">
                      <br>
                <td width="21%">
                </td>
              </tr>
            <?php } ?>
            <?php if ($input == 16) { ?>


              <tr style="display:block; visibility:visible">
                
                <td style="width: 100%" align="center">
                  <strong><i> Periodo <br><i></i></i></strong><i><i>
                      <input type="text" class="periodo" readonly id="periodo" name="periodo" size="29" style="width: 196px" value="<?php echo date('Y') . '-' . date('n') ?>">
                      <br>
                <td width="21%">
                </td>
              </tr>
            <?php } ?>


            <tr>
           

                
              </td>
             
            </tr>
            <tr>
            <h3>   <?php
      if ($pdf != "") {
        $decoded = base64_decode($pdf);
        $inform="<center><b></b><br><a href='data:application/pdf;base64,".$pdf."' download='".$nombre.".pdf' TARGET='_blank'>Descargar Documento</a></center>";
     print_r($inform);
        
      }
      ?>
<h3>
                <td colspan="2"><div id="resultado"></div></td>
            </tr>
            </tbody>
          </table>
          <?php $inputs = $input; ?>
        </div>
        <td align="center" colspan="2">

<br>
<div class="col-md-12">
      <center>
          <div class="btn-group">

          <input type="hidden" id="accion" name="accion" value="<?php echo $input; ?>">
          
          <button  id="cargar" class="btn btn-primary btn-sm"
                      >Generar</button>
                      </form>  &nbsp;  &nbsp;
              <?php  echo anchor('auth/consulta', '<i class="icon-remove"></i> Cancelar', 'class="btn btn-warning"'); ?>
           
            </center>
  </div>
</div>
    

    </div>
  </div>
  



  <script>
    var pdf = '<?php echo $pdf; ?>'
    var btnGenerar = false;
    var reciproca = '<?php echo $inputs; ?>'

    if (pdf!=""){
      
document.getElementById('validar').style.display = 'none';
document.getElementById('cargar').style.display = 'none';

    }

    function ajaxValidationCallback( form, json, options) {}

    
function regresar() {
 // console.log("goo");
    window.location.href = "<?php echo base_url('index.php/auth/consulta') ?>";
}

$('#cargar').click(function() {
  
 
    })


   
    function confirmar() {

      if ($('#empresa').val() == '') {
        alert('Campo Nit/ Empresa Obligatorio');
        return false;
      }

      if ($('#Ntickei').val() == '') {
        alert('Campo Ticket Id Obligatorio');
        return false;
      }

      if ($('#obra').val() == '') {
        alert('Campo Licencia/N°Contrato.'); //Licencia/N°Contrato. 
        return false;
      }
      if ($('#transac').val() == '') {
        alert('Campo Nro. Transacción Obligatorio');
        return false;
      }
      if ($('#num_proceso').val() == '') {
        alert('Campo Liquidación / Resolución  Obligatorio');
        return false;
      }
      if ($('#periodo').val() == '') {
        alert('Campo Liquidación / Resolución  Obligatorio');
        return false;
      }
     /* if (reciproca == 17) {
        if (btnGenerar == false) {
          alert("No es una Empresa Recíproca");
          window.location.href = "<?php echo base_url('index.php/auth/consulta') ?>";
       //   $('#empresa').val('');
          return false;

        } else {
          return true;
        }
        return true;
      }*/

    }
    
    
    $("#preloadmini").hide();
    $(".periodo").datepicker({
      buttonText: 'Fecha',
        buttonImageOnly: true,
        numberOfMonths: 1,
        changeMonth: true,
      changeYear: true,
        dateFormat: 'yy-mm',
        showOn: 'button',
        "maxDate" : "0",
        buttonText: 'Seleccione una fecha',
               buttonImage: '<?php echo base_url() . "img/calendario.png" ?>',
       buttonImageOnly: true,
               numberOfMonths: 1,
    });

    $("#transacion").datepicker({
      buttonText: 'Fecha',
        buttonImageOnly: true,
        numberOfMonths: 1,
        changeMonth: true,
      changeYear: true,
        dateFormat: 'yy-mm',
        showOn: 'button',
        "maxDate" : "0",
        buttonText: 'Seleccione una fecha',
               buttonImage: '<?php echo base_url() . "img/calendario.png" ?>',
       buttonImageOnly: true,
               numberOfMonths: 1,
    });

  </script>


  <script>



function outterFunction() {
    console.log('cccc');
 
    var nameConExtension = "certificado.pdf";
    var arrBuffer = base64ToArrayBuffer(data);

// It is necessary to create a new blob object with mime-type explicitly set
// otherwise only Chrome works like it should
var newBlob = new Blob([arrBuffer]);

// IE doesn't allow using a blob object directly as link href
// instead it is necessary to use msSaveOrOpenBlob
if (window.navigator && window.navigator.msSaveOrOpenBlob) {
    window.navigator.msSaveOrOpenBlob(newBlob);
    return;
}

// For other browsers: 
// Create a link pointing to the ObjectURL containing the blob.
var data = window.URL.createObjectURL(newBlob);

var link = document.createElement('a');
document.body.appendChild(link); //required in FF, optional for Chrome
link.href = data;
link.download = name;
link.click();
window.URL.revokeObjectURL(data);
link.remove();
  
}

    jQuery(".preload, .load").hide();
    $('.push').click(function() {
      $(".preload, .load").show();
      setTimeout(function() {
        jQuery(".preload, .load").hide();
      }, 200);
    });
  </script>
  <style>
    input {
      width: 100%;
      margin-bottom: 7px;
      padding: 1px;
      background-color: none;
      border-radius: 2px;
      border: 1.5px solid #AAA;
    }

    .table {
      margin: auto;
      width: 50% !important;
    }

    .table td {
      text-align: center;
    }
    .abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 10vh;
}
  </style>
  