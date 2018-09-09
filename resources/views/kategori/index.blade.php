<html>
<head>

</head>
<body>
<a href="/kategori/create">Tambah kategori</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    @foreach($kategori as $kat)
        <tr>
            <th>{{$kat->id}}</th>
            <th>{{$kat->nama_kategori}}</th>
            <th>
                <a href="/kategori/{{$kat->id}}">Edit</a>
                <a href="/kategori/{{$kat->id}}/del">Hapus</a>
            </th>
        </tr>
    @endforeach
</table>
</body>
</html>
