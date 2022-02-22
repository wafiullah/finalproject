<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSalary extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'month', 'year', 'absents', 'presents', 'generated_salary', 'deducted_salary'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
