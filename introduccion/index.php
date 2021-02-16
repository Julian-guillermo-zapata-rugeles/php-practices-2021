<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Contador</title>
	</head>
	<body>
		<center>
			<?php
			$contador="";
				?>
			 <p>Contador basico usando <em> <b> PHP </b> </em> ( Julián Guillermo Zapata rugeles ) </p>
			 <br><br><br>

		<p style="color:gray;"> Precione un boton para saludar </p>

		<?php
		        if(array_key_exists('button1', $_POST)) {
		            button1();
		        }
		        else if(array_key_exists('button2', $_POST)) {
		            button2();
		        }
		        function button1() {
		            global $contador;
								$contador="Hola mundo";
		        }
		        function button2() {
		            global $contador;
								$contador="Hello world";
		        }
		    ?>

				<fieldset style="width:30%;border-color:orange;border-radius:10px;">
				 <h2 id="contadorBasico"> <?php echo $contador ?></h2>
				</fieldset>

		    <form method="post">
		        <input type="submit" name="button1"
		                class="button" value="saludo 1" />

		        <input type="submit" name="button2"
		                class="button" value="saludo 2" />
		    </form>

	</center>
	</body>
</html>
