<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Thiagoprz\CompositeKey\HasCompositeKey;

class CharacterAttribute extends Pivot
{
    use HasCompositeKey;

    protected $primaryKey = ['character_id', 'attribute_id'];
}
