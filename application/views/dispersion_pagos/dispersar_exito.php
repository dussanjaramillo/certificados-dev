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
<h2><strong> <i class="fa fa-circle" aria-hidden="true"></i> Listado de pagos creados tras dipersión con éxito </h2>
    <div class="p-3 col-sm-12 bg-light text-center">
        <div class="row">
        <br>
        <div class="col-md-12 col-sm-12">
        <table class="table table-striped table-hover" width="100%">
            <thead>
                <tr>
                    <th>Ticket pago</th>
                    <th>Nombre constructor</th>
                    <th>Valor pago</th>
                    <th>Fecha pago</th>
                    <th>Período pago</th>
                    <th>Ciudad obra</th>
                    <th>Nombre obra</th>
                    <th>Número obra</th> <!-- Prueba comments -->
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>763395261</td>
            <td>TECNOENCOFRADOS CUCUTA S.A.S.</td>
            <td>62000</td>
            <td>2022-12-27 15:21:00</td>
            <td>2022-12</td>
            <td>BAMBUCO</td>
            <td>ACTA NO 1 ACTA NO 2 3305  BAM 024</td>
            <td></td>
        </tr>
        <tr>
            <td>763395262</td>
            <td>TECNOENCOFRADOS CUCUTA S.A.S.</td>
            <td>62000</td>
            <td>2022-12-27 15:21:00</td>
            <td>2022-12</td>
            <td>PAIME</td>
            <td>4295 41 CONROL LA RIVIERE TORRE 2</td>
            <td></td>
        </tr>
        <tr>
            <td>763395263</td>
            <td>TECNOENCOFRADOS CUCUTA S.A.S.</td>
            <td>62000</td>
            <td>2022-12-27 15:21:00</td>
            <td>2022-12</td>
            <td>FRIKO</td>
            <td>3172</td>
            <td></td>
        </tr>
        <tr>
            <td>763395264</td>
            <td>TECNOENCOFRADOS CUCUTA S.A.S.</td>
            <td>62000</td>
           <td>2022-12-27 15:21:00</td>
            <td>2022-12</td>
            <td>LA PLAYITA</td>
            <td>3173</td>
            <td></td>
        </tr>
        </tbody>
    </table>
            <p class="text-center">
                <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Dispersar pago" href="#"> <i class="fa fa-file-excel-o"></i> Descargar Informe</a>
            </p>
            <br>
        </div>
        </div>
    </div>
<h2><?php if(isset($mensaje)) echo $mensaje; ?></h2>
    <?php echo validation_errors();?><!--mostrar los errores de validación-->
 </div>
