<?php include("head.php");?>
    <!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Votar</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- formulario --->

	<div class="login">
		<div class="container">
			<h2>Votar</h2>            
			<div class="login-form-grids animated wow slideInUp"  style="width: 45%" data-wow-delay=".5s">
				<form>
					<label for="mesa">En que mesa se encuentra?</label>
					<select name="mesa" id="mesa">
						<option value="1">Estoy en la mesa 1</option>
						<option value="2">Estoy en la mesa 2</option>
						<option value="3">Estoy en la mesa 3</option>
						<option value="4">Estoy en la mesa 4</option>
						<option value="5">Estoy en la mesa 5</option>
						<option value="6">Estoy en la mesa 6</option>
						<option value="7">Estoy en la mesa 7</option>
						<option value="8">Estoy en la mesa 8</option>
						<option value="9">Estoy en la mesa 9</option>
						<option value="10">Estoy en la mesa 10</option>
					</select>
					<br><br>
					<label for="candidato">Por quien desea Votar?</label>
					<select name="candidato" id="candidato">
					</select>
					<input type="submit" id="btn_votar" value="Votar">
				</form>
			</div>
		</div>
	</div>
<!--- formulario --->
<script src="js/validar.js"></script>
<?php include("footer.php");?>