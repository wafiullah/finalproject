<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees = Employee::query()
            ->when($request->email, function ($query, $email) {
                return $query->where('email', $email);
            })
            ->when($request->name, function ($query, $name) {
                return $query->where('name', $name);
            })
            ->latest()
            ->get();
        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.create');
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
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:employees',
            'mobile' => 'required|max:30',
            'address' => 'required|max:255',
            'state' => 'required|max:100',
            'city' => 'required|max:100',
            'designation' => 'nullable|max:150',
            'salary' => 'nullable|max:30',
            'experience' => 'nullable|max:50',
            'joining_date' => 'nullable',
            'photo' => 'nullable|image',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images"), $filename);
            $path = '/images/' . $filename;
            $validated['photo'] = $path;
        }
        Employee::create($validated);
        return redirect()->back()->with('success', 'Employee successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        return view('admin.employees.edit', compact('employee'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'mobile' => 'required|max:30',
            'address' => 'required|max:255',
            'state' => 'required|max:100',
            'city' => 'required|max:100',
            'designation' => 'nullable|max:150',
            'salary' => 'nullable|max:30',
            'experience' => 'nullable|max:50',
            'joining_date' => 'nullable',
            'photo' => 'nullable|image',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images"), $filename);
            $path = '/images/' . $filename;
            $validated['photo'] = $path;
        }

        $employee->update($validated);
        return redirect()->back()->with('success', 'Employee successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back()->with('success', 'Employee successfully updated.');
    }
}
