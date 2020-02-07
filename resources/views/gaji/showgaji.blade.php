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

        @if($gaji->jabatan == "Manager")
            @php $penggajihan = "5000000" @endphp
        @elseif($gaji->jabatan == "Sekretaris")
            @php $penggajihan = "3500000" @endphp
        @elseif($gaji->jabatan == "Staff")
            @php $penggajihan = "2500000" @endphp
        @endif
        Gaji Jabatan : <b>{{ $penggajihan }}</b><br>

        @if($gaji->jam_kerja >= 150)
            @php $hasil = $penggajihan*5/100 @endphp
        @elseif($gaji->jam_kerja > 200)
            @php $hasil = $penggajihan*7.5/100 @endphp
        @elseif($gaji->jam_kerja >= 250)
            @php $hasil = $penggajihan*10/100 @endphp
        @else
            @php $hasil = 0 @endphp
        @endif
        Tambahan : <b>{{ $hasil }}</b><br>

        @php $total = $penggajihan + $hasil @endphp
        Total Gaji : <b>{{ $total }}</b>
    </fieldset>
</body>
</html>