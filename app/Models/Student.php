<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Student extends Model
{
    use HasFactory;

        public function class(): BelongsTo
        {
            return $this->belongsTo(Classroom::class);
        }

        public function extracurriculars(): BelongsToMany
        {
            return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id','extracurricular_id');
        }
}
