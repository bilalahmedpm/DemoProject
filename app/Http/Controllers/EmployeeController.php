<?php

namespace App\Http\Controllers;
use App\Models\department;
use App\Models\designation;
use App\Models\grade;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $departments = department::all();
        $designations = designation::all();
        $grades = grade::all();
        return view('Backend.Employees.AddEmployee', compact('departments','designations','grades'));
    }

    
}
