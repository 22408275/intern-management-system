<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    public function internships()
{
    return $this->hasMany(Internship::class);
}

public function documents()
{
    return $this->hasMany(Document::class);
}
}
