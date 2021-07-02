@extends('layouts.app')
@section('tittle', 'Form Pemesanan')
@section('content')
    <div class="container py-4">
        <form>
            <section class="order-form my-4 ">
                <div class="container pt-4">
                        <div class="col-12">
                          <h1>PESAN SEKARANG</h1>
                          <span>Di larang keras menggunakan informasi sembarang</span>
                          <hr class="mt-1">
                        </div>
                        <div class="col-12">
                
                        <div class="row ">
                            <div class="col-12">
                                <label class="order-form-label">Name</label>
                            </div>
                            <div class="col-12">
                                <input class="form-control" placeholder="isi dengan nama">
                            </div>
                        </div>                

                        <div class="row mt-3 ">
                            <div class="col-12">
                                <label class="order-form-label">Benda yang ingin di service</label>
                            </div>
                            <div class="col-12">
                                <select class="form-control">
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
                                <input class="form-control" placeholder="Masukkan gejala atau kerusakan">
                            </div>
                        </div>
                
                        <div class="row mt-3 ">
                            <div class="col-12">
                                <label class="order-form-label" for="date-picker-example">Date</label>
                            </div>
                            <div class="col-12">
                                <input class="form-control" placeholder="Selected date" type="date"
                                id="date-picker-example">
                            </div>
                        </div>
                
                        <div class="row mt-3 ">
                            <div class="col-12">
                                <label class="order-form-label">Adress</label>
                            </div>
                            <div class="col-12">
                                <input class="form-control" placeholder="Street Address">
                            </div>
                            <div class="col-12 mt-2">
                                <input class="form-control" placeholder="Street Address Line 2">
                            </div>
                            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
                                <input class="form-control" placeholder="City">
                            </div>
                        </div>
                
                        <div class="row mt-3 ">
                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="validation" id="validation" value="1">
                                    <label for="validation" class="form-check-label">I know what I need to know</label>
                                </div>
                            </div>
                        </div>
                
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="button" id="btnSubmit" class="btn btn-dark d-block btn-submit">Submit</button>
                            </div>
                        </div>
                    </div>
            </section>
        </form>
    </div>
@endsection
