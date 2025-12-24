<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $fillable = ['title', 'description'];

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
