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
			<h2>Registrar Candidato</h2>            
			<div class="login-form-grids animated wow slideInUp"  style="width: 45%" data-wow-delay=".5s">
				<form>
                    <input type="text" id="nombre" placeholder="Ingrese nombre del candidato" required=" " ><br>
                    <input type="number" id="ficha" placeholder="Ingrese su ficha" required=" " ><br>
					<input type="text" id="programa" placeholder="Ingrese su programa" required=" " >
					<input type="submit" id="btn_registrar" value="Votar">
				</form>
			</div>
		</div>
	</div>
<!--- formulario --->
<script src="js/validar.js">

</script>
<?php include("footer.php");?>