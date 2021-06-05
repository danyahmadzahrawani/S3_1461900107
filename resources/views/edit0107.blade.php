<form action="{{ route('siswa0107.update', $siswa->id) }}" method="POST">
			@csrf
			@method('patch')
			<label for="nama">nama</label>
			<input type="text" id="nama" name="nama" value="{{ $siswa->nama}}">

			<label for="alamat">alamat </label>
			<input type="text" id="alamat" name="alamat" value="{{ $siswa->alamat}}">

			<button type="submit" value="Submit">Simpan</button>
		</form>