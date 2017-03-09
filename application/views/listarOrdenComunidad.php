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
                    <div class="main-content">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">

                                <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>Fecha de la Orden </td>
                                            <td>Folio </td>
                                            <!-- datos solicitante -->
                                            <td>  Solicitante</td>
                                            <td>  Beneficiarios</td>

                                            <td> Opciones</td> 

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        foreach ($lista as $com) {
                                            ?>
                                            <tr>
                                                <td><?php echo $com->Fecha ?></td>  
                                                <td><?php echo $com->idApoyo ?></td>
                                                <!-- datos solicitante -->
                                                <td><?php echo $com->NombreSolicitante . " " . $com->ApellidoSolPa . " " . $com->ApellidoSolMa ?></td>
                                                <td> <?php echo $com->NombreConyugue . " " . $com->ApellidoPaCon . " " . $com->ApellidoMaCon ?><br>
                                                    <?php echo $com->NombrePadre . " " . $com->ApellidoPaPa . " " . $com->ApellidoMaPa ?><br>
                                                    <?php echo $com->NombreMadre . " " . $com->ApellidoPaMa . " " . $com->ApellidoMaMa ?><br>
                                                    <?php echo $com->NombreSuegro . " " . $com->ApellidoPaSu . " " . $com->ApellidoMaSu ?><br>
                                                    <?php echo $com->NombreSuegra . " " . $com->ApellidoPaSuegra . " " . $com->ApellidoMaSuegra ?><br>
                                                    <?php echo $com->NombreHijo1 . " " . $com->ApellidoPaH1 . " " . $com->ApellidoMaH1 ?><br>
                                                    <?php echo $com->NombreHijo2 . " " . $com->ApellidoPaH2 . " " . $com->ApellidoMaH2 ?><br>
                                                    <?php echo $com->NombreHijo3 . " " . $com->ApellidoPaH3 . " " . $com->ApellidoMaH3 ?>
                                                </td>

                                                <td class="center"><!-- Modificar Orden -->

                                                    <?php echo form_open('Show/modificarOrdenComunidad') ?>
                                                    <input name="identificador" type="" hidden value="<?php echo $com->idApoyo ?>">
                                                    <input class="btn btn-warning" type="submit" value="Modificar">
                                                    </form><br>
                                                    <!-- EliminarOrden-->
                                                    <?php echo form_open('Orden/eliminarOrdenComunidad') ?>
                                                    <input name="identificador" type="hidden" value="<?php echo $com->idApoyo ?>">
                                                    <input class="btn btn-danger" type="submit" value="Eliminar">
                                                    </form><br>
                                                    <!--                      nueva orden -->
                                                    <?php echo form_open('Show/nuevaordenApoAFune') ?>
                                                    <button class="btn btn-white btn-warning btn-bold">
                                                        <input name="identificador" type="hidden" value="<?php echo $com->idApoyo ?>">
                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120 orange"></i>
                                                        Orden Funeral
                                                    </button>

                                                    </form>

                                                </td>
                                            </tr> 
                                            <?php
                                        }
                                        ?>
                                    </tbody>

                                </table>			
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.main-content -->
                    <!-- contenidooooooo -->
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->


