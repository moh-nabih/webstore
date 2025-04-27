<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $items = Item::take(7)->get();
        $categories = Category::take(4)->get();
        return view('welcome', compact('items', 'categories'));
    }
}
