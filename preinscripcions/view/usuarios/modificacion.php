<!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo Config::get()->url_base;?>" />
		<meta charset="UTF-8">
		<title>Modificación de datos de usuario</title>
		<link rel="stylesheet" type="text/css" href="<?php echo Config::get()->css;?>" />
	</head>
	
	<body>
		<?php 
			Template::header();

			if(!$usuario) Template::login();
			else Template::logout($usuario);
			
			Template::menu();
			
			if($usuario && $usuario->admin)	Template::menuadmin();
		?>
		
		<section id="content">
			<a class="derecha" href="index.php?controlador=Usuario&operacion=baja">Darse de baja</a>
			
			<h2>Formulario de modificación de datos</h2>
			
			<form method="post" enctype="multipart/form-data" autocomplete="off">
				
				<figure>
					<img class="imagenactual" src="<?php echo $usuario->imagen;?>" 
						alt="<?php echo  $usuario->user;?>" />
				</figure>
				
				
				<label>User:</label>
				<input type="text" name="user" required="required" 
					readonly="readonly" value="<?php echo $usuario->user;?>" /><br/>
				
				<label>Password actual:</label>
				<input type="password" name="password" required="required" /><br/>
				
				<label>Nuevo password:</label>
				<input type="password" name="newpassword" pattern=".{4,16}" title="4 a 16 caracteres"/>
				<span class="mini">En blanco para no modificar el actual</span><br/>
				
				
				<label>Nombre:</label>
				<input type="text" name="nombre" required="required" 
					value="<?php echo $usuario->nombre;?>"/><br/>
				
				<label>Email:</label>
				<input type="email" name="email" required="required" 
					value="<?php echo $usuario->email;?>"/><br/>
				
				<label>Nueva imagen:</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_image_size;?>" />		
				<input type="file" accept="image/*" name="imagen" />
				<span class="mini">max <?php echo intval($max_image_size/1024);?>kb</span><br />
				
				<label></label>
				<input type="submit" name="modificar" value="modificar"/><br/>
			</form>
			
				
		</section>
		
		<?php Template::footer();?>
    </body>
</html>