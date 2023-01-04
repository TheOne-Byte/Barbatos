@extends('layout.Navbar')

@section('headings')
        <div class="Container-fluid">
                <div class="">
                <table class="table">
                    <tbody>
                        <tr><td>Name: {{$users->name}}</td></tr>
                        <tr><td>Email: {{$users->email}}</td></tr>
                        <tr><td>Gender: {{$users->gender}}</td></tr>
                        <tr><td>Date Of Birth: {{$users->DoB}} </td></tr>
                        <tr><td>Country: {{$users->country}}</td></tr>
                    </tbody>
                </table>
                </div>
        </div>
@endsection
