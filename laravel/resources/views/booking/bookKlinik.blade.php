<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bookKlinik.css">
    <link rel="stylesheet" href="assets/inc/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="bg">
    <a href="{{ url('/') }}"><img id="imglogo" src="assets/img/logo.png"></a>
    <div class="btnhasil" role="button">
        <a href="{{ url('hasilbooking')}}" role="button" style="color: white; text-decoration: none;">Hasil Pemesanan</a>
    </div>
      <h2 style="text-align:center; padding-top: 30px; font-family: sans-serif; font-size: 30px; font-weight: bold">PEMESANAN KLINIK HEWAN</h2>
      <div id="login">


	  <h2><span class="" style="text-align:center"></span>Input</h2>
        @if(session()->has('pesan'))
        <div class="alert alert-success">
        {{ session()->get('pesan') }}
        </div>
        @endif
        <form action="{{ route('booking.store') }}" method="POST">
        @csrf
          <fieldset>
    
            <p><label for="email">Nama</label></p>

            <p><input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}"> @error('nama') <div class="text-danger">{{ $message }}</div> @enderror</p>
            
            <p><label>Alamat</label></p>

            <p><textarea class="form-control" id="alamat" rows="1" name="alamat">{{ old('alamat') }}</textarea></p>

            <p><label>Jenis Hewan</label></p>

            <p><input type="text" class="form-control @error('jenis_hewan') is-invalid @enderror" id="jenis_hewan" name="jenis_hewan" value="{{ old('jenis_hewan') }}"> @error('jenis_hewan') <div class="text-danger">{{ $message }}</div> @enderror</p>

            <p><label>Nama Hewan</label></p>
            
			<p><input type="text" class="form-control @error('nama_hewan') is-invalid @enderror" id="nama_hewan" name="nama_hewan" value="{{ old('nama_hewan') }}"> @error('nama_hewan') <div class="text-danger">{{ $message }}</div> @enderror</p>

            <p><button type="submit" class="btn btn-primary mb-2">Submit</button></p>
    
          </fieldset>
    
        </form>

	</div>


</div>

</body>
</html>