@extends('layout.Navbar')

@section('headings')
    <div class="Container-fluid">
        <div class="col-12">
            <label class="form-label">Name</label><br>
            <input type="text" class="form-control" value="{{ $user->name }}" name="name" readonly>
        </div>
        <div class="col-12">
            <label class="form-label">Email</label><br>
            <input type="text" class="form-control" value="{{ $user->email }}" name="email" readonly>
        </div>

        <div class="col-12">
            <label class="form-label">Gender</label><br>
            <input type="text" class="form-control" value="{{ $user->gender }}" name="gender" readonly>
        </div>

        <div class="col-12">
            <label class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" value="{{ $user->DoB }}" name="DoB" readonly>
        </div>

        <div class="col-12">
            <label class="form-label">Country</label><br>
            <input type="text" class="form-control" value="{{ $user->country }}" name="country" readonly>

        </div>
    @endsection
