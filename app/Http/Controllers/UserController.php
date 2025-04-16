<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Employee;


class UserController extends Controller
{
    //
    public function list(){
        $employee = new Employee()::paginate(10);

        return view('add-table',['employee'=>$employee]);
    }

    public function add(Request $request){
        $employee  = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;
        $employee->save();
        if($employee){
            return redirect('add-sucess');
        }

    }

    public function delete($id){
         $isDelete = Employee::destroy($id);
         if($isDelete){
            return redirect('delete-sucess');
         }
    }

    public function update($id){
        $employee = Employee::find($id);
        return view('update-emp',['employee'=>$employee]);
    }

    //for update page
    public function updateEmp(Request $request,$id){
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->age = $request->age;

        if($employee->save()){
            return view('update-sucess');
        }
        
    }

    public function search(Request $request){
        $employee = Employee::where('name', 'LIKE', $request->search . '%')->get();
        return view('add-table',['employee'=>$employee]);
    }
}