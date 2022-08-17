@extends('delivery.layout')
@section('content')


    <div class="card">
        <div class="card-header">Delivery Page</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Nama : {{ $delivery->name }}</h5>
                <p class="card-text">Alamat : {{ $delivery->address }}</p>
                <p class="card-text">Jumlah : {{ $delivery->quantity }}</p>
                <p class="card-text">ID Produk : {{ $delivery->product_id }}</p>
                <p class="card-text">Status Pembayaran : {{ $delivery->status_payment }}</p>
            </div>

        </div>
    </div>
