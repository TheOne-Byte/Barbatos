@extends('layout.Navbar')



@section('headings')

@foreach ($categories as $category)
<h5>{{ $category -> name }} </h5>     <a href="/ProductbyCategory/{{ $category -> id }}" class="card-link">View Category</a>
<div class="d-flex" style="overflow-x: scroll; px-5">
    @foreach ($products as $product)
        @if ($category->id == $product->category_id)
        <div class = ""  >
            <img src="{{ asset($product->image) }}" class="img-fluid rounded-start;" alt="..." style="width: 400px; height:400px; px-5;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><small class="text-muted">Rp. {{ $product->price }}</small></p>
                <a href='/ProductDetail/{{$product -> id}}' class="btn btn-primary">Product Detail</a>
            </div>
        </div>
        @endif

    @endforeach
</div>
@endforeach

@endsection
