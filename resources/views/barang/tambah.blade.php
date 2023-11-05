@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>tambah data barang</h3>
                        </div>
                        <div class="card-body">
                            <form action="/barang/simpan" method="post">
                                @csrf
                                {{-- <div class="mb-3">
                                    <label for="" class="form-label">Id Suplier</label>
                                    <input type="number" name="id_suplier" id="" class="form-control" placeholder="Masukan Id suplier" aria-describedby="helpId">
                                  </div> --}}
                                  <div class="form-group">
                                    <label for="">Suplier</label>
                                    <select name="id_suplier" class="form-control">
                                        <option value="" disabled>-- Pilih Suplier --</option>
                                        @foreach ( $suplier as $suplier )
                                            <option value="{{ $suplier->id }}">{{ $suplier->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                      

                                  <div class="mb-3">
                                      <label for="" class="form-label">Nama Barang</label>
                                      <input type="text" name="nama_barang" id="" class="form-control" placeholder="Masukan Nama Barang" aria-describedby="helpId">
                                    </div>
                                    <div class="mb-3">
                                      <label for="" class="form-label">Jenis</label>
                                      <input type="text" name="jenis" id="" class="form-control" placeholder="Masukan Jenis" aria-describedby="helpId">
                                    </div>
                                    <div class="mb-3">
                                      <label for="" class="form-label">Harga</label>
                                      <input type="number" name="harga" id="" class="form-control" placeholder="Masukan Harga" aria-describedby="helpId">
                                    </div>
                                    <div class="mb-3">
                                      <label for="" class="form-label">Stok</label>
                                      <input type="number" name="stok" id="" class="form-control" placeholder="Masukan stok" aria-describedby="helpId">
                                    </div>
                                    <div class="mb-3">
                                      <label for="" class="form-label">Tanggal Masuk</label>
                                      <input type="date" name="tanggal_masuk" id="" class="form-control" placeholder="Masukan Tanggal masuk" aria-describedby="helpId">
                                    </div>
                                    <div class="mb-3">
                                      <label for="" class="form-label">Expired</label>
                                      <input type="date" name="expired" id="" class="form-control" placeholder="Masukan Expired" aria-describedby="helpId">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection