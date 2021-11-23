<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script>
		function confirmar(){
			if (confirm('Esta seguro que desea elinimnar?')) {
				return true;
			}else{
				return false;
			}

		}
	</script>
</head>
<body class="container">
	<center>
		<table class="table table-striped mt-4" border="1">
			<thead>
				<tr>
					<th>Identificacion</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Direccion</th>
					<th>Clave</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php
				require 'modelo_Dao/UsuarioDao.php';
				require 'modelo_Dto/UsuarioDto.php';
				require 'utilidades/coneccion.php';
				$uDao = new UsuarioDao();
				$allusers = $uDao->listarTodos();
				foreach ($allusers as $user) { ?>
					<tr>
						<td>
							<?php echo $user['idusuario'];?>
						</td>
						<td>
							<?php echo $user['nombre'];?>
						</td>
						<td>
							<?php echo $user['apellido'];?>
						</td>
						<td>
							<?php echo $user['direccion'];?>
						</td>
						<td>
							<?php echo $user['clave'];?>
						</td>
						<td><a href="modificar.php?id=<?php echo $user['idusuario'];?>">
							<img src="img/editar.png" width="30" class="" alt="Modificar Registro"> 
						</a></td>
						<td><a href="controladores/controlador.usuarios.php?id=<?php echo $user['idusuario'];?>"onclick=" return confirmar();">
							<img src="img/eliminar.png" width="30" class="" alt="Eliminar Registro"> 
						</a></td>
					</tr>

				<?php
			}

				?>
			</tbody>
		</table>
	</center>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>    
</body>
</html>
