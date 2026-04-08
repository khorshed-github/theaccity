<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    use HasFactory;

    protected $table = 'course_details'; // Specify the table name
    protected $fillable = ['country_id','location_id','university_id','course_id','subject_id','title', 'shot_desc','requirement','requirement2','schedule','fees','interview','intake','delivery_mode','entry_route','assessment_required','course_duration','course_link','course_link2'];
}


