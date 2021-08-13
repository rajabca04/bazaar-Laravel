@extends('admin.base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <button class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#insert">add</button>
            <div class="modal fade" id="insert">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="{{route('admin.category.insert')}}" method="POST" class="d-flex">
                                @csrf
                                    <input type="text" name="title" class="form-control">
                                    <input type="submit" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>action</th>
                </tr>
                @foreach ($categories as $item )
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->p_title}}</td>
                        
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
