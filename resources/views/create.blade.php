<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center">{{ __('INPUT NEW ITEM') }} </div>
            <div class="card-body">
                <form action="{{ route('createBook')}}" method="POST" enctype="multipart/form-data">
                    @CSRF
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input name="image" type="file" class="form-control" id="formGroupExampleInput">
                        @error('image')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input title">
                        @error('title')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">author</label>
                        <input name="author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input author">
                        @error('author')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input name="price" type="number" class="form-control" id="formGroupExampleInput" placeholder="Input price">
                        @error('price')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="release" class="form-label">release</label>
                        <input name="release" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input release">
                        @error('release')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">category</label>
                        <select name="category_id" id="">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    

                    <button type="submit" class="btn btn-success">Insert</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>