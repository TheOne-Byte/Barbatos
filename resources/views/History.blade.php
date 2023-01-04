@extends('layout.Navbar')

@section('headings')

<div class="container-fluid" style="0 25%;">
    @foreach ($transactions as $transactions)
        <div class="">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Sub Price</th>
                </tr>
                <tr>
                        <td>{{$transactions->product->name}}</td>
                        <td>{{$transactions->quantity}}</td>
                        <td>{{$transactions->product->price}}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>{{$total_quantity}} item(s)</td>
                    <td>Rp. {{$total_price}}</td>
                </tr>
            </table>
        </div>
    @endforeach
</div>


@endsection