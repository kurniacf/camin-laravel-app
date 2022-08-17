@extends('delivery.layout')
@section('content')

    <div class="card">
        <div class="card-header">Edit Delivery</div>
        <div class="card-body">

            <form action="{{ url('delivery/' .$delivery->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$delivery->id}}" id="id"/>
                <label>Nama</label></br>
                <input type="text" name="name" id="name" value="{{$delivery->name}}" class="form-control"></br>
                <label>Alamat</label></br>
                <input type="text" name="address" id="address" value="{{$delivery->address}}" class="form-control"></br>
                <label>Jumlah</label></br>
                <input type="number" name="quantity" id="quantity" value="{{$delivery->quantity}}" class="form-control"></br>
                <label>ID Produk</label></br>
                <input type="number" name="product_id" id="product_id" value="{{$delivery->product_id}}" class="form-control"></br>
                <label>Status Pembayaran</label></br>
                <input type="checkbox" name="status_payment" class="switch-input" value="1" {{ old('status_payment') ? 'checked="checked"' : '' }}/>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
