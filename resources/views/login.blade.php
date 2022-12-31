@extends('layout.Navbar')

@section('headings')

<div class = "d-flex justify-content-center align-item-center pt-5 mt-5">
 <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
  <div class="card">
    <div class="card-body py-5 px-md-5">
      <form>
      <div class="text">
        <h2>Login</h2>
      </div>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" id="form3Example1" class="form-control" />
              <label class="form-label" for="form3Example1">First name</label>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="form-outline">
              <input type="text" id="form3Example2" class="form-control" />
              <label class="form-label" for="form3Example2">Last name</label>
            </div>
          </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form3Example3" class="form-control" />
          <label class="form-label" for="form3Example3">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form3Example4" class="form-control" />
          <label class="form-label" for="form3Example4">Password</label>
        </div>

        <!-- Checkbox -->
        <div class="form-check d-flex justify-content mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
          <label class="form-check-label" for="form2Example33">
            Remember me
          </label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">
          Sign up
        </button>
</div>
@endsection
