<?php

namespace App\Models;

Use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Classroom extends Model
{
    use HasFactory;

    protected $table= 'class';

    
    public function students()
    {
        return $this->hasMany(Student::class,'class_id','id');
    }
    public function homeroomTeacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}