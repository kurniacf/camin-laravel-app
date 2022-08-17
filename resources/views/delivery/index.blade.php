@extends('delivery.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Sistem Admin Delivery</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/delivery/create') }}" class="btn btn-success btn-sm" title="Tambahkan Delivery Baru">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambahkan Baru
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jumlah</th>
                                    <th>ID Produk</th>
                                    <th>Status Pembayaran</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($delivery as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->product_id }}</td>
                                        <td>{{ $item->status_payment ? true : false }}</td>

                                        <td>
                                            <a href="{{ url('/delivery/' . $item->id) }}" title="Lihat Delivery"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                                            <a href="{{ url('/delivery/' . $item->id . '/edit') }}" title="Edit Delivery"><button class="btn btn-info btn-sm"><iprimary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/delivery' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Delivery" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
