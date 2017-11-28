@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

<div class="row">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="text-align:center;">Edit Product : {{ $product->name }} </h2>
            </div>

            <div class="panel-body">
                @include('includes.flash')
                <form action="{{ url('/products/edit/'.$product->id) }}" method="post" class="form form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label col-md-4">Name</label>

                        <div class="col-md-6">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="{{ $product->name }}" required>

                            @if($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('price') ? 'has-error' : '' }}">
                        <label for="price" class="control-label col-md-4">Price</label>

                        <div class="col-md-6">
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control" placeholder="{{ $product->price }}" required>

                            @if($errors->has('price'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('description') ? 'has-error' : '' }}">
                        <label for="description" class="control-label col-md-4">Description</label>

                        <div class="col-md-6">
                            <textarea name="description" value="{{ old('description') }}" class="form-control" cols="30" rows="10" placeholder="{{ $product->description }}" required></textarea>

                            @if($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-6">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection