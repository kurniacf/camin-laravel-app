@extends('delivery.layout')
@section('content')

    <div class="card">
        <div class="card-header">Buat Delivery</div>
        <div class="card-body">

            <form action="{{ url('delivery') }}" method="post">
                {!! csrf_field() !!}
                <label>Nama</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Alamat</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Jumlah</label></br>
                <input type="number" name="quantity" id="quantity" class="form-control"></br>
                <label>ID Produk</label></br>
                <input type="number" name="product_id" id="product_id" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
