<html>
<head>

</head>
<body>
<a href="/postingan/create">Tambah</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Nama Kategori</th>
    </tr>
    @foreach($postingan as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->judul}}</td>
            <td>{{$post->kategori->nama_kategori}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
