@extends('layouts.master')

@section('title')
    Keranjang Pintar
@endsection

@section('content')
    @foreach($products->chunk(3) as $productCollection)
        <div class="row">
            @foreach($productCollection as $product)
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                             data-mdb-ripple-color="light">
                            <img src="{{$product->imageLink}}" class="w-100" alt="..."/>
                        </div>
                        <div class="card-body">
                            <a href="" class="text-reset">
                                <h5 class="card-title mb-3">{{$product->title}}</h5>
                            </a>
                            <a href="" class="text-reset">
                                <p>{{$product->category}}</p>
                            </a>
                            <div class="clearfix text-center">
                                <div class="pull-left price font-weight-bold">Rp{{$product->price}}</div>
                                <a href="#" class="btn btn-success pull-right" role="button">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
