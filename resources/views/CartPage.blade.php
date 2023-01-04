@extends('layout.Navbar')

@section('headings')
{{dd($cart)}}

@foreach ($cart as $cart)
{{echo()}}
<div class="container-fluid">
    <div class="" >
            <div class="m-5 d-flex" style="justify-content: space-between;">
                <div class="">
                    <div class="d-flex">
                        @foreach ($cart->product as $item)
                            <img src="{{ asset($item->image) }}" width="150px">
                            <div class="m-3">
                                <p class="mt-2">{{ $item->name }}</p>
                                <p class="mt-2">Quantity: {{$item->quantity}}</p>
                                <p class="mt-2">Total Price: {{$item->sub_price}}</p>
                            </div>
                            <div class="m-2">
                                <a href="/deletecart/{{$cart['id']}}" class="p-1 bg-danger rounded text-decoration-none text-dark btn-link"><i class="fa fa-trash" style="font-size:24px"></i></a>
                            </div>
                        @endforeach
                       {{-- {{dd($cart)}} --}}
                        {{-- <img src="{{ asset($cart->product->image) }}" width="150px">
                        <div class="m-3">
                            <p class="mt-2">{{ $cart->product->name }}</p>
                            <p class="mt-2">Quantity: {{$cart->product->quantity}}</p>
                            <p class="mt-2">Total Price: {{$cart->product->sub_price}}</p>
                        </div>
                        <div class="m-2">
                            <a href="/deletecart/{{$cart['id']}}" class="p-1 bg-danger rounded text-decoration-none text-dark btn-link"><i class="fa fa-trash" style="font-size:24px"></i></a>
                        </div> --}}
                
                    </div>
                </div>
            </div>
    </div>
</div>
@endforeach
<footer>
<div class="container-fluid py-3">
    <p>Total Price: Rp. {{$total_price}}</p>
    <input type="submit" href="/Homepage" class="btn btn-lg btn-primary register-btn mb-4" value="Purchase">
</div>
</footer>
@endsection