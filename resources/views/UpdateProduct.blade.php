@extends('layout.Navbar')

@section('headings')


    <div class="d-flex justify-content-center align-item-center pt-5 mt-5">
        <div class="col-lg-6 mb-5 mb-lg-0  justify-content mx-auto">
            <div class="card">
                <div class="card-body py-5 px-md-5">
                    <div class="text mt-2">
                        <h2>Update Product</h2>
                    </div>
                    <form action="/UpdateProduct/{{ $products->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Name input -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $products->name }}"
                                name="name">
                        </div>

                        <!-- Category Select -->
                        <div class="mb-3">
                            <label for="category" class="form-label" value="">Category</label>
                            <select id="category" class="form-control selector" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($category->id == $products->category_id) selected="selected" @endif>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Detail input -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Detail</label>
                            <textarea class="form-control" id="description" name="detail" style="height: 16rem">{{ $products->description }}</textarea>
                        </div>

                        <!-- Pric  input -->
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" value="{{ $products->price }}"
                                name="price">
                        </div>

                        <!-- Picture input -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <!-- Update button -->
                        <button type="submit" class="btn btn-lg btn-primary register-btn mb-4">
                            Update
                        </button>
                        <div><a href="/ManageProduct">
                                Cancel
                            </a></div>
                    </form>
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




@endsection
