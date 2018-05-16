@extends('templatelogin')
@section('styles')

@endsection
@section ('content-login')
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Registro</h2>
		<form action="#" method="post">
			<input type="text" class="login-input" name="Name" placeholder="NOMBRE" required="">
			<input type="text" class="login-input" name="Name" placeholder="APELLIDO" required="">
			<input type="text" class="login-input" name="Name" placeholder="DIRECCIÓN" required="">
			<input type="email" class="login-input" name="Email" placeholder="E-MAIL" required="">
			<input type="text" class="login-input" name="Phone" placeholder="TELEFONO" required="">
			<input type="password" class="login-input" name="Password" placeholder="CONSTRASEÑA" required="">
			
			
				<div class="clearfix"></div>
				<input style="color: #000;" type="submit" value="Enviar" name="register">
		</form>
		<p>Ya tienes cuenta.<a href="login.html" style="color: #555;">Registro</a></p>
</div>
</div>
@endsection
@section('scripts')

@endsection