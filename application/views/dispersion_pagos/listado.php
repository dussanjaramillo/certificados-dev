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
<h2><strong> <i class="fa fa-circle" aria-hidden="true"></i> Seleccionar pago a dispersar</h2>
    <div class="p-3 col-sm-12 bg-light text-center">
        <div class="row">
        <br>
        <div class="col-md-12 col-sm-12">
            <table class="table table-striped table-hover" width="100%" id="listado_pagos">
                    <thead>
                    <tr>
                        <th>Ticket pago</th>
                        <th>Nombre constructor</th>
                        <th>Valor pago</th>
                        <th>Fecha pago</th>
                        <th>Período pago</th>
                        <th>Ciudad obra</th>
                        <th>Nombre obra</th>
                        <th>Número obra</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>76339526</td>
                        <td>TECNOENCOFRADOS CUCUTA S.A.S.</td>
                        <td>247969</td>
                        <td>2022-07-19 00:00:00</td>
                        <td>2022-12</td>
                        <td>villa del rosario</td>
                        <td>petra</td>
                        <td>1550049</td>
                        <td>
                            <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Dispersar pago" href="<?php echo base_url(), "index.php/dispersion_pagos/informacion" ?>"> <i class="fa fa-cubes"></i> Dispersar</a>
                        </td>
                    </tr>
                    <!--<tr>
                        <td>61579466</td>
                        <td>CAMACHO LTDA</td>
                        <td>277.450</td>
                        <td>2021-07-13 14:20:00</td>
                        <td>JUN-2021</td>
                        <td>PAIME</td>
                        <td>EDIFICIO CALLE 100 X 11B</td>
                        <td>051</td>
                        <td>
                            <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Dispersar pago" href="<?php echo base_url(), "index.php/dispersion_pagos/informacion" ?>"> <i class="fa fa-cubes"></i> Dispersar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>61579476</td>
                        <td>CAMACHO LTDA</td>
                        <td>221.850</td>
                        <td>2021-06-08 09:00:00</td>
                        <td>MAY-2021</td>
                        <td>CALI</td>
                        <td>OPTIMIZACION BOCATOMAS SANTAGE</td>
                        <td>003</td>
                        <td>
                            <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Dispersar pago" href="<?php echo base_url(), "index.php/dispersion_pagos/informacion" ?>"> <i class="fa fa-cubes"></i> Dispersar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>61579527</td>
                        <td>CAMACHO LTDA</td>
                        <td>220.850</td>
                        <td>2021-05-01 11:11:11</td>
                        <td>ABR-2021</td>
                        <td>BOGOTA</td>
                        <td>MANO DE OBRA PARA LA CONSTRUCC</td>
                        <td>236</td>
                        <td>
                            <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Dispersar pago" href="<?php echo base_url(), "index.php/dispersion_pagos/informacion" ?>"> <i class="fa fa-cubes"></i> Dispersar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>61579818</td>
                        <td>CAMACHO LTDA</td>
                        <td>54.500</td>
                        <td>2021-04-20 12:11:40</td>
                        <td>MAR-2021</td>
                        <td>GUADALUPE</td>
                        <td>PROYECTO VILLA MANUELA 1 Y 2</td>
                        <td>25752017</td>
                        <td>
                            <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Dispersar pago" href="<?php echo base_url(), "index.php/dispersion_pagos/informacion" ?>"> <i class="fa fa-cubes"></i> Dispersar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>61579565</td>
                        <td>CAMACHO LTDA</td>
                        <td>117.200</td>
                        <td>2021-03-12 12:10:00</td>
                        <td>FEB-2021</td>
                        <td>CIMITARRA</td>
                        <td>MANTENIMIENTO Y REAPRACION MIO</td>
                        <td>011197</td>
                        <td>
                            <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Dispersar pago" href="<?php echo base_url(), "index.php/dispersion_pagos/informacion" ?>"> <i class="fa fa-cubes"></i> Dispersar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>61580524</td>
                        <td>CAMACHO LTDA</td>
                        <td>136.750</td>
                        <td>2021-02-06 10:00:10</td>
                        <td>ENE-2021</td>
                        <td>MOSQUERA</td>
                        <td>Construcción A</td>
                        <td>4560012</td>
                        <td>
                            <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Dispersar pago" href="<?php echo base_url(), "index.php/dispersion_pagos/informacion" ?>"> <i class="fa fa-cubes"></i> Dispersar</a>
                        </td>
                    </tr>-->
                    </tbody>
                </table>
        </div>
        </div>
    </div>
    <h2><?php if(isset($mensaje)) echo $mensaje; ?></h2>
    <?php echo validation_errors();?><!--mostrar los errores de validación-->
 </div>
