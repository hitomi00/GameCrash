<?php

namespace App\Http\Controllers;

use App\Models\GameMedia;
use Illuminate\Http\Request;

class GameMediaController extends Controller
{
    public function store(Request $request, GameMedia $game)
    {
        $files = $request->file('files');
        $type = $request->input('type');

        foreach ($files as $file) {
            $path = $file->store('uploads', 'public');
            GameMedia::create([
                'game_id' => $game->id,
                'file_name' => $file->getClientOriginalName(),
                'file_path' => $path,
                'type' => $type,
            ]);
        }

        return response()->json(['message' => 'Files uploaded successfully'], 200);
    }

    public function updateOrder(Request $request, GameMedia $media)
    {
        $media->update(['order' => $request->input('order')]);
        return response()->json(['message' => 'Order updated successfully'], 200);
    }
}
