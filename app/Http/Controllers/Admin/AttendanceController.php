<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Attendance::latest()->groupBy('date')->get();

        return view('admin.attendance.index', compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view('admin.attendance.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->except('_token');
        $rules = [
            'attendance' => 'required',
        ];

        $validator = Validator::make($inputs, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $date = date('Y-m-d');
        $att_date = Attendance::select('date')->where('date', $date)->first();

        if (!$att_date) {
            foreach ($request->employee_id as $emp_id) {

                $attendance = new Attendance();
                $attendance->employee_id = $emp_id;
                $attendance->attendance = $request->attendance[$emp_id];
                $attendance->date = date('Y-m-d');
                $attendance->month = strtolower(date('F'));
                $attendance->year = date('Y');
                $attendance->save();
            }

            return redirect()->back()->with('success', 'Attendance Taken Successfully.');

        } else {
            return redirect()->back()->with('error', 'Attendance is already taken for today.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show($date)
    {
        $attendances = Attendance::where('date', $date)->with('employee')->get();
        return view('admin.attendance.show', compact('attendances', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit($date)
    {
        $attendances = Attendance::where('date', $date)->with('employee')->get();
        return view('admin.attendance.edit', compact('attendances', 'date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function attendanceUpdate(Request $request)
    {
        foreach ($request->id as $att_id) {

            $up_attendance = $request->attendance[$att_id];

            $attendance = Attendance::where('id', $att_id)->first();
            $attendance->attendance = $up_attendance;
            $attendance->save();
        }

        return redirect()->back()->with('success', 'Attendance Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy($date)
    {
        $attendances = Attendance::where('date', $date)->get();
        foreach ($attendances as $attendance) {
            $attendance->delete();
        }

        return redirect()->back()->with('success', 'Attendance Deleted Successfully.');

    }

    public function attendanceMonthly(Request $request)
    {

        $attendances = Attendance::query()
            ->with('employee')
            ->select('attendance', 'date', 'employee_id', \DB::raw('count(*) as total'))
            ->whereBetween('date', [$request->start_date, $request->end_date])
            ->groupBy('attendance', 'employee_id')
            ->get()->toArray();
        $array = [];
        foreach ($attendances as $key => $attendance) {
            if (!in_array($attendance['employee_id'], $array)) {
                $employee = [
                    'employee' => $attendance['employee'],
                    'attendance' => $attendance['attendance'],
                    'employee_id' => $attendance['employee_id'],

                ];
            }
            $attendanceData = [
                'present' => $attendance['attendance'] == 1 ? $attendance['total'] : 0,
                'absent' => $attendance['attendance'] == 0 ? $attendance['total'] : 0,
            ];
            $array[$key] = array_merge($employee, $attendanceData);
        }
        $monthlyAttendances = $this->_group_by($array, 'employee_id');
        return view('admin.attendance.monthly', compact('monthlyAttendances'));
    }

    public function _group_by($array, $key)
    {
        $return = array();
        foreach ($array as $val) {
            $return[$val[$key]][] = $val;
        }
        return $return;
    }

    public function employeeAttendance(Request $request)
    {

        $attendances = Attendance::where([
            'employee_id' => $request->id,
            'month' => $request->month,
            'year' => $request->year,
        ])->with('employee')->get();

        $totalAbsents = $attendances->filter(function ($item) {
            if (!$item->attendance) {
                return true;
            }
        })->count();
        $totalPresent = $attendances->filter(function ($item) {
            if ($item->attendance) {
                return true;
            }
        })->count();

        $employee = Employee::where(['id' => $request->id])->first();

        $salaryDeductionPerAbsent = 1000;
        $deductedSalary = $salaryDeductionPerAbsent * $totalAbsents;
        $generatedSalary = $employee->salary -$deductedSalary;
        return response()->json([
            'attendances' => $attendances,
            'totalAbsents' => $totalAbsents,
            'totalPresent' => $totalPresent,
            'employee' => $employee,
            'generatedSalary' => $generatedSalary,
            'deductedSalary' => $deductedSalary,
        ]);
    }
}
