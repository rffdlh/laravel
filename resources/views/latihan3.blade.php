<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <center>Daftar Buku</center>
    @foreach($buku as $data)
    Judul &nbsp &nbsp &nbsp &nbsp &nbsp : {{ $data['judul'] }} <br>
    Penerbit &nbsp &nbsp&nbsp : {{ $data['penerbit'] }} <br>
    Harga &nbsp &nbsp &nbsp &nbsp&nbsp : {{ $data['harga'] }} <br>
    penulis &nbsp &nbsp &nbsp&nbsp : {{ $data['penulis'] }} <br>
    
    @if($data['harga'] >= 200000)
        @php $status = "Premium" @endphp
    @elseif($data['harga'] >= 150000)
        @php $status = "Regular" @endphp
    @else
        @php $status = "Bajakan" @endphp
    @endif
    Status &nbsp &nbsp &nbsp &nbsp&nbsp : {{ $status }} <br>

    @if($status == "Premium")
        @php $keterangan = "Pembeli cerdas" @endphp
    @elseif($status == "Regular")
        @php $keterangan = "Pembeli cerdas" @endphp
    @else
        @php $keterangan = "Pembeli kurang cerdas" @endphp
    @endif
    Keterangan : {{ $keterangan }} <hr>

    @endforeach
</body>
</html>