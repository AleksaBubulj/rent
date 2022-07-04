<h1>Update cars</h1>
<form action="{{ route('updateCar') }}" method="POST">
    @csrf
<input type="hidden" name="id" value="{{$data['id']}}"> <br> <br>
<input type="text" name="registration_license" placeholder="Registration licence" value="{{$data['registration_license']}}"> <br> <br>
<input type="text" name="brand" placeholder="Brand" value="{{$data['brand']}}"><br> <br>
<input type="text" name="model" placeholder="Model" value="{{$data['model']}}"><br> <br>
<input type="text" name="manufacture_date" placeholder="Manufacture date" value="{{$data['manufacture_date']}}"><br> <br>
<input type="text" name="description" placeholder="Description" value="{{$data['description']}}"><br> <br>
<input type="text" name="category_id" placeholder="Category id" value="{{$data['category_id']}}"><br> <br>
<input type="text" name="properties" placeholder="Properties" value="{{$data['properties']}}"><br> <br>
<button type="submit">Update</button>

</form>