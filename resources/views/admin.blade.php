@extends('layouts.app')
@section('tittle', 'Home Page')
@section('content')
    <h2 class="my-4"> <center> Table Pemesanan</center> </h2>
<div class="container my-4">
        <table class="table">
            <tr class="text-center">
                <th>Nama</th>
                <th>Barang</th>
                <th>Gejala</th>
                <th>Alamat</th>
                <th>Tanggal Pesan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($pemesanan as $row)   
            <tr>
                <td>{{$row -> nama_customer}}</td>
                <td>{{$row -> barang_customer}}</td>
                <td>{{$row -> gejala_kerusakan}}</td>
                <td>{{$row -> alamat}}</td>
                <td>{{$row -> tgl_pesan}}</td>
                <td class="text-center"><a href="" class="btn btn-sn btn-info">Jawab</a> <a href="" class="btn btn-sn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </table>
</div>
@endsection