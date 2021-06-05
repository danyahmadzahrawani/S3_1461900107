  
<form action="{{ route('siswa0107.store') }}" method="POST">
			@csrf
			<label for="nama">nama</label>
			<input type="text" id="nama" name="nama" placeholder="nama..">

			<label for="alamat">alamat</label>
			<input type="text" id="alamat" name="alamat" placeholder="alamat..">

			<button type="submit" value="Submit">Simpan</button>
		</form>