<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //index
    public function index(){
        $data = Employee::all();
        //dd($data);
        return view('datapegawai', compact('data'));
    }

    public function tambahpegawai(){
        //dd($data);
        return view('tambahpegawai');
    }

    //insert data pegawai
    public function insertpegawai(Request $request){
        //dd($request->all());
        Employee::create($request->all());
        return redirect()->route('pegawai')->with("success", "Data pegawai berhasil ditambahkan");
    }
}
