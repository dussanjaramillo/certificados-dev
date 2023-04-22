<style>
@media screen and (max-width: 600px) {
    table {
        width: 100%;
    }

    thead {
        display: none;
    }

    tr:nth-of-type(2n) {
        background-color: inherit;
    }

    tr td:first-child {
        background: #f0f0f0;
        font-weight: bold;
        font-size: 1.3em;
    }

    tbody td {
        display: block;
        text-align: center;
    }

    .formErrorContent {
        width: 100%;
        background: #ee0101;
        position: relative;
        color: #fff;
        min-width: 120px;
        font-size: 11px;
        border: 2px solid #ddd;
        box-shadow: 0 0 6px #000;
        -moz-box-shadow: 0 0 6px #000;
        -webkit-box-shadow: 0 0 6px #000;
        -o-box-shadow: 0 0 6px #000;
        padding: 4px 10px 4px 10px;
        border-radius: 6px;
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px;
        -o-border-radius: 6px;
    }

    tbody td:before {
        content: attr(data-th);
        display: block;
        text-align: center;
    }

    .o6cuMc {
        -webkit-align-items: flex-start;
        align-items: flex-start;
        color: #d93025;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        font-size: 12px;
        line-height: normal;
        margin-top: 2px;
    }

    
}


.login-sec h2{margin-bottom:28px; font-weight:800; font-size:28px; color: #01AF01;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:10px; border-radius:3px; margin-left:auto;margin-right:auto}
.body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: center;
}

</style>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


<script>
function beforeSubmit() {
    $('#login').submit();
}

$(function() {
    $('#usuario').on('change', function() {
        beforeSubmit();
    });
});


function beforeSubmit() {
    $('#login').submit();
}

$(function() {
    $('#ingresar').on('change', function() {
        beforeSubmit();
    });
});
</script>



<?php if( isset( $message ) && !empty( $message )  ) { ?>
  <div class="preload"></div><img class="load" src="<?php echo base_url('img/27.gif'); ?>" width="128" height="128" />
<div class="alert alert-success">
    <?php echo $message;?>
</div>
<?php } ?>
<?php //echo form_open("iniciocertificados/modificarClave"); ?>

<form id="form1" autocomplete="off" action="<?= base_url('index.php/iniciocertificados/modificarClave') ?>"
    method="post">
    <input type="hidden" readonly="readonly" id="nit" name="nit" value="<?php echo $idAportante;  ?>">
    <input type="hidden" readonly="readonly" id="identity" name="identity" value="<?php echo $correo;  ?>">
    <input type="hidden" readonly="readonly" id="password" name="password">


