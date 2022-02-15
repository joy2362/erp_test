@extends('layouts.main')
@section('title')
    <title>Shopify Product</title>
@endsection

@section('main-content')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md ">
                <table class="table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Variants</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Barcode</th>
                        <th scope="col">Vendor</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($products as $row)
                            @foreach($row as $product)
                                @foreach($product["variants"] as $variants)
                            <tr>
                                <td >{{$product['title']}}</td>
                                <td >{{$product['body_html']}}</td>
                                <td >-</td>
                                <td >{{$variants['title']}}</td>
                                <td >{{$variants['sku']}}</td>
                                <td >{{$variants['inventory_quantity']}}</td>
                                <td >{{$variants['barcode']}}</td>
                                <td >{{$product['vendor']}}</td>
                                <td >{{$variants['price']}}</td>
                                <td >{{$product['status']}}</td>
                            </tr>
                            @endforeach
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
