<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
Use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Extracurricular extends Model
{
    use HasFactory;
    
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_extracurricular','extracurricular_id', 'student_id');
    }
}
