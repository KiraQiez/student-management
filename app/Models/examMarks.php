<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class examMarks extends Model
{

    protected $table = 'exam_marks';
    protected $fillable = [
        'enrollment_id',
        'exam_type',
        'exam_date',
        'marks',
        'max_marks',
    ];

}
