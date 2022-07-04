<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
<h1>Categories</h1>
@foreach($categories as $category)
        <div class="flex" style="align-items:center"><p>Category:{{$category->name}}</p>
        {{ csrf_field() }}
        <a href="{{url('/updatesaveCategory/' .$category->id)}}" style="max-height: 25px; margin-left:20px;">Update</a>
        <a href="{{url('/deletesaveCategory/' .$category->id)}}" style="max-height: 25px; margin-left:20px;">Delete</a>
        </div>
        @endforeach
        
        <form action="{{ route('saveCategory') }}" method="post">
            {{ csrf_field() }}
        <label for="rent-a-car">New category</label><br>
        <input type="text" name="name " placeholder="name "> <br>
        <input type="text" name="price" placeholder="price"><br>
        <input type="text" name="parent id" placeholder="parent id"><br>
        <button type="submit">Save category</button>
        </form>
        
</body>
</html>