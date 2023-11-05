@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card bg-facebook d-flex align-items-center">
                                    <div class="card-body py-5">
                                        <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                            <i class="mdi mdi-account-check text-white icon-lg"></i>
                                            <div class="ms-3 ml-md-0 ml-xl-3">
                                                <h5 class="text-white font-weight-bold">{{$jumlah_user}}</h5>
                                                <p class="mt-2 text-white card-text">jumlah user</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card bg-google d-flex align-items-center">
                                    <div class="card-body py-5">
                                        <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                            <i class="mdi mdi-tooltip text-white icon-lg"></i>
                                            <div class="ms-3 ml-md-0 ml-xl-3">
                                                <h5 class="text-white font-weight-bold">{{$jumlah_barang}}</h5>
                                                <p class="mt-2 text-white card-text">jumlah barang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card bg-twitter d-flex align-items-center">
                                    <div class="card-body py-5">
                                        <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                                            <i class="mdi mdi-cart text-white icon-lg"></i>
                                            <div class="ms-3 ml-md-0 ml-xl-3">
                                                <h5 class="text-white font-weight-bold">
                                                      @if($total_minggu->total_price == null)
                                                    0
                                                    @else
                                  
                                                    <td>Rp.{{number_format($total_minggu->total_price,2,',','.')}}</td>
                                                    @endif
                                                </h5>
                                                <p class="mt-2 text-white card-text">jumlah transaksi(7 hari)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <td>{{ $b->total }}</td>
                              
                                </tr>
                            </tbody>
                            @endforeach
                     
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <!-- row end -->
    
    <!-- row end -->
</div>
@endsection