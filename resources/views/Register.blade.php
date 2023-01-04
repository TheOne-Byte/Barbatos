@extends('layout.Navbar')


@section('headings')


<form action="/register" method="post">
@csrf
  <div class = "d-flex justify-content-center align-item-center pt-5 mt-5">
    <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
      <div class="card">
        <div class="card-body py-5 px-md-5">
          <div class="text mt-2">
          <h2>Register</h2>
          </div>

            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="name" id="name" name="name" class="form-control" />
              <label class="form-label" for="name">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="email" class="form-control" />
              <label class="form-label" for="email">Email address</label>
              @if($errors->has('email'))
                <span class="invalid-feedback" role="alert"><strong>{{$errors->first('email')}}</strong></span>
              @endif
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="password" class="form-control" />
              <label class="form-label" for="password">Password</label>
            </div>
            
            <!-- Confirm Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="confirmUserPass" id="confirmUserPass" class="form-control" />
              <label class="form-label" for="confirmUserPass">Confirm Password</label>
            </div>


            <!-- Gender Selection -->
            <div class="form-outline mb-4">
                    <select name="gender" id="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female"> Female</option>
                    </select>
                    <label for="gender">Gender</label>
            </div>        
            <!-- Date of Birth -->
            <div name="form-outline mb-4">
                <input type="date" class="form-control" name="dob" id="dob" >
                <label for="dob">Date Of Birth</label>
            </div>
          
            <!-- Coutry Select -->
            <div class="form-outline mb-4">
                    <select name="country" id="country" class="form-control">
                        <option value="Indonesia">Indonesia</option>
                        <option value="UK">UK</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Singapore">Singapore</option>
                    </select>
                    <label for="country">Country</label>
              </div>


            <!-- Register button -->
              <button type="submit" class="btn btn-lg btn-primary register-btn mb-4">
              submit
              </button>

              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
              @endif
        </div>
      </div>
    </div>
  </div>
</form>
 
@endsection
