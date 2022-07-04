<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cars</title>
    </head>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0";>

        <h1>Rent a car</h1>
        @foreach($cars as $car)
        <div class="flex" style="align-items:center"><p>Car:{{$car->model}}</p>
        {{ csrf_field() }}
        <a href="{{url('/updatesaveCar/' .$car->id)}}" style="max-height: 25px; margin-left:20px;">Update</a>
        <a href="{{url('/deletesaveCar/' .$car->id)}}" style="max-height: 25px; margin-left:20px;">Delete</a>
        </div>
        @endforeach
    
        <form action="{{ route('saveCar') }}" method="post">
            {{ csrf_field() }}
        <label for="rent-a-car">New car</label><br>
        <input type="text" name="registration licence" placeholder="registration licence"> <br>
        <input type="text" name="brand" placeholder="brand"><br>
        <input type="text" name="model" placeholder="model"><br>
        <input type="text" name="manufacture date" placeholder="manufacture date"><br>
        <input type="text" name="description" placeholder="description"><br>
        <input type="number" name="category id" placeholder="category id"><br>
        <input type="text" name="properties" placeholder="properties"><br>

        <button type="submit">save car</button>
        </form>
        
    </div>
    </body>
</html>
