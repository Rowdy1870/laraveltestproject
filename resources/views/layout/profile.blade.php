<!-- resources/views/profile.blade.php -->

@extends('layout.only')

@section("profil")
    <div class="container">
        <h2>Profil</h2>
        <table class="profile-table">
            <tr>
                <th>Foto</th>
                <td><img src="{{ asset('storage/'.$karyawan->foto) }}" alt="Foto Profil"></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $karyawan->nama }}</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{{ $karyawan->tempat_lahir }}, {{ $karyawan->tanggal_lahir->format('d F Y') }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $karyawan->alamat }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $karyawan->email }}</td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td>{{ $karyawan->no_telepon }}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>{{ $karyawan->jabatan }}</td>
            </tr>
            <tr>
                <th>Tanggal Masuk</th>
                <td>{{ optional($karyawan->tanggal_masuk)->format('d F Y') }}</td>
            </tr>
        </table>
    </div>
@endsection