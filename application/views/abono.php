
<div class="main-content">
    <div class="main-content-inner">

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="no-skin" value="#40310C">#40310C</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#40310C">40310C</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; Choose Skin</span>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <?php
                    if (isset($resultado)) {
                        foreach ($resultado as $com) {
                            
                        }
                    }
                    ?>

                    <?php echo form_open('Abono/abono') ?>
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Folio orden </h2><input type="text" name="folio" value="<?php
                            echo $com->Folio;
                            ?>" disabled class="form-control">
                        </div>
                        <div class="col-md-4">
                            <h2>Sucursal</h2><input type="text" value="<?php
                            foreach ($su as $s) {
                                echo $s->Nombre;
                            }
                            ?>" disabled class="form-control">
                            <input type="hidden" name="sucursal" value="<?php
                            foreach ($su as $s) {
                                echo $s->idSucursal;
                            }
                            ?>">

                        </div>
                        <div class="col-md-4">
                            <h2>Fecha</h2><input type="text" name="fecha" value="<?php
                            echo date('Y-m-d');
                            ?>" disabled class="form-control">                    
                        </div>
                    </div>  
                    <div class="row"> 
                        <div class="col-md-4">
                            <label class="control-label"><b>Nombre Solicitante: </b></label><?php echo $com->NombreSolicitante . " " . $com->ApellidoSolPa . " " . $com->ApellidoSolMa ?><br>
                            <label class="control-label"><b>Nombre Finado: </b></label> <?php echo $com->NombreFinado . " " . $com->ApellidoFinPa . " " . $com->ApellidoFinMa ?><br>
                            <label class="control-label"><b>Total: </b></label> <?php echo $com->Total ?><br>
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">

                        </div>

                    </div> 
                    <div class="space-6"></div>
                    <div class="space-6"></div>
                    <div class="row"> 

                        <div class="col-md-4">
                            <label class="control-label">Abono</label>
                            <input name="abono" type="number"  class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Folio del Recibo</label>
                            <input name="fore" type="number"  class="form-control">
                        </div>


                    </div> 
                    <div class="space-6"></div>
                    <div class="space-6"></div>
                    <div class="row ">
                        <div class="col-md-12">
                            <h2>Pagos realizados</h2>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>Folio </td>
                                        <td>Fecha</td>

                                        <td>  Cantidad</td>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $resultado = 0;
                                    if (isset($res)) {
                                        foreach ($res as $com1) {
                                            $resultado += $com1->Cantidad;
                                            ?>

                                            <tr>
                                                <td><?php echo $com1->NoRecibo ?></td> 
                                                <td><?php echo $com1->Fecha ?></td> 
                                                <td>$ <?php echo $com1->Cantidad ?></td> 
                                            </tr>


                                            <?php
                                        }
                                    }
                                    ?> 
                                </tbody>
                            </table>


                        </div> 
                    </div>
                    <div class="space-6"></div>
                    <div class="space-6"></div>
                    <div class="row">
                        <div class="col-md-2 center">
                            <h3>Saldo</h3>
                            <label class="control-label">$ <?php echo $com->Total - $resultado ?></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-white btn-success btn-bold" type="submit" value="Abono">

                            <i class="ace-icon glyphicon glyphicon-usd bigger-120 green"></i>
                            Abono
                        </button>
                    </div>

                    </form>
                    <!-- contenidooooooo -->
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

