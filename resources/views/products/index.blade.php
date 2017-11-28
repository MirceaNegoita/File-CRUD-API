@extends('layouts.app')

@section('title', 'Products')
    
@section('content')

<div class="row">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="text-align:center;">All Products</h2>
            </div>

            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image Link</th>
                        <th>Document Link</th>
                        <th>API</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><a href="{{ url('/product/'.$product->id) }}">
                                    {{ $product->name }}
                                </a></td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->image }}</td>
                                <td>{{ $product->document }}</td>
                                <td><a href="{{ url('/products/api/'.$product->id) }}"><button type="btn" class="btn btn-warning">API</button></a></td>
                                <td><a href="{{ url('/products/edit/'.$product->id) }}"><button type="button" class="btn btn-info">Edit</button></a></td>
                                <td>
                                    <form action="{{ url('/products/'.$product->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
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

@endsection