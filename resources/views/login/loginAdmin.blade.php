<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}" />
    <link rel="stylesheet" href="{{ asset('inc/bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="bg">
      <a href="{{ url('/') }}"><img id="imglogo" src="img/logo.png" /></a>
    <h2 style="text-align:center; padding-top: 30px; font-family: sans-serif; font-size: 30px; font-weight: bold">LOGIN ADMIN</h2>
      <div id="login">

		<h2><span class="fontawesome-lock" style="text-align:center"></span>Login</h2>
    @if(session()->has('pesan'))
      <div class="alert alert-success">
    {{ session()->get('pesan') }}
      </div>
    @endif

		<form action="{{ route('login.process') }}" method="POST">

			<fieldset>
      @csrf
				<p><label for="email">Username</label></p>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}">
        @error('username')
          <div class="text-danger">{{ $message }}</div>
        @enderror
				<p><label for="password">Password</label></p>
				<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
        @error('password')
          <div class="text-danger">{{ $message }}</div>
        @enderror
        <br>
				<button type="submit" class="btn btn-primary mb-2">Login</button>

			</fieldset>

		</form>

  </div>
</div>

    </body>
</html>