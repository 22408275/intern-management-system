<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
   public function intern()
    {
        return $this->belongsTo(Intern::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id');
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
