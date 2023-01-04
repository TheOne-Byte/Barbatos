@extends('layout.Navbar')

@section('headings')
    <div class ="" style="width: 100%">
    <a href="/AddProduct" class="bg-primary text-white p-3 mx-3"><button class="px-5 btn btn-primary">Add Product +</button></a>
        @foreach ($product as $product)
            <div class = ""  >
                <img src="{{ asset($product->image) }}" class="img-fluid rounded-start;" alt="..." style="width: 400px; height:400px; px-5;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <a href='/UpdateProduct/{{$product->id}}' class="btn btn-primary" style="width: 100px; height:50px">Update</a>
                    <a href='/Delete/{{$product->id}}' class="btn btn-danger" style="width: 100px; height:50px">Delete</a>
                </div>
            </div>
        @endforeach
    </div>    
@endsection