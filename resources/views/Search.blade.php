@extends('layout.Navbar')



@section('headings')
    <form class="d-flex mb-5" action="/Search" method="post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <div class="display-5 mb-5">Search Result</div>
    <div class="d-flex flex-column" style="min-height: 100vh">

        <div class="row row-cols-1 row-cols-md-5 g-4 p-5">

            @foreach ($products as $product)
                <div class="">
                    <img src="{{ asset($product->image) }}" class="img-fluid rounded-start;" alt="..."
                        style="width: 400px; height:400px; px-5;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><small class="text-muted">Rp. {{ $product->price }}</small></p>
                        <a href='/ProductDetail/{{ $product->id }}' class="btn btn-primary">Product Detail</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
