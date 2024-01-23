<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function addEmployee(Request $request)
    {
        $file = $request->file('file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('images', $filename, 'public');
    
        $employee = new Employee;
        $employee->name = $request->input('name'); // Use input to get form data
        $employee->email = $request->input('email');
        $employee->image = $filePath;
    
        $employee->save();
    
        return response()->json(['res' => 'Employee created successfully in Database']);
    }

    public function getEmployees()
    {
        $employees = Employee::all();
        return response()->json(['employees' => $employees]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
