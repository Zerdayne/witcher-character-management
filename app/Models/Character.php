<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Character extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    public function race(): BelongsTo
    {
        return $this->belongsTo(Race::class);
    }

    public function profession(): BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class)->using(CharacterAttribute::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class)->using(CharacterSkill::class);
    }

    public function professionSkills(): BelongsToMany
    {
        return $this->belongsToMany(ProfessionSkill::class)->using(CharacterProfessionSkill::class);
    }
}
