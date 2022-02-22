<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeSalary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $salaries = EmployeeSalary::with('employee')->where(['employee_id' => $request->id])
            ->get();

        return view('admin.employee-salary.index', compact('salaries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $employees = Employee::all();
        return view('admin.employee-salary.create', compact('employees'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'month' => ['required'],
            'year' => ['required'],
            'absents' => ['required'],
            'presents' => ['required'],
            'generated_salary' => ['required'],
            'deducted_salary' => ['required'],
            'employee_id' => ['required'],
        ]);

        $salaryGenerated = EmployeeSalary::where([
            'month' => $request->month,
            'year' => $request->year,
            'employee_id' => $request->employee_id,
        ])->first();

        if (!$salaryGenerated) {
            EmployeeSalary::create($validated);
            return redirect()
                ->route('admin.employee-salary.index', ['id' => $request->employee_id])
                ->with('success', 'Salary successfully generated.');
        } else {
            return redirect()
                ->route('admin.employee-salary.index', ['id' => $request->employee_id])
                ->with('error', 'Salary is already generated for selected month.');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeSalary $employeeSalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeSalary $employeeSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeSalary  $employeeSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeSalary $employeeSalary)
    {
        //
    }
}
