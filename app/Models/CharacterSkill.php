<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Thiagoprz\CompositeKey\HasCompositeKey;

class CharacterSkill extends Pivot
{
    use HasCompositeKey;

    protected $primaryKey = ['character_id', 'skill_id'];
}
