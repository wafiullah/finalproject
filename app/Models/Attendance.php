<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $dates = [
        'date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
