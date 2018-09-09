<html>
<head>

</head>
<body>
<form action="/kategori" method="post">
    {{csrf_field()}}
    Nama Kategori : <input type="text" name="nama_kategori">
    <br>
    <input type="submit" value="simpan">
</form>
</body>
</html>
