@extends('layouts.app')

@section('title', 'Product')

@section('content')

<div class="row">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="text-align:center;">{{ $product->name }}</h2>
            </div>

            <div class="panel-body">
                <p>{{ $product->name }}</p>
                <br>
                <p>{{ $product->price }}</p>
                <br>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
</div>
    
@endsection