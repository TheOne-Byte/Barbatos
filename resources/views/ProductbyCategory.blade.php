@extends('layout.Navbar')


@section('headings')


<h5>{{ $category -> name }}</h5>
<div class="d-flex" style="overflow-x: scroll; px-5">
    @foreach ($category as $product)
        <div class = "card"  >
            <img src="{{ asset($product->image) }}" class="img-fluid rounded-start;" alt="..." style="width: 400px; height:400px; px-5;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><small class="text-muted">Rp. {{ $product->price }}</small></p>
                <a href='/ProductDetail/{{$product -> id}}' class="btn btn-primary">Product Detail</a>
            </div>
        </div>
    @endforeach
</div>

@endsection


{{--
@section('headings')
<div class = " justify-content-center align-item-center pt-5 mt-5 d-flex">

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset($products->image) }}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $products->name }}</h5>
              <p class="card-text">{{ $products->description }}</p>
              <p class="card-text"><small class="text-muted">Rp. {{ $products->price }}</small></p>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection --}}
