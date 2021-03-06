<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  // singling out the properties that the Model is allowed to try to fill
  protected $fillable = ['first_name', 'last_name', 'student_id_nr', 'email'];
}
