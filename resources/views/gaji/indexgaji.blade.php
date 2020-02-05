<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <center><h2>Daftar Gaji</h2></center><br>
    <center><table border = 1>
        <thead>
            <tr>
                <th>Nip</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gaji as $gajih)
            <tr>
                <td>{{$gajih->nip}}</td>
                <td>{{$gajih->nama}}</td>
                <td>{{$gajih->jenis_kelamin}}</td>
                <td>{{$gajih->jabatan}}</td>
                <td><a href="/gajih/{{$gajih->id}}">Lihat</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </center>
</body>
</html>