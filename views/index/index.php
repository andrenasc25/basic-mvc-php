<div id="app">
	{{ message }}
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h1>CRUD - OFAAOFICIAL - MVC</h1></center>
				<br>			
				<center>
				<button type="button" onclick="ModalRegister();" class="btn btn-success">Agregar usuario</button>
				</center>
				<br>
			<!--<div id="information">-->
			<div>
				<!--<button onclick="read();"></button>-->
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Correo</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($administrator->get_view_users() as $data) {
						?>
						<tr>
							<td><?php echo $data->id_user; ?> </td>
							<td><?php echo $data->name_user; ?> </td>
							<td><?php echo $data->last_name_user; ?> </td>
							<td><?php echo $data->email_user; ?> </td>
							<td>
								<div class="btn-group">
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									Seleccionar <span class="caret"></span></button>
									<ul class="dropdown-menu" role="menu">
									<li><a href="#" onclick="ModalUpdate('<?php echo $data->id_user; ?>','<?php echo $data->name_user; ?>','<?php echo $data->last_name_user; ?>','<?php echo $data->email_user; ?> ');">Actualizar</a></li>
									<li><a href="#" onclick="deleteUser('<?php echo $data->id_user; ?>');">Borrar</a></li>
									</ul>
								</div>
							</td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>