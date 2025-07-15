<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{


    protected $table = 'enrollments';
    protected $fillable = [
        'student_id',
        'course_id',
        'enrollment_date',
        'status',
    ];        
}
