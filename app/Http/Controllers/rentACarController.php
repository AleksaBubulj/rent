<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\cars;
use Illuminate\Support\Facades\Log;

class rentACarController extends Controller
{
    public function index()
    {
        return view('welcome', ['cars' => cars::all()]);
    }
    function saveCar(Request $post)
    {
        //dd($post );
        $newcars = new cars;
        $newcars->registration_licence = $post->registration_licence;
        $newcars->brand = $post->brand;
        $newcars->model = $post->model;
        $newcars->manufacture_date = $post->manufacture_date;
        $newcars->description = $post->description;
        $newcars->category_id = $post->category_id;
        $newcars->properties = $post->properties;

        $newcars->save();
        return redirect('/');
    }
    public function delete($id)
    {
        $newcars = cars::find($id);
        $newcars->delete();
        return redirect('/');

    }
    public function showData($id)
    {
        $data = cars::find($id);
        return view('update', ['data' => $data]);
    }
    public function updateCar(Request $post)
    {   
        $car = cars::find($post->id);
        $car->brand = $post->rent;
        $car->model = $post->model;
        $car->save();
        return redirect('/');
    
    }
}
