@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>edit data suplier</h3>
                        </div>
                        <div class="card-body">
                            <form action="/suplier/{{$suplier->id}}/update" method="post">
                                @csrf

                                  <div class="mb-3">
                                      <label for="" class="form-label">Nama Suplier</label>
                                      <input type="text" value="{{$suplier->nama}}" name="nama" id="" class="form-control" placeholder="Masukan Nama Suplier" aria-describedby="helpId">
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