@extends('layout.Navbar')

@section('headings')

    <form action="/AddProduct" method="post" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-center align-item-center pt-5 mt-5">
            <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
                <div class="card">
                    <div class="card-body py-5 px-md-5">
                        <div class="text mt-2">
                            <h2>Add Product</h2>
                        </div>

                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input type="name" id="name" name="name" class="form-control" />
                            <label class="form-label" for="name">Name</label>
                        </div>

                        <!-- Category Select -->
                        <div class="form-outline mb-4">
                            <label for="category">Category</label><br>
                            <select id="category" class="form-select" name="category">
                                <option selected>Choose</option>
                                @foreach ($categories as $categoryName)
                                    <option value="{{ $categoryName['id'] }}">{{ $categoryName['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <!-- Detail input -->
                    <div class="form-outline mb-4">
                        <input type="detail" name="detail" id="detail" class="form-control" />
                        <label class="form-label" for="detail">detail</label>
                    </div>

                    <!-- Price  input -->
                    <div class="form-outline mb-4">
                        <input type="price" name="price" id="price" class="form-control" />
                        <label class="form-label" for="price">price</label>
                    </div>

                    <!-- Picture input -->
                    <div class="form-outline mb-4">
                        <label for="image">Photo</label><br>
                        <input id="image" type="file" class="form-control" name="image">
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
