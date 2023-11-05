@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data Barang</h3>
                            <a href="/barang/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">id Suplier</th>
                                            <th scope="col">Nama barang</th>
                                            <th scope="col"> Jenis</th>
                                            <th scope="col"> Harga</th>
                                            <th scope="col"> Stok</th>
                                            <th scope="col"> Tanggal masuk</th>
                                            <th scope="col"> Expired</th>
                                            <th scope="col"> Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($barang as $b)
                                    <tbody>
                                        <tr>
                                            <td>{{ $b->id }}</td>
                                            <td>{{ $b->Suplier->nama }}</td>
                                            <td>{{ $b->nama_barang }}</td>
                                            <td>{{ $b->jenis }}</td>
                                            <td> Rp.{{number_format(   $b->harga  ,2,',','.')}}</td>
                                            <td>{{ $b->stok }}</td>
                                            <td>{{ $b->tanggal_masuk }}</td>
                                            <td>{{ $b->expired }}</td>
                                            <td>
                                                <a href="/barang/{{$b->id}}/edit"class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger" onClick="Delete('/barang/{{$b->id}}/hapus')">Hapus</a>
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