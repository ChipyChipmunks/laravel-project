
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

<form id="add-products" method="post" enctype="multipart/form-data" action="">
	<div class="form-group">
		<label>Product Title</label>
		<input type="text" class="form-control" name="product_title" placeholder="Product Title">
	</div>

	<div class="form-group">
		<label>Product Description</label>
		<textarea name="product-description" class="form-control" placeholder="Product Description" rows=5></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Add Product</button>
	</div>
</form>

@endsection

@section('scripts')
@endsection