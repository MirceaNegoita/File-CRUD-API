@extends('layouts.app')

@section('title', 'Add Product')

@section('content')

<div class="row">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 style="text-align:center;">New Product</h2>
            </div>

            <div class="panel-body">
                @include('includes.flash')
                <form action="{{ url('/create_product') }}" method="post" class="form form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name" class="control-label col-md-4">Name</label>

                        <div class="col-md-6">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>

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
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control" required>

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
                            <textarea name="description" value="{{ old('description') }}" class="form-control" cols="30" rows="10" required></textarea>

                            @if($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('image') ? 'has-error' : '' }}">
                        <label for="image" class="control-label col-md-4">Image</label>

                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control" required>
                            <span>Accepted formats are : PNG, JPG and BMP</span>

                            @if($errors->first('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('document') ? 'has-error' : '' }}">
                        <label for="document" class="control-label col-md-4">Document</label>

                        <div class="col-md-6">
                            <input type="file" class="form-control" name="document" required>
                            <span>Accepted formats are : PDF, DOC and ODT</span>

                            @if($errors->first('document'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('document') }}</strong>
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