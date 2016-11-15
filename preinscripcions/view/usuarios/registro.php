<!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo Config::get()->url_base;?>" />
		<meta charset="UTF-8">
		<title>Registro de usuarios</title>
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
			<h2>Formulario de registro</h2>
			<form method="post" enctype="multipart/form-data" autocomplete="off">
				<label>User:</label>
				<input type="text" name="user" required="required" 
					pattern="^[a-zA-Z]\w{2,9}" title="3 a 10 caracteres (numeros, letras o guión bajo), comenzando por letra"/><br/>
				
				<label>Password:</label>
				<input type="password" name="password" required="required" 
					pattern=".{4,16}" title="4 a 16 caracteres"/><br/>
				
				<label>Nombre:</label>
				<input type="text" name="nombre" required="required"/><br/>
				
				<label>Email:</label>
				<input type="email" name="email" required="required"/><br/>
				
				<label>Imagen:</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_image_size;?>" />		
				<input type="file" accept="image/*" name="imagen" />
				<span>max <?php echo intval($max_image_size/1024);?>kb</span><br />
				
				<label></label>
				<input type="submit" name="guardar" value="guardar"/><br/>
			</form>
		</section>
		
		<?php Template::footer();?>
    </body>
</html>