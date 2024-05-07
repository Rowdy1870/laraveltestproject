@extends('layout.only')

@section('content')
<h3>Data barang</h3>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('barang/add') }}'">
          <i class="fas fa-plus-circle"></i> Tambah BArang gak?
      </button>
    </div>
    <div class="card-body">
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>idbarang</th>
                    <th>nama Barang</th>
                    <th>tanggal masuk</th>
                    <th>stock barang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $row)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $row->idbarang }}</td>
                        <td>{{ $row->nama }}</td>                        
                        <td>{{ $row->tanggalmasuk }}</td>
                        <td>{{ $row->stockbarang }}</td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
@endsection