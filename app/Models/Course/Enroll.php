<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class Enroll extends Model
{
    use HasFactory;

    protected $table = 'enroll';


    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'course_id',
        'enroll_date',
    ];

}
