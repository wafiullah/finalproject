<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'email', 'mobile', 'address', 'experience', 'photo', 'salary', 'city', 'state', 'designation', 'joining_date',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
