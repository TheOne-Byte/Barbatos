@extends('layout.Navbar')


@section('headings')


<h5>{{ $categoryName -> name }}</h5>
<div class="d-flex" style="overflow-x: scroll; px-5">
    @foreach ($category as $product)
        <div class = "card">
            <img src="{{ asset($product->image) }}" class="img-fluid rounded-start;" alt="..." style="width: 400px; height:400px; px-5;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><small class="text-muted">Rp. {{ $product->price }}</small></p>
                <a href="/ProductDetail/{{$product -> id}}" class="btn btn-primary">Product Detail</a>
            </div>
        </div>
    @endforeach
</div>
@endsection


