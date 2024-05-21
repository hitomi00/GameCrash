<?php

namespace App\Http\Controllers;

use App\Models\CarouselItem;

class CarouselController extends Controller
{
    public function show()
    {
        return view('admin.pages.carouselEdit')->with(['items' => CarouselItem::all()]);
    }
}
