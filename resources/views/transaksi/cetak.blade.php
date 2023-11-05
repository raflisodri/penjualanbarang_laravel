<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
</head>
<body onload="print()">
    <table border="1">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">id barang</th>
                <th scope="col">Id petugas</th>
                <th scope="col">Jumlah</th>
                <th scope="col">keterangan</th>
                <th scope="col">total</th>
                
            </tr>
        </thead>
        @foreach ($transaksi as $b)
        <tbody>
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->id_barang }} - {{ $b->Barang->nama_barang }}</td>
                <td>{{ $b->id_petugas }} - {{ $b->User->name }}</td>
                <td>{{ $b->jumlah }}</td>
                <td>{{ $b->keterangan }}</td>
                <td>{{ $b->total }}</td>
               
            </tr>
        </tbody>
        @endforeach
 
    </table>
    </table>
</body>
</html>