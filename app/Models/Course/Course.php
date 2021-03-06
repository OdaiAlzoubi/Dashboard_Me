<?php

namespace App\Models\Course;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;

    // لأستخدام soft delete
    // يجب طلب     use Illuminate\Database\Eloquent\SoftDeletes;      {and}      use SoftDeletes;




    protected $table = 'courses';


    public $timestamps = false;
    protected $fillable = [
        'name',
        'presenter',
        'description',
        'image',
        'deleted_at',
        'category'
    ];

    /**
     * Get all of the video for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function video()
    {
        return $this->hasMany(Video::class);
    }

    /**
     * Get the CategoryCourse that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoryCourse()
    {
        return $this->belongsTo(CategoryCourse::class, 'category');
    }

    /**
     * The user that belong to the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user()
    {
        return $this->belongsToMany(User::class, 'enroll');
    }
}
