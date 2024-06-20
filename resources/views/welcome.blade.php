@extends('layouts.app')

@section('content')
<!-- Jumbotron -->
<div class="jumbotron bg-light text-center py-5">
    <div class="container">
        <h1 class="display-4">Welcome to Our Website</h1>
        <p class="lead">Discover our amazing products and services.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</div>

<!-- Product Section -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">Description of Product 1.</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">Description of Product 2.</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product 3</h5>
                    <p class="card-text">Description of Product 3.</p>
                    <a href="#" class="btn btn-primary">View Product</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
