<html>
<head>

</head>
<body>
<form action="/kategori/{{$kategori->id}}" method="post">
    {{csrf_field()}}
    Nama Kategori :
    <input type="text" name="nama_kategori" value="{{$kategori->nama_kategori}}">
    <br>
    <input type="submit" value="update">
</form>
</body>
</html>
