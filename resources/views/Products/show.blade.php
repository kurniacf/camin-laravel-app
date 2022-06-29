@extends('products.layout')
@section('content')
    <div class="card">
        <div class="card-header">Products Page</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Name : {{ $products->name }}</h5>
                <p class="card-text">Description : {{ $products->description }}</p>
                <p class="card-text">Amount : {{ $products->amount }}</p>
            </div>

        </div>
    </div>
@stop
