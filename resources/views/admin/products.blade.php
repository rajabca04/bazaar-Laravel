@extends('admin.base')

@section('content')
    <div class="container mt-4">
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
                        <td>{{$item->image}}</td>
                        <td>{{$item->category_id}}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary" data-bs-toggle="dropdown">Action</button>

                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">Edit</a>
                                    <a href="" class="dropdown-item">View</a>
                                    <a href="" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
