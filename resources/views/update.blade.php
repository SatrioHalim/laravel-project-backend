<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center">{{ __('INPUT NEW ITEM') }} </div>
            <div class="card-body">
                <form action="{{ route('updateBook', ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    @method('patch')
                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input name="title" value="{{$book->title}}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input title">
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">author</label>
                        <input name="author"  value="{{$book->author}}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input author">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input name="price"  value="{{$book->price}}" type="number" class="form-control" id="formGroupExampleInput" placeholder="Input price">
                    </div>

                    <div class="mb-3">
                        <label for="release" class="form-label">release</label>
                        <input name="release" value="{{$book->release}}" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input release">
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">category</label>
                        <select name="category_id" id="">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Insert</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>