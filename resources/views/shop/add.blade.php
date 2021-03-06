
@extends('master')

@section('title', '')
@section('description', '')

@section('styles')

<style type="text/css">
	textarea {
		resize: none;
	}
</style>

@endsection

@section('content')

<h1>Add Product</h1>

<form id="add-products" method="post" enctype="multipart/form-data" action="/submit-product">
	{!! csrf_field() !!}

	<div class="form-group {{ $errors->has('product_title') ? 'has-error' : ''}}">
		<label>Product Title</label>
		<input type="text" class="form-control" name="product_title" placeholder="Product Title" value="{{ old('product_title') }}">
		{!! $errors->first('product_title', '<span class="help-block"> :message </span>') !!}
	</div>

	<div class="form-group {{ $errors->has('product_description') ? 'has-error' : ''}}">
		<label>Product Description</label>
		<input type="text" class="form-control" name="product_description" placeholder="Product Description" value="{{ old('product_description') }}">
		{!! $errors->first('product_description', '<span class="help-block"> :message </span>') !!}
	</div>

	<div class="form-group {{ $errors->has('product_price') ? 'has-error' : ''}}">
		<label>Product Price</label>
		<input type="number" class="form-control" name="product_price" placeholder="Product Price" value="{{ old('product_price') }}">
		{!! $errors->first('product_price', '<span class="help-block"> :message </span>') !!}
	</div>

	<div class="form-group {{ $errors->has('product_image') ? 'has-error' : ''}}">
		<label>Product Image</label>
		<input type="file" class="form-control" name="product_image" placeholder="Product Image" value="{{ old('product_image') }}">
		{!! $errors->first('product_image', '<span class="help-block"> :message </span>') !!}
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Add Product</button>
	</div>
</form>


@endsection

@section('scripts')
@endsection