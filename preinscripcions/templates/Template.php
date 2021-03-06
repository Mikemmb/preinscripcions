<?php
	class Template{	
		
		//PONE EL HEADER DE LA PAGINA
		public static function header(){
			?>
			<header>
				<h1>Mi aplicación web</h1>
			</header>
			<?php
		}
		
		
		//PONE EL FORMULARIO DE LOGIN
		public static function login(){
			?>
			<form method="post" id="login" autocomplete="off">
				<label>User:</label><input type="text" name="user" required="required" />
				<label>Password:</label><input type="password" name="password" required="required"/>
				<input type="submit" name="login" value="Login" />
			</form>
			<?php 
		}
		
		//PONE LA INFO DEL USUARIO IDENTIFICADO Y EL FORMULARIOD E LOGOUT
		public static function logout($usuario){
			?>
			<div id="logout">
				<span>
					Hola 
					<a href="index.php?controlador=Usuario&operacion=modificacion" title="modificar datos">
						<?php echo $usuario->nombre;?></a>
					<span class="mini">
						<?php echo ' ('.$usuario->email.')';?>
					</span>
					<?php if($usuario->admin) echo ', eres administrador';?>
				</span>
								
				<form method="post">
					<input type="submit" name="logout" value="Logout" />
				</form>
				
				<div class="clear"></div>
			</div>
			<?php 
		}
		
		
		//PONE EL MENU DE LA PAGINA
		public static function menu(){
			?>
			<ul class="menu">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="index.php?controlador=Usuario&operacion=registro">Registro</a></li>
			</ul>
			<?php 
		}
		
		//PONE EL MENU DE ADMINISTRADOR
		public static function menuadmin(){
			
		}
		
		//PONE EL PIE DE PAGINA
		public static function footer(){
			?>
			<footer>
				<p><a href="http://recursos.robertsallent.com/mvc/robs_micro_fw_1.0.zip">RobS micro Framework</a> - solo para fines docentes, <a rel="author" href="http://www.robertsallent.com">Robert Sallent</a> -  CIFO'16. 
         		Twitter: <a href="http://www.twitter.com/robertsallent">@robertsallent</a></p>
			</footer>
			<?php
		}
		
	}
?>