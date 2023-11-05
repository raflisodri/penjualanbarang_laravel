@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data Transaksi</h3>
                            <a href="/transaksi/tambah" class="btn btn-primary">Tambah Data</a>
                            <a target="_blank" href="transaksi/cetak" class="btn btn-success">CETAK LAPORAN</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">id barang</th>
                                            <th scope="col">Id petugas</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">keterangan</th>
                                            <th scope="col">total</th>
                                            <th scope="col"> Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($transaksi as $b)
                                    <tbody>
                                        <tr>
                                            <td>{{ $b->id }}</td>
                                            <td>{{ $b->Barang->nama_barang }}</td>
                                            <td>{{ $b->id_petugas }} - {{ $b->User->name }}</td>
                                            <td>{{ $b->tgl_bayar }}</td>
                                            <td>{{ $b->jumlah }}</td>
                                            <td>{{ $b->keterangan }}</td>
                                            <td> Rp.{{number_format(  $b->total  ,2,',','.')}}</td>
                                            <td>
                                                <a href="/transaksi/{{$b->id}}/edit"class="btn btn-warning">Edit</a>
                                                <a target="_blank" href="/transaksi/struk/{{$b->id}}" class="btn btn btn-success">Cetak</a>
                                                <a href="#" class="btn btn-danger" onClick="Delete('/transaksi/{{$b->id}}/hapus')">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                             
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection