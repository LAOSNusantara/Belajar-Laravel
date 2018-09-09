<html>
<head>

</head>
<body>
<form action="/postingan" method="post">
    {{csrf_field()}}
    judul : <input type="text" name="judul">
    <br>
    kategori :
    <select name="id_kategori" id="">
        @foreach($kategori as $kat)
            <option value="{{$kat->id}}">
                {{$kat->nama_kategori}}</option>
        @endforeach
    </select>
    <br>
    isi : <textarea name="isi" id=""
                    cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="simpan">
</form>
</body>
</html>
