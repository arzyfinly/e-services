@extends('layouts.app')
@section('tittle', 'Form Pemesanan')
@section('content')
    <div class="container py-4">
        <div class="row">
            <table>
                <tr><td>Nama</td><td><input type="text" name="nama_pemesan" placeholder="Masukkan Nama"></td></tr>
                <tr>
                    <td>Barang yang mau di servis</td>
                    <td>
                        <select name="service">
                            <option value="laptop">Laptop</option>
                            <option value="hp">Hp</option>
                            <option value="komputer">komputer</option>
                            <option value="lainnya">lainnya</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td>
                    <input type="number" value="Order Lebih">
                    </td>
                </tr>
                <tr>
                <td>Alamat Penerima</td><td><textarea></textarea></td>
                </tr>
                <tr><td></td><td><input type="submit" value="Checkout"></td></tr>
                </table>
        </div>
    </div>
@endsection
