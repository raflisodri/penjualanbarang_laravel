@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>tambah data transaksi</h3>
                        </div>
                        <div class="card-body">
                            <form action="/transaksi/simpan" method="post">
                                @csrf

                                  {{-- <div class="mb-3">
                                      <label for="" class="form-label">Id Barang</label>
                                      <input type="number" name="id_barang" id="" class="form-control" placeholder="Masukan id barang" aria-describedby="helpId">
                                    </div> --}}
                                    <div class="form-group">
                                      <label for="">Barang</label>
                                      <select name="id_barang" class="form-control">
                                          <option value="" disabled>-- Pilih Barang --</option>
                                          @foreach ( $barang as $barang )
                                              <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                          @endforeach
                                      </select>
                                  </div>

                                    {{-- <div class="mb-3">
                                        <label for="" class="form-label">Id Petugas</label>
                                        <input type="number" name="id_petugas" id="" class="form-control" placeholder="Masukan Id petugas" aria-describedby="helpId">
                                      </div> --}}
                                      <div class="form-group">
                                        <label for="">Petugas</label>
                                        <input type="text" class="form-control"  value="{{ Auth()->User()->name }}" disabled>
                                      
                                    </div>
                                    <div class="mb-3">
                                      <label for="" class="form-label">Tanggal</label>
                                      <input type="date" name="tgl_bayar" id="" class="form-control" placeholder="Masukan tanggal" aria-describedby="helpId">
                                    </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Jumlah</label>
                                        <input type="number" name="jumlah" id="" class="form-control" placeholder="Masukan jumlah" aria-describedby="helpId">
                                      </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" id="" class="form-control" placeholder="Masukan Keterangan" aria-describedby="helpId">
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