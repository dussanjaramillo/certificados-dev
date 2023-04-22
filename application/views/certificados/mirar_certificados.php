
<style type="text/css">
input {
    width: 100%;
    margin-bottom: 1px;
    padding: 15px;
    background-color: none;
    border-radius: 2px;
    border: 1px solid #D0D0D0;
}
</style>
<div class="preload"></div><img class="load" src="<?php echo base_url('img/27.gif'); ?>" width="128" height="128" />
<div id="contents " style=" min-width: 100%;">
<div class="center-form-large " style=" width:70%; ">
<center><h1 style=" font-weight: 550; ">Consulta de Certificados</h1></center>
<div class="p-3 col-sm-12 bg-light text-dark ">

    

        

          <table class="table table-bordered table-striped">
              
            <tr>
                <td>NUMERO DE CERTIFICADO.</td>
                <td><input type="text" name="numero" id="numero" maxlength="16"></td>
            </tr>
            <tr>
                <td>CODIGO DE VERIFICACIÓN</td>
                <td><input type="text" name="codigo" id="codigo" maxlength="16"></td>
            </tr>
            <tr>
                <td colspan="2"><div id="resultado"></div></td>
            </tr>
            <tr>
            <div class="col-md-12">
        <center>
            <div class="btn-group">

            <td colspan="2" align="center"><button id="consultar"  class="btn btn-primary btn-sm">Consultar</button>
            <?php  echo anchor('auth/consulta', '<i class="icon-remove"></i> Cancelar', 'class="btn btn-warning"'); ?></td>
        </center>
    </div>
</div>
</div>
               
            </tr>
        </table>
</center>
</div>

<script>
   var data = "";
$('#consultar').click(function(){
    var numero=$('#numero').val();
    var codigo=$('#codigo').val();
    if(numero=="" || codigo==""){
        alert('Informacion Incompleta');
        return false;
    }
    jQuery(".preload, .load").show();
    var url = "<?php echo base_url('index.php/iniciocertificados/buscar_certificado'); ?>";
    $.post(url,{numero:numero,codigo:codigo})
            .done(function(msg){
                var inform=""
             //   console.log(msg);
                if(msg!=0){
                 //   console.log(msg);   
                data = msg;
                    inform="<center><b>El certificado es valido!!</b><br><a href='data:application/pdf;base64,"+msg+"' download='"+codigo+""+numero+".pdf' TARGET='_blank'>Descargar Documento</a></center>";
                    jQuery(".preload, .load").hide();
                }else{
                    inform="<center><b>Datos no Encontrados</b></center>";
                    jQuery(".preload, .load").hide();
                }
                $('#resultado').html(inform)
            }).fail(function(msg){
                
            })
})
jQuery(".preload, .load").hide();



function regresar() {
    window.location.href = "<?php echo base_url('index.php/auth/login') ?>";
}
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
</script>
