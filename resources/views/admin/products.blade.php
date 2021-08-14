@extends('admin.base')

@section('content')
    <div class="container mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Manage Products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>brand</th>
                    <th>price</th>
                    <th>discounted_price</th>
                    <th>category</th>
                    <th>image</th>
                    <th>action</th>
                </tr>
                @foreach ($products as $item )
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->p_title}}</td>
                        <td>{{$item->brand}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->discount_price}}</td>
                        <td>{{$item->category->title}}</td>
                        <td>{{$item->image}}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary" data-bs-toggle="dropdown">Action</button>

                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Edit</a>
                                    <a href="" class="dropdown-item">View</a>
                                    <form action="{{route('admin.product.delete',['id'=>$item->id])}}" method="POST">
                                        @method('delete') @csrf
                                        <input type="hidden">

                                        <button type="submit" class="dropdown-item"> <i class="bi bi-trash link-danger"></i>Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
