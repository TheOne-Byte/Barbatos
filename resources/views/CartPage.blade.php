@extends('layout.Navbar')

@section('headings')
    @foreach ($carts as $item)
        <div class="container-fluid">
            <div class="">
                <div class="m-5 d-flex" style="justify-content: space-between;">
                    <div class="">
                        <div class="d-flex">
                            <img src="{{ asset($item->image) }}" width="150px">
                            <div class="m-3">
                                <p class="mt-2">{{ $item->name }}</p>
                                <p class="mt-2">Quantity: {{ $item->quantity }}</p>
                                <p class="mt-2">Total Price: {{ $item->sub_price }}</p>
                            </div>
                            <div class="m-2">
                                <a href="/deletecart/{{ $item['id'] }}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <footer>
        <div class="container-fluid py-3">
            <p>Total Price: Rp. {{ $total_price }}</p>
            <input type="submit" href="/Homepage" class="btn btn-lg btn-primary register-btn mb-4" value="Purchase">
        </div>
    </footer>
@endsection
