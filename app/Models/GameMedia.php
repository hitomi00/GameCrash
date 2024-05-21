<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameMedia extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'file_name', 'file_path', 'order', 'type'];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }
}
