<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4 class="mb-0">Categories List</h4>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover post-table">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Posts</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $sl = 1;
                        @endphp
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                <td>{{$category->posts?->category}} </td>


                                <td>{{$post->created_at->toDayDateTimeString()}}</td>

                                <td>{{$post->created_at != $post->updated_at ? $post->updated_at->toDayDateTimeString() :
                                'Not Updated Yet'}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>
</html>
