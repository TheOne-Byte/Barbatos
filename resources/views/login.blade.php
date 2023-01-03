@extends('layout.Navbar')


@section('headings')

<form action="/login" method="post">
@csrf
  <div class = "d-flex justify-content-center align-item-center pt-5 mt-5">
    <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">

     <div class="card">
       <div class="card-body py-5 px-md-5">

         <div class="text">
           <h2>Login</h2>
         </div>
           <!-- Email input -->
           <div class="form-outline mb-4">
             <input type="email" id="email" class="form-control" name="email" />
             <label class="form-label" for="email">Email address</label>
             @if($errors->has('email'))
               <span class="invalid-feedback" role="alert"><strong>{{$errors->first('email')}}</strong></span>
             @endif
           </div>

           <!-- Password input -->
           <div class="form-outline mb-4">
             <input type="password" id="password" class="form-control" name="password"/>
             <label class="form-label" for="password">Password</label>
             @if($errors->has('password'))
               <span class="invalid-feedback" role="alert"><strong>{{$errors->first('password')}}</strong></span>
             @endif
           </div>

           <!-- Checkbox -->
           <div class="form-check d-flex justify-content mb-4">
             <input class="form-check-input me-2" type="checkbox" value="" id="Remember_me" checked />
             <label class="form-check-label" for="">
               Remember me
             </label>
           </div>

           <!-- Submit button -->
           <button type="submit" class="btn btn-primary btn-block mb-4">
            Log in
           </button>
           <p>Dont have account?</p>
           <button type="submit" class="btn btn-primary btn-block mb-4">
             Sign Up
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
