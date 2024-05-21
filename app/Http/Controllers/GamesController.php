<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GamesController extends Controller
{
    public function show()
    {
        return view('admin.pages.games')->with(['games' => Game::all()]);
    }

    public function showAdd()
    {
        return view('admin.pages.games.add');
    }


}
