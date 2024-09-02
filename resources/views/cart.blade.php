<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container col-md-8" style="padding-top: 20px">
        <div class="card shadow">
            <div class="card-header text-center">{{ __('LIST OF BOOKS') }} </div>
                <div class="card-body">
                    <div class="col-md-6" style="">
                        <form action="" method="GET" class="input-group row">
                            <div class="input-group" style="">
                                <input type="text" class="form-control" name="cari" placeholder="Search" value=""/>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    <br>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Author</th>
                                <th scope="col">Price</th>
                                <th scope="col">Release</th>
                                <th scope="col">Category</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Cart</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$book->title}}</td>
                                <td>{{$book->author}}</td>
                                <td>{{$book->price}}</td>
                                <td>{{$book->release}}</td>
                                <td>{{$book->kategori->name}}</td>
                                <form action="{{ route('cartStore')}}" method="POST">
                                    @CSRF
                                    <input type="hidden" name="book_id" value="{{$book->id}}">
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <td><input type="number" name="quantity" value="1"></td>
                                    <td><button type="submit" class="btn btn-danger col-md">Add To Cart</button></td>
                                </form>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <br>
                    <h1 style="display:flex;justify-content:center">Your Cart</h1>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">QTY</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$cart->pembeli->name}}</td>
                                <td>{{$cart->buku->title}}</td>
                                <td>{{$cart->buku->author}}</td>
                                <td>{{$cart->quantity}}</td>
                                <td>Rp.{{$cart->buku->price*$cart->quantity}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</body>
</html>