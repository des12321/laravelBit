@extends('templatelogin')
@section('styles')

@endsection
@section ('content-login')
<div class="log-w3">
	<div class="w3layouts-main">
	<h2>Iniciar Sesión</h2>
		<form action="#" method="post">
			<input type="email" class="login-input" name="Email" placeholder="E-MAIL" required="">
			<input type="password" class="login-input" name="Password" placeholder="CONTRASEÑA" required="">
			<span><input type="checkbox"/>Recuerdame</span>
			<h3><a href="#">¿olvido su contraseña?</a></h3>
				<div class="clearfix"></div>
				<input style="color: #000;" class="buttonLogin" type="submit" value="Iniciar Sesión" name="login" >
		</form>
		<p>¿No tienes una cuenta?<a style="color: #555;" href="{{ route('auth.register') }}">Crear una cuenta</a></p>
	</div>
</div>
@endsection
@section('scripts')

@endsection