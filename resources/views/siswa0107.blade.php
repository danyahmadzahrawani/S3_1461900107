<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Siswa</title>
<style>
table{
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}
thead {
    background-color : #f2f2f2;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
    padding: 8px 16px;
    text-decoration: none;
}
</style>
<head>

<body>
    <div style="overflow-x: auto">
    <a class="tambah" href="{{ route('siswa0107.create') }}">Tambah Data </a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($siswa as $sw)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $sw->nama }}</td>
                <td>{{ $sw->alamat }}</td>
                   </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>