@extends('admin.base')

@section('content')
    <div class="container mt-4">
        <div class="col-lg-12">
            <form action="{{('admin.product.insert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Title:</label>
                    <input type="text" name="p_title" class="form-control">
                    @error('p_title')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Brand:</label>
                    <input type="text" name="brand" class="form-control">
                    @error('brand')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">price:</label>
                    <input type="text" name="price" class="form-control">
                    @error('price')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">discount_price:</label>
                    <input type="text" name="discount_price" class="form-control">
                    @error('discount_price')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="">category:</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($categories as $cat )
                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach

                    </select>
                    @error('category_id')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">description:</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                    @error('description')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Select image:</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <p class="text-danger small">{{$message}}</p>
                    @enderror
                
                </div>
                <div class="mb-2">
                    <input type="submit" class="btn btn-success w-100">
                </div>
            </form>
        </div>
    </div>
@endsection