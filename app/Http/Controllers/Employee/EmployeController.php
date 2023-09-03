<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('employees')->get();
        return view('home.home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request){
        // dd( $request->all());
        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
            'status' => $request->status,
            'salary' => $request->salary,
            'image'=> "https://imranbappy.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fimran-hosen.51750c04.png&w=640&q=75",
        ];

        DB::table('employees')->insert($data);
        
        // return view('home.home');

        
        return redirect()->route('home')->with('success', 'Employee created successfully.');
    }
  
    public function edit()
    {
        //

             return view('home.edit');
    }

 
}