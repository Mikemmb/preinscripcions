<!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo Config::get()->url_base;?>" />
		<meta charset="UTF-8">
		<title>EXITO</title>
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
			<h2>Exito</h2>
			<?php echo '<p>'.$mensaje.'</p>'; ?>
		</section>
		
		<?php Template::footer();?>
    </body>
</html>