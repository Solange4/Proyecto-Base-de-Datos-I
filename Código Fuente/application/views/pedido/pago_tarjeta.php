<h1>Pago</h1>
	<em></em>
	<h2><a href="<?= base_url('home/mostrar')?>">Inicio</a><label>/</label>Pago</h2>
</div>
</div>
<div class="container">
	<div class="login">
			<div class="col-md-12 login-do">
				<center>
					<h2>Realizar Pago</h2>
				</center>
			</div><br><br><br>
		<form action="<?= base_url('pedido/guardar_pago')?>" method ="POST">
			<div class="col-md-6 login-do">
				<label for="numero">Número</label>
				<div class="login-mail">
					<input type="text" placeholder="Nombre del Producto" required="" id="numero" name="numero" value="<?= set_value('numero'); ?>">
					<i  class="glyphicon glyphicon-font"></i>
				</div>
				<label for="fecha_exp">Fecha de Vencimiento</label>
				<div class="login-mail">
					<input type="date" placeholder="Precio del Producto Ej: 40" required="" id="fecha_exp" name="fecha_exp" value="<?= set_value('fecha_exp'); ?>" >
					<i  class="glyphicon glyphicon-usd"></i>
				</div>
				<label for="propietario">Propietario</label>
				<div class="login-mail">
					<input type="text" placeholder="Precio del Producto Ej: 40" required="" id="propietario" name="propietario" value="<?= set_value('propietario'); ?>" >
					<i  class="glyphicon glyphicon-usd"></i>
				</div>
				<label for="cvc">CVV</label>
				<div class="login-mail">
					<input type="text" placeholder="Cantidad Ej:20" required="" id="cvc" name="cvc" value="<?= set_value('cvc'); ?>">
					<i  class="	glyphicon glyphicon-sort-by-order"></i>
				</div>	   
			</div>
			
			</div>
			<div class="col-md-12 login-do">
				<center>
					<label class="hvr-skew-backward">
						<input type="submit" value="Guardar">
					</label>
				</center>
			</div>
			<div class="clearfix"></div>
			<br>
		</form>
	</div>
</div>