@extends('layout.only')

@section('content')
<h3>yData barang</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('barang') }}'">
          kembali
      </button>
    </div>
    <div class="card-body">
        <form method="POST" action="{{url('barang')}}">
            @csrf
            <div class="row mb-3">
                <label for="kdidbarang" class="col-sm-2 col-form-label">ID barang</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="kdidbarang" name="kdidbarang">
                </div>
              </div>
            <div class="row mb-3">
                <label for="kdnamabarang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="kdnamabarang" name="kdnamabarang">
                </div>
              </div>
            <div class="row mb-3">
                <label for="kdtanggalbarang" class="col-sm-2 col-form-label">Tanggal Barang</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="kdtanggalbarang" name="kdtanggalbarang">
                </div>
              </div>              
            <div class="row mb-3">
                <label for="kdstockbarang" class="col-sm-2 col-form-label">Stock Barang</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="kdstockbarang" name="kdstockbarang">
                </div>
              </div>              
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-sm btn-primary">
                  Simpan
                  </button>
                </div>
              </div>              
        </form>
    </div>
</div>
@endsection

    