<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Race extends Model
{
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }

    public function advantages(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class)->using(RaceAdvantage::class);
    }
}
