<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarouselItem extends Model
{
    use HasFactory;

    public function Game(): HasOne
    {
        return $this->hasOne(Game::class);
    }
}
