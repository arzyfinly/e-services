@extends('layouts.app')
@section('tittle', 'Form Pemesanan')
@section('content')
    <div class="container">
    <form method="POST" action="/pesan/finish">
        {{ csrf_field()}}
            <section class="order-form my-4 ">
                <div class="container ">`
                        <div class="col-12">
                          <h1>PESAN SEKARANG</h1>
                          <span>Di larang keras menggunakan informasi Acak</span>
                          <hr class="mt-1">
                        </div>
                        <div class="col-12">
                
                        <div class="row ">
                            <div class="col-12">
                                <label class="order-form-label">Name</label>
                            </div>
                            <div class="col-12">
                                <input name="nama" class="form-control" placeholder="isi nama anda">
                            </div>
                        </div>                

                        <div class="row mt-3 ">
                            <div class="col-12">
                                <label class="order-form-label">Benda yang ingin di service</label>
                            </div>
                            <div class="col-12">
                                <select name="barang" class="form-control">
                                    <option selected>Pilih salah satu </option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="Komputer">Komputer</option>
                                    <option value="Hp">Hp</option>
                                </select>
                            </div>
                        </div>
                
                        <div class="row mt-3 ">
                            <div class="col-12">
                                <label class="order-form-label">Jenis Kerusakan</label>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="kerusakan"  placeholder="Masukkan gejala atau kerusakan" ></textarea>
                            </div>
                        </div>
                
                        <div class="row mt-3 ">
                            <div class="col-12">
                                <label class="order-form-label">Alamat</label>
                            </div>
                            <div class="col-12">
                                <input name="alamat" class="form-control" placeholder="Alamat anda">
                            </div>
                        </div>
                               
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="submit" id="btnSubmit" class="btn btn-dark d-block btn-submit">Pesan</button>
                            </div>
                        </div>
                    </div>
            </section>
        </form>
    </div>
@endsection
