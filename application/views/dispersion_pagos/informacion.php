<?php
/**
 * Formulario para la busqueda de pagos FIC por Nit y/o Tickets
 *
 * @package          Cartera
 * @subpackage       Views
 * @author           jdussan
 * @location         application/views/dispersion_pago/
 * @last-modified    23/06/2014
 * @copyright
*/
if( ! defined('BASEPATH') ) exit('No direct script access allowed'); 
?>

<br><br>
<h1>Dispersar Pagos</h1>
<br><br>
<div class="center-form-xlarge" id="formulario-busqueda">
    <?php
    if (isset($message)):
        echo $message;
    endif;
    ?>
<h2><strong> <i class="fa fa-circle" aria-hidden="true"></i> Información pago a dispersar Ticket #76339526</h2>
    <div class="p-3 col-sm-12 bg-light text-center">
        <div class="row">
        <br>
        <div class="col-md-12 col-sm-12">
            <table class="table table-striped table-hover" width="100%">
                <tr>
                    <td style="text-align: right !important;">Nombre constructor: </td>
                    <td>TECNOENCOFRADOS CUCUTA S.A.S.</td>
                </tr>
                <tr>
                    <td style="text-align: right !important;">Valor pago: </td>
                    <td>247969</td>
                </tr>
                <tr>
                    <td style="text-align: right !important;">Fecha pago: </td>
                    <td>2022-07-19 00:00:00</td>
                </tr>
                <tr>
                    <td style="text-align: right !important;">Periodo pago: </td>
                    <td>2022-12</td>
                </tr>
                <tr>
                    <td style="text-align: right !important;">Ciudad obra: </td>
                    <td>villa del rosario</td>
                </tr>
                <tr>
                    <td style="text-align: right !important;">Nombre obra: </td>
                    <td>petra</td>
                </tr>
                <tr>
                    <td style="text-align: right !important;">Número obra: </td>
                    <td>1550049</td>
                </tr>
            </table>
        </div>
        </div>
    </div>
    <br>
<h2><strong> <i class="fa fa-circle" aria-hidden="true"></i> Cargue archivo para dispersión</h2>
    <div class="p-3 col-sm-12 bg-light text-center">
        <div class="row">
        <br>
            <p>
                <?php
                echo form_open_multipart("dispersion_pagos/dispersar_exito");
                 echo form_label('Seleccionar archivo<span class="required">*</span>', 'archivo');
                ?>
                <input type="file" name="archivo-gerente" size="1">
            </p>
            <p>
                <?php  echo anchor('gerente_publico', '<i class="fa fa-times" aria-hidden="true"></i> Cancelar', 'class="btn btn-warning"'); ?>
                <?php
                    $data = array(
                        'name' => 'button',
                        'id' => 'submit-button',
                        'value' => 'Cargar',
                        'type' => 'submit',
                        'content' => '<i class="fa fa-cloud-upload fa-lg"></i> Cargar',
                        'class' => 'btn btn-success'
                    );
                    echo form_button($data);
                    echo form_error('archivo','<div>','</div>');
                    echo form_close();
                ?>
            </p>
        </div>
    </div>
    <h2><?php if(isset($mensaje)) echo $mensaje; ?></h2>
    <?php echo validation_errors();?><!--mostrar los errores de validación-->
 </div>
