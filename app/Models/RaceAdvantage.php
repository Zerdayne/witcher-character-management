<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Thiagoprz\CompositeKey\HasCompositeKey;

class RaceAdvantage extends Pivot
{
    use HasCompositeKey;

    protected $primaryKey = ['race_id', 'skill_id'];
}
