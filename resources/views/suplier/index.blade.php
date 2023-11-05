@extends('master')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data suplier</h3>
                            <a href="#" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modalId">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Nama suplier</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($suplier as $b)
                                    <tbody>
                                        <tr>
                                            <td>{{ $b->id }}</td>
                                            <td>{{ $b->nama }}</td>
                                            <td>
                                                <a href="/suplier/{{$b->id}}/edit"class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger" onClick="Delete('/suplier/{{$b->id}}/hapus')">Hapus</a>
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

<!-- Modal trigger button -->

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Tambah suplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
                <form action="/suplier/simpan" method="post">
                    @csrf

                      <div class="mb-3">
                          <label for="" class="form-label">Nama Suplier</label>
                          <input type="text" name="nama" id="" class="form-control" placeholder="Masukan Nama Suplier" aria-describedby="helpId">
                        </div>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
</script>

@endsection