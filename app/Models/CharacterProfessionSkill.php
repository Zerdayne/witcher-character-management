<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Thiagoprz\CompositeKey\HasCompositeKey;

class CharacterProfessionSkill extends Pivot
{
    use HasCompositeKey;

    protected $primaryKey = ['character_id', 'profession_skill_id'];
}
