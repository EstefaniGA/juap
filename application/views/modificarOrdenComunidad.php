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
                                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
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


                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-md-2  "> 

                        </div>
                        <div class="col-md-12  ">

                            <?php echo form_open('Orden/modificarOrdenComunidad') ?>    
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Folio</h2><input type="text" name="folio" value="<?php
                                    echo $modificar->idApoyo;
                                    ?>" disabled class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <h2>Sucursal</h2><input type="text" value="<?php
                                    echo $modificar->Nombre;
                                    ?>" disabled class="form-control">
                                    <input type="hidden" name="sucursal" value="<?php
                                    echo $modificar->idSucursal;
                                    ?>">

                                </div>
                                <div class="col-md-4">
                                    <h2>Fecha</h2><input type="text" name="fecha" value="<?php
                                    echo $modificar->Fecha;
                                    ?>" disabled class="form-control">                    
                                </div>
                            </div> 
                            <div class="row">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default trans">
                                        <div class="panel-heading ">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                    Datos del solicitante</a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="panel-body acord">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input name="ids" value="<?php echo $modificar->idSolicitantes ?>" >
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombresolicitante" type="text" placeholder="Nombre" class="form-control" required value="<?php
                                                        echo $modificar->NombreSolicitante;
                                                        ?>"  >
                                                    </div>  
                                                    <?php echo form_error('nombresolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Domicilio</label> 
                                                        <input name="domiciliosolicitante" type="text" required  class="form-control" value="<?php
                                                        echo $modificar->DomicilioSolicitante;
                                                        ?>" >
                                                    </div> 
                                                    <?php echo form_error('domiciliosolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Ciudad</label> 
                                                        <input name="ciudadadsolicitante" required  type="text" class="form-control" value="<?php
                                                        echo $modificar->CiudadSolicitante;
                                                        ?>" >
                                                    </div>
                                                    <?php echo form_error('ciudadsolicitante'); ?>

                                                    <div class="form-group">
                                                        <label class="control-label">Edad</label> 
                                                        <input name="edadsolicitante" type="number" required  class="form-control" value="<?php
                                                        echo $modificar->Edad;
                                                        ?>" >

                                                    </div>
                                                    <?php echo form_error('edadsolicitante'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopasolicitante" required  type="text" placeholder="Apellido Paterno" class="form-control" value="<?php
                                                        echo $modificar->ApellidoSolPa;
                                                        ?>" >
                                                    </div> 
                                                    <?php echo form_error('apellidopasolicitante'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Número</label> 
                                                        <input name="numerosolicitante" type="number" class="form-control" required value="<?php
                                                        echo $modificar->NumeroSolicitante;
                                                        ?>" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Colonia</label> 
                                                        <input name="coloniasolicitante" type="text" class="form-control" required value="<?php
                                                        echo $modificar->ColoniaSolicitante;
                                                        ?>" >
                                                    </div>
                                                    <?php echo form_error('coloniasolicitante'); ?>
                                                    <div class="form-group">
                                                        <label class="control-label">Estado Civil</label> 
                                                        <select class="form-control" name="estadocivs" required >
                                                            <option value=""></option>
                                                            <option value="Casado" <?php if ($modificar->EstadoCivilSolicitante == "Casado") {
                                                        echo "selected";
                                                    } ?> >Casado</option>
                                                            <option value="Soltero" <?php if ($modificar->EstadoCivilSolicitante == "Soltero") {
                                                        echo "selected";
                                                    } ?> >Soltero</option>
                                                            <option value="Divorciado"<?php if ($modificar->EstadoCivilSolicitante == "Divorciado") {
                                                        echo "selected";
                                                    } ?> >Divorciado</option>
                                                            <option value="Viudo" <?php if ($modificar->EstadoCivilSolicitante == "Viudo") {
                                                        echo "selected";
                                                    } ?> >Viudo</option>
                                                        </select>
                                                    </div>
                                                    <?php echo form_error('estadociv'); ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomasolicitante" type="text" placeholder="Apellido Materno" class="form-control" required value="<?php
                                                    echo $modificar->ApellidoSolMa;
                                                    ?>">
                                                    </div> 
<?php echo form_error('apellidomasolicitante'); ?>
                                                    <div class="form-group">
<!--                                                        <label class="control-label">Parentesco</label> -->
<!--                                                        <select class="form-control" name="parentesco">
                                                            <option value=""></option>
                                                            <option value="Hijo" <?php if ($modificar->Parentesco == "Hijo") {
    echo "selected";
} ?>>Hijo</option>
                                                            <option value="Hija" <?php if ($modificar->Parentesco == "Hija") {
    echo "selected";
} ?>>Hija</option>
                                                            <option value="Madre"<?php if ($modificar->Parentesco == "Madre") {
    echo "selected";
} ?>>Madre</option>
                                                            <option value="Padre"<?php if ($modificar->Parentesco == "Padre") {
    echo "selected";
} ?>>Padre</option>
                                                            <option value="Hermano" <?php if ($modificar->Parentesco == "Hermano") {
    echo "selected";
} ?>>Hermano</option>
                                                            <option value="Hermana"<?php if ($modificar->Parentesco == "Hermana") {
    echo "selected";
} ?>>Hermana</option>
                                                            <option value="Suegro" <?php if ($modificar->Parentesco == "Suegro") {
    echo "selected";
} ?>>Suegro</option>
                                                            <option value="Suegra"<?php if ($modificar->Parentesco == "Suegra") {
    echo "selected";
} ?>>Suegra</option>
                                                            <option value="Primo" <?php if ($modificar->Parentesco == "Primo") {
    echo "selected";
} ?>>Primo</option>
                                                            <option value="Prima" <?php if ($modificar->Parentesco == "Prima") {
    echo "selected";
} ?>>Prima</option>

                                                        </select>-->
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Teléfono</label> 
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-phone bigger-110"></i>
                                                            </span>
                                                            <input name="telefonosolicitante" type="number" class="form-control" value="<?php echo $modificar->Telefono; ?>">
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Persona que atendió </label> 
                                                        <input name="personasolicitante" type="text" required disabled class="form-control" value="<?php echo $modificar->Nombre; ?>">

                                                    </div>
                                                               <?php echo form_error('personasolicitante'); ?>
                                                    <a data-toggle="collapse" class="btn btn-warning"  data-parent="#accordion" href="#collapse2"> Siguiente</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                    Beneficiarios</a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body acord">
                                                <input name="idb" value="<?php echo $modificar->idSolicitantes ?>" >
                                                <div class="col-md-12">

                                                    <label class="control-label">Conyugue</label><br> 

                                                </div> 
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombreb1" type="text" placeholder="Nombre"  class="form-control"
                                                               value="<?php echo $modificar->NombreConyugue; ?>">
                                                    </div> 

                                                </div>        
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopab1" type="text" placeholder="Apellido Paterno"  class="form-control" value="<?php echo $modificar->ApellidoPaCon; ?>">
                                                    </div> 

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomab1" type="text" placeholder="Apellido Materno"  class="form-control" value="<?php echo $modificar->ApellidoMaCon; ?>" >
                                                    </div>                                                                   
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="control-label">Padre</label> 


                                                </div> 
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombreb2" type="text" placeholder="Nombre"  class="form-control" value="<?php echo $modificar->NombrePadre; ?>">
                                                    </div> 

                                                </div>        
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopab2" type="text" placeholder="Apellido Paterno"  class="form-control" value="<?php echo $modificar->ApellidoPaPa; ?>">
                                                    </div> 

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomab2" type="text" placeholder="Apellido Materno"  class="form-control" value="<?php echo $modificar->ApellidoMaPa; ?>">
                                                    </div>                                                                   
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="control-label">Madre</label> 


                                                </div> 
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombreb3" type="text" placeholder="Nombre"  class="form-control" value="<?php echo $modificar->NombreMadre; ?>">
                                                    </div> 

                                                </div>        
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopab3" type="text" placeholder="Apellido Paterno"  class="form-control" value="<?php echo $modificar->ApellidoPaMa; ?>">
                                                    </div> 

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomab3" type="text" placeholder="Apellido Materno"  class="form-control" value="<?php echo $modificar->ApellidoMaMa; ?>">
                                                    </div>                                                                   
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="control-label">Suegro</label>


                                                </div> 
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombreb4" type="text" placeholder="Nombre"  class="form-control" value="<?php echo $modificar->NombreSuegro; ?>">
                                                    </div> 

                                                </div>        
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopab4" type="text" placeholder="Apellido Paterno"  class="form-control" value="<?php echo $modificar->ApellidoPaSu; ?>">
                                                    </div> 

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomab4" type="text" placeholder="Apellido Materno"  class="form-control" value="<?php echo $modificar->ApellidoMaSu; ?>">
                                                    </div>                                                                   
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="control-label">Suegra</label> 


                                                </div> 
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombreb5" type="text" placeholder="Nombre"  class="form-control" value="<?php echo $modificar->NombreSuegra; ?>">
                                                    </div>                                                                      
                                                </div>        
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopab5" type="text" placeholder="Apellido Paterno"  class="form-control" value="<?php echo $modificar->ApellidoPaSuegra; ?>">
                                                    </div> 

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomab5" type="text" placeholder="Apellido Materno"  class="form-control" value="<?php echo $modificar->ApellidoMaSuegra; ?>">
                                                    </div>                                                                   
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="control-label">Hijo soltero No.1</label> 


                                                </div> 
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombreb6" type="text" placeholder="Nombre"  class="form-control" value="<?php echo $modificar->NombreHijo1; ?>">
                                                    </div> 

                                                </div>        
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopab6" type="text" placeholder="Apellido Paterno"  class="form-control" value="<?php echo $modificar->ApellidoPaH1; ?>">
                                                    </div> 

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomab6" type="text" placeholder="Apellido Materno"  class="form-control" value="<?php echo $modificar->ApellidoMaH1; ?>">
                                                    </div>                                                                   
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="control-label">Hijo soltero No.2</label> 


                                                </div> 
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombreb7" type="text" placeholder="Nombre"  class="form-control" value="<?php echo $modificar->NombreHijo2; ?>">
                                                    </div> 

                                                </div>        
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopab7" type="text" placeholder="Apellido Paterno"  class="form-control" value="<?php echo $modificar->ApellidoPaH2; ?>">
                                                    </div> 

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomab7" type="text" placeholder="Apellido Materno"  class="form-control" value="<?php echo $modificar->ApellidoMaH2; ?>">
                                                    </div>                                                                   
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="control-label">Hijo soltero No.3</label> 


                                                </div> 
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">Nombre</label> 
                                                        <input name="nombreb8" type="text" placeholder="Nombre"  class="form-control" value="<?php echo $modificar->NombreHijo3; ?>">
                                                    </div> 

                                                </div>        
                                                <div class="col-md-4">

                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidopab8" type="text" placeholder="Apellido Paterno"  class="form-control" value="<?php echo $modificar->ApellidoPaH3; ?>">
                                                    </div> 


                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">&nbsp;</label> 
                                                        <input name="apellidomab8" type="text" placeholder="Apellido Materno"  class="form-control" value="<?php echo $modificar->ApellidoMaH3; ?>">
                                                    </div> 

                                                </div>
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <button class="btn btn-app btn-inverse btn-xs">
                                                            <i class="ace-icon fa fa-save bigger-160"></i>
                                                            Guardar
                                                        </button>
                        <!--                                       <input class="btn btn-sm btn-success btn-block" type="submit" value="Guardar"     class="form-control"> -->
                                                    </div> 
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </form>  
                        </div>
                    </div>



                    <!-- contenidooooooo -->
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->