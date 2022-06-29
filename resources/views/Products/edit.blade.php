@extends('products.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('product/' .$products->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$products->name}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="description" id="description" value="{{$products->description}}" class="form-control"></br>
                <label>Amount</label></br>
                <input type="text" name="amount" id="amount" value="{{$products->amount}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
