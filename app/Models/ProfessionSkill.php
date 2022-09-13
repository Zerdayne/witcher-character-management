<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProfessionSkill extends Model
{
    public function profession(): BelongsTo
    {
        return $this->belongsTo(Profession::class);
    }

    public function attribute(): BelongsTo
    {
        return $this->belongsTo(Attribute::class);
    }

    public function required(): BelongsTo
    {
        return $this->belongsTo(ProfessionSkill::class, 'required_profession_skill_id');
    }
}
