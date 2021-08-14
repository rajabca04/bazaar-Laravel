<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    {{-- for bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-brand">Bazaar-admin-page</div>
            <form action="" class="d-flex mx-auto">
                <input type="text" class="form-control" size="50">
                <input type="submit" class="btn btn-dart text-white" value="search">
            </form>
            
        </div>
    </nav>
    <div class="nav navbar navbar-expand-lg navbar-dark bg-secondary p-1 sticky-top">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('admin.index')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('admin.product')}}" class="nav-link">Product Manage</a></li>
                <li class="nav-item"><a href="{{route('productInsert')}}" class="nav-link">Insert Product</a></li>
                <li class="nav-item"><a href="{{route('admin.orders')}}" class="nav-link">Orders</a></li>
                <li class="nav-item"><a href="{{route('admin.address')}}" class="nav-link">Addreess</a></li>
                <li class="nav-item"><a href="{{route('admin.coupon')}}" class="nav-link">Coupons</a></li>
                <li class="nav-item"><a href="{{route('admin.category')}}" class="nav-link">Category</a></li>
                <li class="nav-item"><a href="" class="nav-link">User</a></li>
                <li class="nav-item"><a href="" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </div>

    @section('content')
        @show
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>