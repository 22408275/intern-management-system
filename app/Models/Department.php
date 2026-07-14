<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
   public function internships()
{
    return $this->hasMany(Internship::class);
}
}
//One Department can have many Internships.
