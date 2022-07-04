<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\categories;
use Illuminate\Support\Facades\Log;

class categoryController extends Controller
{
    public function index()
    {
        return view('welcome', ['categories' => categories::all()]);
    }
    function saveCategory(Request $post)
    {
        //dd($post );
        $newcategories = new categories;
        $newcategories->name = $post->name;
        $newcategories->price = $post->price;
        $newcategories->parent_id = $post->parent_id;
        $newcategories->save();
        return redirect('/');
    }
  
    }