</form>
<div class="container-fluid">
    <div class="row colored">
        <div id="contentdiv" class="contcustom">
            <table border="0" autocomplete="off">
            <tr HEIGHT="60">
    <td colspan="2" >
    <div class="p-1 col-sm-12 bg-light text-dark ">

    <div class="col-md-12 login-sec">
    <h2 class="text-center">CERTIFICADOS DE APORTES Y FIC</h2>
    </div>
    </div>
   </td>
  </tr>
                <tr HEIGHT="60">
                    <td><label for="fname"><STRONG>USUARIO: </STRONG></label></td>
                    <td>
                        <!--<input  type="text" id="identity" name="identity">-->

                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input aria-hidden="true" type="text" class="form-control" name="identity" id="identity"
                                placeholder="Usuario"
                                value="<?php if($correo != "") {echo $correo;} else { echo "";}  ?> " readonly>
                        </div>


                    </td>
                </tr>
                <tr HEIGHT="60" autocomplete="off">
                    <td width="130px"><label for="fname" autocomplete="off"><STRONG>CONTRASEÑA: &nbsp;
                                &nbsp;</STRONG></label></td>
                    <td autocomplete="off">
                        <!--<input  type="password" id="password" name="password">-->
                        <label class="sr-only" for="inlineFormInputGroup" autocomplete="off">Password</label>

                        <div class="input-group mb-2" autocomplete="off">
                            <div class="input-group-prepend" autocomplete="off">
                                <div class="input-group-text"><i class="fas fa-key prefix" aria-hidden="true"
                                        autocomplete="off"></i></div>
                            </div>
                            <input name="password" id="input-pwd" autocomplete="off" class="form-control validate"
                                required>

                            <div class="input-group-text" autocomplete="off"> <span toggle="#input-pwd"
                                    autocomplete="off" class="fa fa-fw fa-eye field-icon toggle-password"
                                    size="40"></span></div>

                        </div>
                        <div class="kTNrif" jsname="cyzLac" aria-live="assertive" style="color: red;">Utilizar ocho caracteres como mínimo
                            maximo 15, con una combinación de letras, números y símbolos, sin espacios</div>
                    </td>



                </tr>


                <tr HEIGHT="60">
                    <td width="130px"><label for="fname"><STRONG>CONFIRMAR CONTRASEÑA: &nbsp; &nbsp;</STRONG></label>
                    </td>
                    <td>
                        <!--<input  type="password" id="password" name="password">-->
                        <label class="sr-only" for="inlineFormInputGroup" required>Password</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-key prefix" aria-hidden="true"></i></div>
                            </div>
                            <input name="password2" id="input-pwd2" class="form-control validate" required>
                            <div class="input-group-text"> <span toggle="#input-pwd2"
                                    class="fa fa-fw fa-eye field-icon toggle-password2" size="40"></span></div>


                        </div>
                        <div id="o6cuMc" class="o6cuMc" style="display: none; color: #d93025; " jsname="cyzLac"
                            aria-live="assertive">Estas contraseñas no coinciden; inténtalo de nuevo.</div>
                        <div id="pruebas" class="pruebas" style="display: none; color: #d93025; " jsname="cyzLac"
                            aria-live="assertive">No cumple con las condiciones de Seguridad.</div>
                        <div id="pruebas1" class="pruebas1" style="display: none; color: #d93025; " jsname="cyzLac"
                            aria-live="assertive">Diligencie Los Campo Vacios.</div>

                    </td>
                </tr>

                <tr>
                    <td>

                    </td>


                </tr>


                <tr HEIGHT="60">
                    <td colspan="2">

                        <div class="col-md-12">
                            <center>
                                <div class="btn-group">

                                    <button id="cargar" class="btn btn-primary btn-sm"
                                        onclick="aceptar()">Guardar</button>

                                        &nbsp;  &nbsp;

                                    <?php  echo anchor('auth/consulta', '<i class="icon-remove"></i> Cancelar', 'class="btn btn-warning"'); ?>

                            </center>
                        </div>
        </div>
        </td>
        </tr>


        </table>




        <script>
        $('.toggle-password').on('click', function() {
            $(this).toggleClass('fa-eye fa-eye-slash');
            let input = $($(this).attr('toggle'));
            if (input.attr('type') == 'password') {
                input.attr('type', 'text');
            } else {
                input.attr('type', 'password');
            }
        });

        $('.toggle-password2').on('click', function() {
            $(this).toggleClass('fa-eye fa-eye-slash');
            let input = $($(this).attr('toggle'));
            if (input.attr('type') == 'password') {
                input.attr('type', 'text');
            } else {
                input.attr('type', 'password');
            }
        });
        </script>



    </div>




    <script>
      jQuery(".preload, .load").hide();
    var input = document.getElementById('input-pwd');
    input.addEventListener('input', function() {
        if (this.value.length > 15)
            this.value = this.value.slice(0, 15);
    })

    var input2 = document.getElementById('input-pwd2');
    input2.addEventListener('input', function() {
        if (this.value.length > 15)
            this.value = this.value.slice(0, 15);
    })


    function regresar() {
        window.location.href = "<?php echo base_url('index.php/auth/login') ?>";
    }

    function aceptar() {
        var pswd = $("#input-pwd").val();
        var pswd2 = $("#input-pwd2").val();
        var identity = $("#identity").val();
        $('#identity').val(identity);

        if (pswd2 == '' && pswd == '' || pswd2 == '' || pswd == '') {
            $('#pruebas1').show();
        } else {


            // console.log(pswd);
            if (pswd.length < 8 || pswd.length > 15) {
                $('#length').removeClass('valid').addClass('invalid');
                longitud = false;
            } else {
                $('#length').removeClass('invalid').addClass('valid');
                longitud = true;
            }

            if (pswd.match(/[a-z]/)) {
                $('#letter').removeClass('invalid').addClass('valid');
                minuscula = true;
            } else {
                $('#letter').removeClass('valid').addClass('invalid');
                minuscula = false;
            }

            //validate capital letter
            if (pswd.match(/[A-Z]/)) {
                $('#capital').removeClass('invalid').addClass('valid');
                mayuscula = true;
            } else {
                $('#capital').removeClass('valid').addClass('invalid');
                mayuscula = false;
            }

            //validate number
            if (pswd.match(/\d/)) {
                $('#number').removeClass('invalid').addClass('valid');
                numero = true;
            } else {
                $('#number').removeClass('valid').addClass('invalid');
                numero = false;
            }

            //validate espacio
            if (pswd.match(/\ /)) {
                $('#espacio').removeClass('valid').addClass('invalid');
                espacio = false;
            } else {
                $('#espacio').removeClass('invalid').addClass('valid');
                espacio = true;
            }

            //validate carcter (?=.*[A-Z])(?=.*[a-z])
            if (pswd.match(/\*/) || pswd.match(/\-/) || pswd.match(/\?/) || pswd.match(/\!/) || pswd.match(/\@/) || pswd
                .match(/\#/) || pswd.match(/\$/) || pswd.match(/\//) || pswd.match(/\(/) || pswd.match(/\)/) || pswd
                .match(/\{/) || pswd.match(/\}/) || pswd.match(/\=/) || pswd.match(/\,/) || pswd.match(/\./) || pswd
                .match(/\;/) || pswd.match(/\:/)) {
                $('#carcarter').removeClass('invalid').addClass('valid');
                caracter = true;
            } else {
                $('#carcarter').removeClass('valid').addClass('invalid');
                caracter = false;
            }
            pass = pswd;
            if (longitud && minuscula && numero && mayuscula && espacio && caracter) {

                if (pswd != pswd2) {
                    $('#o6cuMc').show();
                    $('#pruebas').hide();
                    $('#pruebas1').hide();
                } else {
                    $('#password').val(pass);

                    $('#form1').submit();
                    jQuery(".preload, .load").show();
                    setTimeout(function() {
                        jQuery(".preload, .load").hide();
                    }, 2000);
                }

            } else {
                $('#pruebas').show();
                $('#pruebas1').hide();

                //  $("#input-pwd2").attr("readonly", true); 
            }
        }


    }

    </script>



    <STYLE>
    .invalid {
        background: url(../../img/invalid.png) no-repeat 0 50%;
        padding-left: 22px;
        line-height: 24px;
        color: #ec3f41;
    }

    .valid {
        background: url(../../img/valid.png) no-repeat 0 50%;
        padding-left: 22px;
        line-height: 24px;
        color: #3a7d34;
    }
    </STYLE>