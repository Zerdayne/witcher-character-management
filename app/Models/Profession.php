<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profession extends Model
{
    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }

    public function skills(): HasMany
    {
        return $this->hasMany(ProfessionSkill::class);
    }
}
