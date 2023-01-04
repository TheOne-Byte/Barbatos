@extends('layout.Navbar')

@section('headings')
<div class="d-flex justify-content-center align-item-center pt-5 mt-5">
    <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
        <div class="card">
            <div class="card-body py-5 px-md-5">
                <div class="text mt-2">
                    <h2>Profile</h2>
                </div>
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="{{$users->name}}" name="name" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Email</label>
                        <input type="text" class="form-control" id="name" value="{{$users->email}}" name="name" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">gender</label>
                        <input type="text" class="form-control" id="name" value="{{$users->gender}}" name="name" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Date of Birth</label>
                        <input type="text" class="form-control" id="name" value="{{$users->DoB}}" name="name" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Country</label>
                        <input type="text" class="form-control" id="name" value="{{$users->country}}" name="name" readonly>
                    </div>
                </form>

                  {{-- <table class="table">
                    <tbody>
                        <tr><td>Name: {{$users->name}}</td></tr>
                        <tr><td>Email: {{$users->email}}</td></tr>
                        <tr><td>Gender: {{$users->gender}}</td></tr>
                        <tr><td>Date Of Birth: {{$users->DoB}} </td></tr>
                        <tr><td>Country: {{$users->country}}</td></tr>
                    </tbody>
                </table> --}}

            </div>
        </div>
    </div>
</div>

        <div class="Container-fluid">
                <div class="">
              
                </div>
        </div>
@endsection
