@extends('layout.Navbar')



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
              <label for=""><b>Qty</b></label>
                <input type="text" style="width: 90%" name='quantity'>
                <br><br>
                <input type="submit" value="Purchase">
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
