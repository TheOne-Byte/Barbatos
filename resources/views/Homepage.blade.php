@extends('layout.Navbar')



@section('headings')

@foreach ($categories as $category) //Ini untuk buat category kayak di soal
    <div class="card-deck">
        @foreach ( as ) // ini untuk looping product dari category
    <div class="card">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>

  </div>
         @endforeach
@endforeach

@endsection
