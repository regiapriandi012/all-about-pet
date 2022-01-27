<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/hasilBookKlinik.css" />
    <link rel="stylesheet" href="assets/inc/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="bg">
    <a href="{{url('/')}}"><img id="imglogo" src="assets/img/logo.png"></a>
      <h2 style="text-align:center; padding-top: 30px; font-family: sans-serif; font-size: 30px; font-weight: bold">HASIL PEMESANAN KLINIK</h2>
      <div id="login">

		<h2><span class="" style="text-align:center"></span>Input ID</h2>

			<form action="" method="POST">
				@csrf
				<fieldset>

					<p><label for="email">ID</label></p>
					<p><input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ old('id') }}"> @error('id')
					<div class="text-danger">{{ $message }}</div> @enderror</p>

					<p><button type="submit" class="btn btn-primary mb-2">Submit</button></p>

				</fieldset>

			</form>


	</div>

    <div id="login" style="margin-top: -30px !important">

		<h2><span class="" style="text-align:center"></span>Hasil</h2>

			<fieldset>
			@if(session()->has('data_kosong'))
					<h4>{{ session()->get('data_kosong') }}</h4>
			@endif
			@if(session()->has('nama_klinik'))
				<h4>Nama Klinik: {{ session()->get('nama_klinik') }}</h4>
			@endif
			@if(session()->has('alamat'))
				<h4>Alamat Klinik: {{ session()->get('alamat') }}</h4>
			@endif
			@if(session()->has('kode_booking'))
				<h4>Kode Booking: {{ session()->get('kode_booking') }}</h4>
			@endif
			</fieldset>

	</div>
</div>

</body>
</html>
