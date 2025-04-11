@extends('kasir.template.master')
@section('content')
    <main class="main-content d-flex justify-content-center align-items-center bgc-grey-100">
        <div id="mainContent">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="box-body text-center">
                            <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
                            <h2>Anda login sebagai KASIR</h2>
                            <br><br>
                            <a href="" class="btn btn-success btn-lg">Transaksi Baru</a>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
