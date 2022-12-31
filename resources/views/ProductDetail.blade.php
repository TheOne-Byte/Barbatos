@extends('layout.Navbar')



@section('headings')
<h2>{{ $products->name }}</h2>
{{-- <p>Category: {{ $products->category->name }}</p> --}}
<p>{{ $products->description }}</p>
<p>{{ $products->price }}</p>
<img src="{{ $products->image }}">

@endsection
