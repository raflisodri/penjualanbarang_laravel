@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data User</h3>
                            <a href="/user/tambah" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Tanggal daftar</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($user as $b)
                                    <tbody>
                                        <tr>
                                            <td>{{ $b->id }}</td>
                                            <td>{{ $b->name }}</td>
                                            <td align="center">
                                                <img class="img" style="height:300px width:300px" src="{{ asset("foto/$b->foto") }}" alt="">
                                            </td>
                                            <td>{{ $b->username }}</td>
                                            <td>{{ $b->level }}</td>
                                            <td>{{ $b->created_at }}</td>
                                            <td>
                                                <a href="/user/{{$b->id}}/edit"class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger" onClick="Delete('/user/{{$b->id}}/hapus')">Hapus</a>
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