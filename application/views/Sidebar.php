	<?php if ($this->session->userdata('login') == TRUE){ ?>	
<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				
				<ul class="nav nav-list">
					<li class="">
                                            <a href="administrador">
							<i class="menu-icon fa fa-tasks"></i>
							<span class="menu-text"> Menú </span>
						</a>

						<b class="arrow"></b>
					</li>
                                        <li class="">
                                            <a href="buscador">
							<i class="menu-icon fa fa-search"></i>
							<span class="menu-text"> Buscar </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="menuOrden" class="dropdown-toggle">
							<i class="menu-icon glyphicon glyphicon-file"></i>
							<span class="menu-text">
								servicio Funeral
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="agregarOrden" >
									<i class="menu-icon fa fa-plus"></i>

									Agregar orden 
									
								</a>

								<b class="arrow"></b>

							</li>

							<li class="">
								<a href="listarOrden">
									<i class="menu-icon glyphicon glyphicon-remove"></i>
									Modificar/eliminar orden Funeral
                                                                        
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>

					<li class="">
						<a href="menuOrdenComunidad" class="dropdown-toggle">
							<i class="menu-icon glyphicon glyphicon-file"></i>
							<span class="menu-text">
								Programa de apoyo
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="agregarOrdenComunidad">
									<i class="menu-icon fa fa-plus"></i>

									Agregar orden 
									
								</a>

								
                                                        <b class="arrow"></b>
							</li>

							<li class="">
                                                            <a href="listarOrdenComunidad">
									<i class="menu-icon glyphicon glyphicon-remove"></i>
									Modificar/eliminar orden de apoyo a la comunidad
                                                                        
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
                                        <li class="">
                                            <a href="solicitantes">
							<i class="menu-icon glyphicon glyphicon-user"></i>
							<span class="menu-text"> Solicitantes</span>
						</a>

						<b class="arrow"></b>
					</li>

                                            <li class="">
						<a href="menuUsuario" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">
								Usuarios
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="registrarUsuario" >
									<i class="menu-icon  fa fa-user-plus"></i>

									Agregar Usuarios
								</a>
                                                                    
								<b class="arrow"></b>

							</li>

							<li class="">
								<a href="listarUsuario">
									<i class="menu-icon  fa fa-user-times"></i>
									Modificar/eliminar usuarios
                                                                        
								</a>
                                                                  
								<b class="arrow"></b>
							</li>

						</ul>
					</li>
                                        
                                        <li class="">
						<a href="listarSucursal" class="dropdown-toggle">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text">
								Sucursales
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="listarSucursal" >
									<i class="menu-icon fa fa-plus"></i>

									Agregar sucursal
									
								</a>

								<b class="arrow"></b>

							</li>

							<li class="">
								<a href="listarSucursal">
									<i class="menu-icon glyphicon glyphicon-remove"></i>
									Modificar/eliminar sucursal
                                                                        
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>
				
					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
                        <?php } ?>
