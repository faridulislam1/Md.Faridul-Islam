<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;


class TaskController extends Controller
{
    public static  $tasks,$task;

    public function addTask(){
        return view('admin.product.add-task');

    }
    public function manageTask(){
        self::$tasks=tasks::all();
        return view('admin.product.manage-task',[
            'tasks'=>self::$tasks

        ]);

    }
    public function saveTask(Request $request){

        tasks::saveTask($request);
        return back()->with('message', 'Info saved');

    }
    public function taskDelete(Request $request){
        tasks::taskDelete($request->id);
        return back()->with('message', 'Info deleted');

    }
    public function taskEdit($id){
        self::$task=tasks::find($id);
        return view('admin.product.task-edit',[
            'task'=>self::$product
        ]);

    }
    public function taskUpdate(Request $request){
        tasks::taskUpdate($request);
        return back()->with('message', 'Info updated');



    }
}

