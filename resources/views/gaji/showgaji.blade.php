<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <fieldset>
        <legend>Show Gaji</legend>
        Nip : <b>{{$gaji->nip}}</b><br>
        Nama : <b>{{$gaji->nama}}</b><br>
        Agama : <b>{{$gaji->agama}}</b><br>
        Jenis Kelamin : <b>{{$gaji->jenis_kelamin}}</b><br>
        Alamat : <b>{{$gaji->alamat}}</b><br>
        Jabatan : <b>{{$gaji->jabatan}}</b><br>
        Jam Kerja : <b>{{$gaji->jam_kerja}}</b><br>
    </fieldset>
</body>
</html>