
<div class="preload"></div><img class="load" src="<?php echo base_url('img/27.gif'); ?>" width="128" height="128" />
<div id="contents " style=" min-width: 100%;">
<div class="center-form-large " style=" width:70%; ">
<h1 style=" font-weight: 550; ">Certificados Fic</h1>


    


<table class="abs-center" >
    <tr>
        <td> <strong>Certificado: </strong></td>
        <td>
            <select id="certificado" name="certificado"  style="width: 260px;height: 32px;">
            <option value="-1" select>Seleccione</option>
            <?php 
                foreach ($select as $key => $value) {
                    echo '<option value="'.$value['VALUE'].'">'.$value['NOMBRE'].'</option>';
                }
                ?>
               <!-- <option value="-1"></option>
                <option value="certificados7">Pagos Ordinarios/Nit – Licencia/N° Contrato</option> 
                <option value="certificados8">Pagos Ordinarios/Nro Transacción</option>
                <option value="certificados9">Pagos Ordinarios / Nit – Periodo </option>
                <option value="certificados10">Pagos Ordinarios/Obra</option>
                <option value="certificados12">Pagos Ordinarios/Nro. Referencia Dispersión</option>
                <option value="certificados13">Liquidaciones-Resoluciones/NIT</option>
                <option value="certificados15">Liquidaciones-Resoluciones/Nro. Liquidacion</option>
                <option value="certificados16">Pagos Ordinarios/NIT-Periodo</option>-->
            </select>
        </td>
    </tr>
    <tr>
    <br>
  


        <td colspan="2">
        <br>
        <div class="col-md-12">
                    <center>
                        <div class="btn-group">
<br>
                        <center><button id="cargar" class="btn btn-primary btn-sm">Cargar  </button></center>
                        <div id="ajax_load" class="col-sm"  style="display: none"> <?php  echo anchor('auth/consulta', '<i class="icon-remove"></i> Cancelar', 'class="btn btn-warning"'); ?></div>
                    </center>
                </div>
            </div>

    
</td>
</tr>
</table>
<hr>

<div id="resultado" style="display: none; "></div>

<script>
$("#certificado option[value=certificados22]").hide();
   
   function regresar() {
    window.location.href = "<?php echo base_url('index.php/auth/consulta') ?>";
}

$("#ajax_load").show();
$('#certificado').change(function() {
        
           
            document.getElementById('resultado').style.display = 'none';
            $("#ajax_load").show();
        
    });

    document.getElementById('resultado').style.display = 'block';

    $('#cargar').click(function() {
        $("#ajax_load").hide();
        document.getElementById('resultado').style.display = 'block';

        var certificado = $('#certificado').val();
        if (certificado == '-1') {
            alert('No se ha seleccionado el certificado'); 
            $("#ajax_load").show();
            return false;
        }
        jQuery(".preload, .load").show();
        var url = "<?php echo base_url("index.php/iniciocertificados/") ?>";
        $.post(url + '/' + certificado, {certificado: certificado})
                .done(function(msg) {
                    $('#resultado').html(msg)
                    jQuery(".preload, .load").hide();
                }).fail(function(msg) {
            alert('Error de conexión');
            jQuery(".preload, .load").hide();
        })
    })
$("#ajax_load").show();
    jQuery(".preload, .load").hide();
</script>
<style>

    .abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 10vh;
}
</style>