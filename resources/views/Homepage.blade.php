@extends('layout.Navbar')



@section('headings')
    <div class = "searchbar"  >
        <form class="d-flex mb-5" action="/Search" method="post">
        @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

    @foreach ($categories as $category)
        <h5>{{ $category -> name }} </h5>     
        <a href="/ProductbyCategory/{{ $category -> id }}" class="card-link">View Category</a>
        <div class="d-flex" style="overflow-x: scroll; px-5">
            @foreach ($category->Productrelation as $product)
                <div class = ""  >
                    <img src="{{ asset($product->image) }}" class="img-fluid rounded-start;" alt="..." style="width: 400px; height:400px; px-5;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><small class="text-muted">Rp. {{ $product->price }}</small></p>
                        <a href='/ProductDetail/{{$product -> id}}' class="btn btn-primary">Product Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
