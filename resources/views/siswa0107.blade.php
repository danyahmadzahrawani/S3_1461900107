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
<form class="example">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
    <div style="overflow-x: auto">
    <a href="{{route('siswa0107.create')}}" class="button button-hijau">Tambah siswa</a>
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
                <td>
                <form action="{{ route('siswa0107.destroy', $sw->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('siswa0107.edit', $sw->id) }}" class="button button-orange">Edit</a>
                                    <button type="submit" class="button button-merah">Delete</button>
                                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>