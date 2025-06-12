@extends('layouts.default')

@section('content')
    <h1>Product List</h1>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
