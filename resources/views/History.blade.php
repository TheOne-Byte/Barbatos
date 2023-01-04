@extends('layout.Navbar')

@section('headings')
    <div class="container-fluid" style="0 25%;">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Sub_price</th>
                </tr>
            </thead>
            @foreach ($transactions as $transaction)
                <tbody>
                    <tr>
                        <th scope="row">{{ $transaction->id }}</th>
                        <td>{{ $transaction->name }}</td>
                        <td>{{ $transaction->quantity }}</td>
                        <td>{{ $transaction->sub_price }}</td>
                    </tr>
                </tbody>
            @endforeach
    </div>
@endsection
