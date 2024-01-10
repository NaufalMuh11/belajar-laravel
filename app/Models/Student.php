<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Student extends Model
{
    use HasFactory;

        public function class(): BelongsTo
        {
            return $this->belongsTo(Classroom::class);
        }
}
